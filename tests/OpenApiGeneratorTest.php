<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Tests;

use Andy87\ClientsAvito\Generated\Prompt\GetProfilePrompt;
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
}
