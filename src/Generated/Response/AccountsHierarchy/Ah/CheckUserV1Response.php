<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\AccountsHierarchy\Ah;

use Andy87\ClientsAvito\Generated\Response\CheckAhUserV1Response as BaseCheckAhUserV1Response;

/**
 * Ответ Avito API [GET] /checkAhUserV1.
 * 
 * @documentation https://developers.avito.ru/api-catalog/accounts-hierarchy/documentation#operation/checkAhUserV1
 * 
 * @property int|null $avitoCompanyId ИД компании, к которой принадлежит сотрудник
 * @property bool|null $isChief Признак того, что пользователь является руководителем
 * @property bool|null $isCompany Признак того, что пользователь является компанией
 * @property bool|null $isEmployee Признак того, что пользователь является сотрудником
 */
class CheckUserV1Response extends BaseCheckAhUserV1Response
{
}
