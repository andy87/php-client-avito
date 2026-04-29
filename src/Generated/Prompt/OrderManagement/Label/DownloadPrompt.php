<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\OrderManagement\Label;

use Andy87\ClientsAvito\Generated\Prompt\DownloadLabelPrompt as BaseDownloadLabelPrompt;

/**
 * Класс данных запроса Avito API [GET] /order-management/1/orders/labels/{taskID}/download.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/downloadLabel
 * 
 * @property string $Authorization Токен для авторизации
 * @property string $taskID ID задачи на генерацию
 */
class DownloadPrompt extends BaseDownloadLabelPrompt
{
}
