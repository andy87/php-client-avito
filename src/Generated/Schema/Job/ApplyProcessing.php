<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/ApplyProcessing.
 */
class ApplyProcessing extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['additional_questions' => 'additional_questions', 'apply_type' => 'apply_type'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, string>|null *DEPRECATED* Заполнение поля не влияет на вакансию.  
Массив со списком дополнительных вопросов, которые задаст ассистент Авито.

  - `experience` - вопрос про опыт работы. 
В качестве критерия будет использоваться значение поля `experience`.  В результатах опроса ассистент отметит, достаточно у кандидата опыта или нет. 

  - `citizenship` - вопрос про гражданство.
В качестве критерия будет использоваться значение поля `citizenship`, если оно заполнено.

  - `age` - вопрос про возраст.
В качестве критерия будет использоваться значение поля `age`, если оно заполнено.
 */
    public ?array $additional_questions = null;

    /** @var string|null Принимает два значения:

  - `with_assistant` *DEPRECATED* - Указание данного значения не влияет на вакансию.
Обработка отклика с помощью ассистента Авито. После отклика на вакансию  ассистент Авито предложит кандидату ответить на несколько вопросов — результаты придут в чат. ФИО и номер телефона ассистент спросит в любом случае. Остальные вопросы можно настроить  в поле `additional_questions`.

  - `only_with_resume` - на вакансию смогут откликаться только кандидаты с резюме. Если у кандидата нет резюме, 
Авито поможет создать его и откликнуться на вакансию
 */
    public ?string $apply_type = null;
}
