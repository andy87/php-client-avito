<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Restriction.
 */
class Restriction extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dimensionalFactor' => 'dimensionalFactor', 'maxDeclaredCost' => 'maxDeclaredCost', 'maxDimensionalWeight' => 'maxDimensionalWeight', 'maxDimensions' => 'maxDimensions', 'maxWeight' => 'maxWeight'];

    protected const REQUIRED_FIELDS = ['maxWeight', 'maxDimensions', 'maxDeclaredCost'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int|null Используется при подсчете ограничения по объемному весу в пункте выдачи по формуле: Д * Ш * В / dimensionalFactor = объемный вес. 
Если задан maxDimensionalWeight, то dimensionalFactor должен быть обязательно передан.
 */
    public ?int $dimensionalFactor = null;

    /** @var int Максимальное ограничения по объявленной стоимости товара, который можно получить/отправить в пункте выдачи. Значение указывается в копейках.  
Если объявленная стоимость товара будет больше этого значения, Авито посчитает невозможным отправку/получение товара через этот пункт
и не даст покупателю выбрать его как точку доставки/сдачи посылки.
 */
    public int $maxDeclaredCost;

    /** @var int|null Максимальное ограничения по объемному весу товара, который можно получить/отправить в пункте выдачи. 
Если объемный вес товара будет больше этого значения, Авито посчитает невозможным отправку/получение товара через этот пункт
и не даст покупателю выбрать его как точку доставки/сдачи посылки.
 */
    public ?int $maxDimensionalWeight = null;

    /** @var array<int, int> Максимальные ограничения по габаритам товара, который можно получить/отправить в пункте выдачи. Значение указывается в сантиметрах.  
Если габариты товара будет больше этого значения, Авито посчитает невозможным отправку/получение товара через этот пункт
и не даст покупателю выбрать его как точку доставки/сдачи посылки.
 */
    public array $maxDimensions;

    /** @var int Максимальный вес товара, который можно получить или отправить в пункте выдачи. Значение указывается в граммах.  
Если вес товара будет больше этого значения, Авито посчитает невозможным отправку/получение товара через этот пункт 
и не даст покупателю выбрать его как точку доставки/сдачи посылки.
 */
    public int $maxWeight;
}
