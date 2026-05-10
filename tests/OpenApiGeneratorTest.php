<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Tests;

use and_y87\php_client_avito\Generated\Prompt\GetProfilePrompt;
use PHPUnit\Framework\TestCase;

/**
 * Проверяет критичные правила генерации OpenAPI-клиента Avito.
 */
class OpenApiGeneratorTest extends TestCase
{
    /**
     * Проверяет, что генератор включает авторизацию по global security и managed Authorization header.
     *
     * @return void
     */
    public function testGeneratorDetectsAuthorizationFromGlobalSecurityAndAuthorizationHeader(): void
    {
        $generatorPath = dirname(__DIR__) . '/tools/generate-avito-openapi.mjs';
        $source = file_get_contents($generatorPath);

        self::assertIsString($source);

        $source = preg_replace(
            '/\nmain\(\)\.catch\(\(error\) => \{\n    console\.error\(error\);\n    process\.exit\(1\);\n\}\);\s*$/',
            '',
            $source,
        );

        self::assertIsString($source);

        $script = $source . <<<'JS'

const cases = [
    {
        name: 'global security',
        expected: true,
        spec: { security: [{ OAuth2: [] }] },
        operation: { parameters: [] },
    },
    {
        name: 'managed Authorization header',
        expected: true,
        spec: {},
        operation: { security: [], parameters: [{ in: 'header', name: 'Authorization' }] },
    },
    {
        name: 'operation security',
        expected: true,
        spec: {},
        operation: { security: [{ ApiKey: [] }], parameters: [] },
    },
    {
        name: 'operation disables global security',
        expected: false,
        spec: { security: [{ OAuth2: [] }] },
        operation: { security: [], parameters: [] },
    },
];

for (const item of cases) {
    const actual = operationRequiresAuthorization(item.spec, item.operation);

    if (actual !== item.expected) {
        throw new Error(`${item.name}: expected ${item.expected}, got ${actual}`);
    }
}

if (cleanOpenApiPath('/token\u200e\u200e') !== '/token') {
    throw new Error('cleanOpenApiPath must remove invisible OpenAPI path characters.');
}

for (const headerName of ['Authorization', 'Content-Type', 'Accept']) {
    if (!isManagedHeader({ in: 'header', name: headerName })) {
        throw new Error(`${headerName} header must be treated as managed.`);
    }
}

if (isManagedHeader({ in: 'header', name: 'X-Source' })) {
    throw new Error('X-Source header must stay user-controlled.');
}
JS;
        $temporaryPath = tempnam(sys_get_temp_dir(), 'avito-generator-test-');

        self::assertIsString($temporaryPath);

        $scriptPath = $temporaryPath . '.mjs';
        rename($temporaryPath, $scriptPath);
        file_put_contents($scriptPath, $script);

        $output = [];

        try {
            exec('node ' . escapeshellarg($scriptPath) . ' 2>&1', $output, $exitCode);
        } finally {
            unlink($scriptPath);
        }

        self::assertSame(0, $exitCode, implode("\n", $output));
    }

    /**
     * Проверяет, что generated Prompt DTO для операции с global security требует авторизацию.
     *
     * @return void
     */
    public function testGeneratedPromptFromGlobalSecurityRequiresAuthorization(): void
    {
        self::assertTrue((new GetProfilePrompt())->requiresAuthorization());
    }

    /**
     * Проверяет, что generated Prompt DTO не содержат невидимые символы в endpoint.
     *
     * @return void
     */
    public function testGeneratedPromptEndpointsDoNotContainNonAsciiControlCharacters(): void
    {
        foreach ($this->generatedPromptClasses() as $className) {
            $reflection = new \ReflectionClass($className);
            $endpoint = $reflection->getConstant('ENDPOINT');

            self::assertIsString($endpoint);
            self::assertDoesNotMatchRegularExpression('/[^\x20-\x7E]/', $endpoint, $className);
        }
    }

    /**
     * Проверяет, что generated Prompt DTO не требуют управляемые SDK HTTP-заголовки как пользовательские поля.
     *
     * @return void
     */
    public function testGeneratedPromptsDoNotExposeManagedHeaders(): void
    {
        $managedHeaders = ['authorization', 'content-type', 'accept'];

        foreach ($this->generatedPromptClasses() as $className) {
            $reflection = new \ReflectionClass($className);
            $fieldMap = $reflection->getConstant('FIELD_MAP');
            $headerFields = $reflection->getConstant('HEADER_FIELDS');

            self::assertIsArray($fieldMap);
            self::assertIsArray($headerFields);

            foreach ($headerFields as $property) {
                $headerName = strtolower((string) ($fieldMap[$property] ?? $property));

                self::assertNotContains($headerName, $managedHeaders, $className);
            }
        }
    }

    /**
     * Возвращает классы generated Prompt DTO.
     *
     * @return list<class-string>
     */
    private function generatedPromptClasses(): array
    {
        $classes = [];
        $basePath = dirname(__DIR__) . '/src/Generated/Prompt';
        $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($basePath));

        foreach ($iterator as $file) {
            if (!$file instanceof \SplFileInfo || !$file->isFile() || $file->getExtension() !== 'php') {
                continue;
            }

            $relativePath = str_replace(dirname(__DIR__) . '/src/', '', $file->getPathname());
            $className = 'and_y87\php_client_avito\\' . str_replace(['/', '.php'], ['\\', ''], $relativePath);

            if (!class_exists($className)) {
                continue;
            }

            $classes[] = $className;
        }

        sort($classes);

        return $classes;
    }
}
