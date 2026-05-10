<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /autoteka/v1/packages/active_package.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/getActivePackage
 */
class GetActivePackageResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \php_client_avito\Generated\Schema\Autoteka\GetActivePackageResponseDataAutoteka::class];

    protected const MODEL = \php_client_avito\Generated\Schema\Autoteka\GetActivePackageResponseBodyAutoteka::class;

    /** @var \php_client_avito\Generated\Schema\Autoteka\GetActivePackageResponseDataAutoteka|null Response field result */
    public ?\php_client_avito\Generated\Schema\Autoteka\GetActivePackageResponseDataAutoteka $result = null;
}
