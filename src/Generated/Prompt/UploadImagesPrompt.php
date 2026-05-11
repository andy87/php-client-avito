<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /messenger/v1/accounts/{user_id}/uploadImages.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/uploadImages
 */
class UploadImagesPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/messenger/v1/accounts/{user_id}/uploadImages';

    protected const CONTENT_TYPE = 'multipart/form-data';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['user_id' => 'user_id', 'uploadfile__' => 'uploadfile[]'];

    protected const REQUIRED_FIELDS = ['user_id', 'uploadfile__'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['user_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['uploadfile__'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор пользователя (клиента) */
    public int $user_id;

    /** @var \and_y87\PhpClientSdk\Transport\Http\MultipartFile|string Body field uploadfile[] */
    public \and_y87\PhpClientSdk\Transport\Http\MultipartFile|string $uploadfile__;
}
