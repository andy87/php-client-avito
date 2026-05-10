<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoload/v1/user-docs/node/{node_slug}/fields.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/userDocsNodeFields
 */
class UserDocsNodeFieldsPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/autoload/v1/user-docs/node/{node_slug}/fields';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = false;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['node_slug' => 'node_slug', 'If_Modified_Since' => 'If-Modified-Since'];

    protected const REQUIRED_FIELDS = ['node_slug'];

    protected const NULLABLE_FIELDS = ['If_Modified_Since'];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['node_slug'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['If_Modified_Since'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string slug узла дерева категории */
    public string $node_slug;

    /** @var string|null Дата и время последней полученной версии в формате RFC1123 в UTC */
    public ?string $If_Modified_Since = null;
}
