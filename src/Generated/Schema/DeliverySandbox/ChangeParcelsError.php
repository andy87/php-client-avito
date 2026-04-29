<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelsError.
 */
class ChangeParcelsError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['code' => 'code', 'message' => 'message'];

    protected const REQUIRED_FIELDS = ['code', 'message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Код ошибки. <br />
<ol>
  <li><code>VALIDATION_ERROR</code> – ошибка валидации входящих параметров. Например:<ul>
    <li>Длина передаваемого поля превышает допустимые лимиты.</li>
    <li>В запросе отсутствует поле, обязательное для данного типа (<code>type</code>) заявки.
  В поле <code>error.message</code> должно содержаться пояснение, какое поле не прошло валидацию. </li>
  </ul></li>
  <li><code>UNSUPPORTED_PARAM_ERROR</code> – в запросе получен неподдерживаемый параметр. Например:<ul>
    <li>В запросе передан тип (<code>type</code>) заявки, который не реализован на стороне СД.</li>
    <li>Запрос содержит заполненные поля, которые не соответствую типу (<code>type</code>) заявки. Например для заявки с <code>type=extendParcelStorage</code> передано заполненное поле <code>receiver.phones</code>
В поле <code>error.message</code> должно содержаться пояснение, какое поле не поддерживается.</li>
  </ul></li>
<br />
<br />
<b>Важно!</b> Перечисленные выше ошибки можно использовать только для проверки корректности входящего контракта и запрещено использовать для проверки бизнес-логики сценария.<br />
Все возникающие ошибки бизнес-логики, которые могут возникнуть в процессе исполнения заявки, должны передаваться в поле <code>reason</code> запроса <code>changeParcelResult</code> <br />
Примеры ошибок бизнес-логики:<br />
<ol>
  <li>На стороне СД не найдена посылка по переданному `parcelID`.</li>
  <li>Посылка, для которой необходимо выполнить заявку запрета приема в ПВЗ отправки (<code>prohibitParcelAcceptance</code>), уже принята в ПВЗ отправки.</li>
  <li>Посылка, для которой необходимо продлить срок хранения посылки (<code>extendParcelStorage</code>), уже истек срок хранения и она отправлена на возврат.</li>
  <li>Посылка, для которой необходимо запретить выдачу в ПВЗ вручения (<code>prohibitParcelReceive</code>) уже вручена получателю.</li>
</ol>

Все перечисленные ошибки – "терминальные".
При получении этих ошибок Avito не будет выполнять повторные запросы, т.к. повтор приведет к тому же результату.
Список в дальнейшем может пополняться.
 */
    public string $code;

    /** @var string Человекочитаемые детали произошедшей ошибки.
Поле будет использоваться живыми людьми для диагностирования проблемы.
 */
    public string $message;
}
