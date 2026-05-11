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
