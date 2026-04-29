<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/ItemFeesInfoReportAutoloadV2.
 */
class ItemFeesInfoReportAutoloadV2 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['ad_id' => 'ad_id', 'avito_id' => 'avito_id', 'fees_amount' => 'fees_amount', 'fees_package_id' => 'fees_package_id', 'fees_type' => 'fees_type'];

    protected const REQUIRED_FIELDS = ['ad_id', 'avito_id', 'fees_type', 'fees_amount'];

    protected const NULLABLE_FIELDS = ['fees_package_id'];

    protected const CASTS = [];

    /** @var string Идентификатор объявления из файла ([параметр Id](https://autoload.avito.ru/format/realty/#Id))
 */
    public string $ad_id;

    /** @var int Идентификатор объявления на Авито */
    public int $avito_id;

    /** @var int Сумма средств, списанных из кошелька, при разовой оплате либо количество размещений, списанных из пакета
 */
    public int $fees_amount;

    /** @var int|null ID пакета размещений */
    public ?int $fees_package_id = null;

    /** @var string Тип списания (разовая оплата или из пакета размещений) */
    public string $fees_type;
}
