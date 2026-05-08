<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Tests;

use Andy87\ClientsAvito\ApiClientAvito;
use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetUserInfoSelfPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostOperationsHistoryPrompt;
use Andy87\ClientsAvito\Generated\Response\GetUserInfoSelfResponse;
use Andy87\ClientsAvito\Generated\Response\PostOperationsHistoryResponse;
use Andy87\ClientsBase\Auth\NullAuthorizationStrategy;
use Andy87\ClientsBase\Mock\MockTransport;
use Andy87\ClientsBase\Mock\RouteMockResponseResolver;
use PHPUnit\Framework\TestCase;

/**
 * Проверяет базовую работоспособность Avito-клиента после миграции на clients-sdk.
 */
class ApiClientAvitoSmokeTest extends TestCase
{
    /**
     * Проверяет создание клиента и ленивую инициализацию всех provider-разделов.
     *
     * @return void
     */
    public function testClientInitializesAllProvidersAndOperationGroups(): void
    {
        $client = $this->createClient(new RouteMockResponseResolver());
        $providerNames = $client->providerNames();
        $operationGroupCount = 0;

        self::assertCount(23, $providerNames);

        foreach ($providerNames as $providerName) {
            $provider = $client->provider($providerName);

            self::assertInstanceOf(BaseAvitoProvider::class, $provider);
            self::assertTrue(isset($client->{$providerName}));

            foreach ($provider->operationGroupNames() as $operationGroupName) {
                self::assertInstanceOf(BaseAvitoProvider::class, $provider->operationGroup($operationGroupName));
                self::assertTrue(isset($provider->{$operationGroupName}));
                ++$operationGroupCount;
            }
        }

        self::assertSame(115, $operationGroupCount);
    }

    /**
     * Проверяет успешный GET-запрос, сборку endpoint и гидрацию DTO ответа.
     *
     * @return void
     */
    public function testGetUserInfoSelfReturnsHydratedResponse(): void
    {
        $resolver = (new RouteMockResponseResolver())->addJson(
            'GET',
            '/core/v1/accounts/self',
            [
                'id' => 123,
                'name' => 'Test User',
                'email' => 'test@example.com',
                'phone' => '+79990000000',
                'phones' => ['+79990000000'],
                'profile_url' => 'https://www.avito.ru/user/test',
            ],
        );
        $client = $this->createClient($resolver);

        $response = $client->user->getUserInfoSelf(new GetUserInfoSelfPrompt());

        self::assertInstanceOf(GetUserInfoSelfResponse::class, $response);
        self::assertFalse($response->hasError());
        self::assertSame(200, $response->getStatusCode());
        self::assertSame(123, $response->id);
        self::assertSame('Test User', $response->name);
        self::assertSame('/core/v1/accounts/self', $response->getRequest()?->metadata['endpoint'] ?? null);
        self::assertNull($response->getRequest()?->body);
    }

    /**
     * Проверяет успешный POST-запрос с JSON body и гидрацию DTO ответа.
     *
     * @return void
     */
    public function testPostOperationsHistorySendsBodyAndReturnsHydratedResponse(): void
    {
        $resolver = (new RouteMockResponseResolver())->addJson(
            'POST',
            '/core/v1/accounts/operations_history/',
            [
                'result' => [
                    'operations' => [],
                ],
            ],
        );
        $client = $this->createClient($resolver);

        $response = $client->user->postOperationsHistory(new PostOperationsHistoryPrompt([
            'dateTimeFrom' => '2026-01-01T00:00:00+03:00',
            'dateTimeTo' => '2026-01-02T00:00:00+03:00',
        ]));

        self::assertInstanceOf(PostOperationsHistoryResponse::class, $response);
        self::assertFalse($response->hasError());
        self::assertSame(200, $response->getStatusCode());
        self::assertSame(['operations' => []], $response->result);
        self::assertSame(
            [
                'dateTimeFrom' => '2026-01-01T00:00:00+03:00',
                'dateTimeTo' => '2026-01-02T00:00:00+03:00',
            ],
            $response->getRequest()?->body,
        );
    }

    /**
     * Проверяет, что error-response возвращается как DTO с ApiError без гидрации успешной модели.
     *
     * @dataProvider errorResponseProvider
     *
     * @param int    $statusCode HTTP-статус mock-ответа.
     * @param string $code       Код ошибки Avito API.
     * @param string $message    Сообщение ошибки Avito API.
     *
     * @return void
     */
    public function testErrorResponseReturnsApiErrorWithoutSuccessHydrationFailure(
        int $statusCode,
        string $code,
        string $message,
    ): void
    {
        $resolver = (new RouteMockResponseResolver())->addJson(
            'GET',
            '/core/v1/accounts/self',
            [
                'error' => [
                    'code' => $code,
                    'message' => $message,
                    'type' => 'api',
                ],
            ],
            $statusCode,
        );
        $client = $this->createClient($resolver);

        $response = $client->user->getUserInfoSelf(new GetUserInfoSelfPrompt());

        self::assertTrue($response->hasError());
        self::assertSame($statusCode, $response->getStatusCode());
        self::assertNull($response->model);
        self::assertSame($code, $response->getError()?->code);
        self::assertSame($message, $response->getError()?->message);
    }

    /**
     * Возвращает наборы error-response для проверки статусов Avito API.
     *
     * @return array<string, array{statusCode: int, code: string, message: string}> Наборы ошибок.
     */
    public static function errorResponseProvider(): array
    {
        return [
            'unauthorized' => [
                'statusCode' => 401,
                'code' => 'unauthorized',
                'message' => 'Unauthorized',
            ],
            'bad-request' => [
                'statusCode' => 400,
                'code' => 'bad_request',
                'message' => 'Bad request',
            ],
        ];
    }

    /**
     * Создаёт Avito-клиент с mock transport без реальных HTTP-запросов.
     *
     * @param RouteMockResponseResolver $resolver Resolver mock-ответов.
     *
     * @return ApiClientAvito Клиент Avito API.
     */
    private function createClient(RouteMockResponseResolver $resolver): ApiClientAvito
    {
        return new ApiClientAvito(
            [
                'clientId' => 'test-client-id',
                'clientSecret' => 'test-client-secret',
                'baseUrl' => 'https://api.avito.test',
            ],
            new MockTransport($resolver),
            new NullAuthorizationStrategy(),
        );
    }
}
