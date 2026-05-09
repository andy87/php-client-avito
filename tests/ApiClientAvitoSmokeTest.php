<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Tests;

use Andy87\ClientsAvito\ApiClientAvito;
use Andy87\ClientsAvito\AvitoConfig;
use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\AddAreasSandboxPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ApplicationsWebhookDeletePrompt;
use Andy87\ClientsAvito\Generated\Prompt\ApplyVasPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ChatByActionIdPrompt;
use Andy87\ClientsAvito\Generated\Prompt\DownloadLabelPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GenerateLabelsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetChatsV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetUserInfoSelfPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostOperationsHistoryPrompt;
use Andy87\ClientsAvito\Generated\Prompt\UploadImagesPrompt;
use Andy87\ClientsAvito\Generated\Response\DownloadLabelResponse;
use Andy87\ClientsAvito\Generated\Response\GetUserInfoSelfResponse;
use Andy87\ClientsAvito\Generated\Response\PostOperationsHistoryResponse;
use Andy87\PhpClientSdk\Auth\ApiKeyAuthorizationStrategy;
use Andy87\PhpClientSdk\Auth\NullAuthorizationStrategy;
use Andy87\PhpClientSdk\Auth\PromptClassAuthorizationStrategyResolver;
use Andy87\PhpClientSdk\Http\HttpRequest;
use Andy87\PhpClientSdk\Http\HttpResponse;
use Andy87\PhpClientSdk\Http\MultipartFile;
use Andy87\PhpClientSdk\Http\TraceableTransport;
use Andy87\PhpClientSdk\Mock\CallbackMockResponseResolver;
use Andy87\PhpClientSdk\Mock\MockResponseResolverInterface;
use Andy87\PhpClientSdk\Mock\MockTransport;
use Andy87\PhpClientSdk\Mock\PromptClassMockResponseResolver;
use Andy87\PhpClientSdk\Mock\RouteMockResponseResolver;
use PHPUnit\Framework\TestCase;

/**
 * Проверяет базовую работоспособность Avito-клиента после миграции на php-client-sdk.
 */
class ApiClientAvitoSmokeTest extends TestCase
{
    /**
     * Проверяет сборку base URL из protocol, host и prefix.
     *
     * @return void
     */
    public function testConfigBuildsBaseUrlFromParts(): void
    {
        $config = AvitoConfig::fromArray([
            'clientId' => 'test-client-id',
            'clientSecret' => 'test-client-secret',
            'protocol' => 'https',
            'host' => 'api.avito.test',
            'prefix' => 'openapi',
        ]);

        self::assertSame('https://api.avito.test/openapi', $config->getBaseUrl());
        self::assertSame(AvitoConfig::DEFAULT_BASE_URL, $config->baseUrl);
    }

    /**
     * Проверяет, что явный baseUrl имеет приоритет над составными частями URL.
     *
     * @return void
     */
    public function testExplicitBaseUrlHasPriorityOverBaseUrlParts(): void
    {
        $config = AvitoConfig::fromArray([
            'clientId' => 'test-client-id',
            'clientSecret' => 'test-client-secret',
            'baseUrl' => 'https://explicit.avito.test',
            'protocol' => 'https',
            'host' => 'api.avito.test',
            'prefix' => 'openapi',
        ]);

        self::assertSame('https://explicit.avito.test', $config->getBaseUrl());
    }

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
     * Проверяет mock-ответ по классу generated Prompt DTO без привязки fixture к URL.
     *
     * @return void
     */
    public function testGetUserInfoSelfCanBeMockedByPromptClass(): void
    {
        $resolver = (new PromptClassMockResponseResolver())->addJson(
            GetUserInfoSelfPrompt::class,
            [
                'id' => 321,
                'name' => 'Prompt Class User',
                'email' => 'prompt@example.com',
                'phone' => '+79991112233',
                'phones' => ['+79991112233'],
                'profile_url' => 'https://www.avito.ru/user/prompt',
            ],
        );
        $client = $this->createClient($resolver);

        $response = $client->user->getUserInfoSelf(new GetUserInfoSelfPrompt());

        self::assertInstanceOf(GetUserInfoSelfResponse::class, $response);
        self::assertFalse($response->hasError());
        self::assertSame(321, $response->id);
        self::assertSame('Prompt Class User', $response->name);
        self::assertSame('1', $response->getHeaders()['X-Mock-Response']);
    }

    /**
     * Проверяет, что 401 обновляет OAuth token и повторяет API-запрос один раз.
     *
     * @return void
     */
    public function testUnauthorizedResponseRefreshesTokenAndRetriesOnce(): void
    {
        $tokenCalls = 0;
        $apiCalls = 0;
        $resolver = new CallbackMockResponseResolver(static function (HttpRequest $request) use (&$tokenCalls, &$apiCalls): ?HttpResponse {
            if ($request->method === 'POST' && $request->url === 'https://auth.avito.test/token') {
                ++$tokenCalls;

                return new HttpResponse(200, ['Content-Type' => 'application/json'], sprintf(
                    '{"access_token":"token-%d","expires_in":3600}',
                    $tokenCalls,
                ));
            }

            if ($request->method === 'GET' && $request->url === 'https://api.avito.test/core/v1/accounts/self') {
                ++$apiCalls;

                if ($apiCalls === 1) {
                    return new HttpResponse(401, ['Content-Type' => 'application/json'], '{"error":{"message":"expired"}}');
                }

                return new HttpResponse(200, ['Content-Type' => 'application/json'], '{"id":777,"name":"Retried"}');
            }

            return null;
        });
        $client = new ApiClientAvito(
            [
                'clientId' => 'test-client-id',
                'clientSecret' => 'test-client-secret',
                'baseUrl' => 'https://api.avito.test',
                'tokenUrl' => 'https://auth.avito.test/token',
            ],
            new MockTransport($resolver),
            null,
            [
                ApiClientAvito::TRACEABLE_TRANSPORT => true,
            ],
        );

        $response = $client->user->getUserInfoSelf(new GetUserInfoSelfPrompt());

        self::assertFalse($response->hasError());
        self::assertSame(777, $response->id);
        self::assertSame(2, $tokenCalls);
        self::assertSame(2, $apiCalls);
        self::assertTrue($response->getRequest()?->metadata['authorizationRefreshed'] ?? false);
        self::assertCount(4, $client->getTraceableTransport()?->getRecords() ?? []);
    }

    /**
     * Проверяет, что authorizationResolver может переопределить auth для generated Prompt DTO.
     *
     * @return void
     */
    public function testAuthorizationResolverCanOverrideGeneratedPromptAuthorization(): void
    {
        $authorizationHeader = null;
        $resolver = new CallbackMockResponseResolver(static function (HttpRequest $request) use (&$authorizationHeader): HttpResponse {
            $authorizationHeader = $request->headers['X-Api-Key'] ?? null;

            return new HttpResponse(200, ['Content-Type' => 'application/json'], '{"id":123,"name":"Resolver"}');
        });
        $client = new ApiClientAvito(
            [
                'clientId' => 'test-client-id',
                'clientSecret' => 'test-client-secret',
                'baseUrl' => 'https://api.avito.test',
            ],
            new MockTransport($resolver),
            new NullAuthorizationStrategy(),
            [
                ApiClientAvito::AUTHORIZATION_RESOLVER => new PromptClassAuthorizationStrategyResolver([
                    GetUserInfoSelfPrompt::class => new ApiKeyAuthorizationStrategy('X-Api-Key', 'prompt-secret'),
                ]),
            ],
        );

        $response = $client->user->getUserInfoSelf(new GetUserInfoSelfPrompt());

        self::assertFalse($response->hasError());
        self::assertSame('prompt-secret', $authorizationHeader);
    }

    /**
     * Проверяет opt-in TraceableTransport и защиту от повторной обёртки.
     *
     * @return void
     */
    public function testTraceableTransportOptionRecordsRequestsAndDoesNotDoubleWrap(): void
    {
        $resolver = (new PromptClassMockResponseResolver())->addJson(
            GetUserInfoSelfPrompt::class,
            ['id' => 123, 'name' => 'Trace'],
        );
        $traceableTransport = new TraceableTransport(new MockTransport($resolver));
        $client = new ApiClientAvito(
            [
                'clientId' => 'test-client-id',
                'clientSecret' => 'test-client-secret',
                'baseUrl' => 'https://api.avito.test',
            ],
            $traceableTransport,
            new NullAuthorizationStrategy(),
            [
                ApiClientAvito::TRACEABLE_TRANSPORT => true,
            ],
        );

        $response = $client->user->getUserInfoSelf(new GetUserInfoSelfPrompt());

        self::assertSame($traceableTransport, $client->getTransport());
        self::assertSame($traceableTransport, $client->getTraceableTransport());
        self::assertFalse($response->hasError());
        self::assertCount(1, $traceableTransport->getRecords());
        self::assertSame(200, $traceableTransport->getLastRecord()?->response?->statusCode);
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
     * Проверяет генерацию header, path, query и body параметров в Generated Prompt DTO.
     *
     * @return void
     */
    public function testGeneratedPromptMapsHeaderPathQueryAndBodyParameters(): void
    {
        $requests = [];
        $resolver = new CallbackMockResponseResolver(static function (HttpRequest $request) use (&$requests): ?HttpResponse {
            $requests[] = $request;

            if ($request->method === 'POST' && $request->url === 'https://api.avito.test/order-management/1/orders/labels') {
                return new HttpResponse(200, ['Content-Type' => 'application/json'], '{"taskID":"task-1"}');
            }

            if ($request->method === 'GET' && $request->url === 'https://api.avito.test/cpa/v1/chatByActionId/77') {
                return new HttpResponse(200, ['Content-Type' => 'application/json'], '{}');
            }

            if ($request->method === 'PUT' && $request->url === 'https://api.avito.test/core/v2/items/123/vas/') {
                return new HttpResponse(200, ['Content-Type' => 'application/json'], '{}');
            }

            if ($request->method === 'DELETE' && $request->url === 'https://api.avito.test/job/v1/applications/webhook') {
                return new HttpResponse(200, ['Content-Type' => 'application/json'], '{"ok":true}');
            }

            return null;
        });
        $client = $this->createClient($resolver);

        $client->orderManagement->generateLabels(new GenerateLabelsPrompt(['orderIDs' => ['order-1']]));
        $client->cpa->chatByActionId(new ChatByActionIdPrompt(['actionId' => 77, 'X_Source' => 'crm']));
        $client->item->applyVas(new ApplyVasPrompt(['item_id' => 123, 'slugs' => ['vip']]));
        $client->job->applicationsWebhookDelete(new ApplicationsWebhookDeletePrompt(['url' => 'https://hook.test/avito']));

        self::assertCount(4, $requests);
        self::assertSame(['orderIDs' => ['order-1']], $requests[0]->body);
        self::assertArrayNotHasKey('Authorization', $requests[0]->body);
        self::assertSame('crm', $requests[1]->headers['X-Source']);
        self::assertSame('https://api.avito.test/cpa/v1/chatByActionId/77', $requests[1]->url);
        self::assertSame('https://api.avito.test/core/v2/items/123/vas/', $requests[2]->url);
        self::assertSame(['slugs' => ['vip']], $requests[2]->body);
        self::assertSame(['url' => 'https://hook.test/avito'], $requests[3]->query);
        self::assertSame('url=https%3A%2F%2Fhook.test%2Favito', $requests[3]->metadata['queryString']);
    }

    /**
     * Проверяет, что generated Prompt DTO отправляет root requestBody без обёртки в поле body.
     *
     * @return void
     */
    public function testGeneratedPromptSendsRootRequestBody(): void
    {
        $capturedRequest = null;
        $resolver = new CallbackMockResponseResolver(static function (HttpRequest $request) use (&$capturedRequest): HttpResponse {
            $capturedRequest = $request;

            return new HttpResponse(200, ['Content-Type' => 'application/json'], '{}');
        });
        $client = $this->createClient($resolver);

        $client->deliverySandbox->addAreasSandbox(new AddAreasSandboxPrompt([
            'tariff_id' => 15,
            'body' => [
                'areas' => [
                    ['id' => 1],
                ],
            ],
        ]));

        self::assertInstanceOf(HttpRequest::class, $capturedRequest);
        self::assertSame('https://api.avito.test/delivery-sandbox/tariffs/15/areas', $capturedRequest->url);
        self::assertSame(['areas' => [['id' => 1]]], $capturedRequest->body);
        self::assertSame('{"areas":[{"id":1}]}', $capturedRequest->rawBody);
    }

    /**
     * Проверяет multipart/form-data upload в generated Prompt DTO.
     *
     * @return void
     */
    public function testGeneratedPromptSendsMultipartUpload(): void
    {
        $path = tempnam(sys_get_temp_dir(), 'avito-upload');
        self::assertIsString($path);
        file_put_contents($path, 'image-bytes');

        try {
            $capturedRequest = null;
            $resolver = new CallbackMockResponseResolver(static function (HttpRequest $request) use (&$capturedRequest): HttpResponse {
                $capturedRequest = $request;

                return new HttpResponse(200, ['Content-Type' => 'application/json'], '{}');
            });
            $client = $this->createClient($resolver);

            $client->messenger->uploadImages(new UploadImagesPrompt([
                'user_id' => 7,
                'uploadfile[]' => new MultipartFile($path, 'image.jpg', 'image/jpeg'),
            ]));

            self::assertInstanceOf(HttpRequest::class, $capturedRequest);
            self::assertSame('https://api.avito.test/messenger/v1/accounts/7/uploadImages', $capturedRequest->url);
            self::assertStringStartsWith('multipart/form-data; boundary=', (string) $capturedRequest->headers['Content-Type']);
            self::assertStringContainsString('name="uploadfile[]"', (string) $capturedRequest->rawBody);
            self::assertStringContainsString('filename="image.jpg"', (string) $capturedRequest->rawBody);
            self::assertStringContainsString('image-bytes', (string) $capturedRequest->rawBody);
        } finally {
            unlink($path);
        }
    }

    /**
     * Проверяет OpenAPI form/explode query encoding для generated массивов.
     *
     * @return void
     */
    public function testGeneratedPromptUsesOpenApiQueryStyles(): void
    {
        $capturedRequest = null;
        $resolver = new CallbackMockResponseResolver(static function (HttpRequest $request) use (&$capturedRequest): HttpResponse {
            $capturedRequest = $request;

            return new HttpResponse(200, ['Content-Type' => 'application/json'], '{}');
        });
        $client = $this->createClient($resolver);

        $client->messenger->getChatsV2(new GetChatsV2Prompt([
            'user_id' => 7,
            'item_ids' => [10, 20],
            'chat_types' => ['u2i', 'u2u'],
        ]));

        self::assertInstanceOf(HttpRequest::class, $capturedRequest);
        self::assertSame('item_ids=10&item_ids=20&chat_types=u2i&chat_types=u2u', $capturedRequest->metadata['queryString']);
    }

    /**
     * Проверяет, что non-JSON download response возвращается как DTO с сохранённым rawBody.
     *
     * @return void
     */
    public function testGeneratedDownloadResponseKeepsNonJsonRawBody(): void
    {
        $resolver = (new RouteMockResponseResolver())->add(
            'GET',
            '/order-management/1/orders/labels/task-1/download',
            new HttpResponse(200, ['Content-Type' => 'application/pdf'], '%PDF-1.4'),
        );
        $client = $this->createClient($resolver);

        $response = $client->orderManagement->downloadLabel(new DownloadLabelPrompt(['taskID' => 'task-1']));

        self::assertInstanceOf(DownloadLabelResponse::class, $response);
        self::assertFalse($response->hasError());
        self::assertSame('%PDF-1.4', $response->getRawBody());
        self::assertSame([], $response->getDecodedBody());
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
        $error = $response->getError();
        self::assertNotNull($error);
        self::assertSame($code, $error->code);
        self::assertSame($message, $error->message);
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
     * @param MockResponseResolverInterface $resolver Resolver mock-ответов.
     *
     * @return ApiClientAvito Клиент Avito API.
     */
    private function createClient(MockResponseResolverInterface $resolver): ApiClientAvito
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
