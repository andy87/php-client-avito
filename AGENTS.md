# AGENTS.md instructions for php-client-avito

<INSTRUCTIONS>
Отвечай на Русском.
Нормализуй переводы строк к LF.

## Документация

- README и `docs/ru/README.md` держи пользовательскими: установка, быстрый старт, конфигурация, публичный API, ошибки.
- Не добавляй в README внутренние детали генерации OpenAPI и команды генератора.

## Генерация OpenAPI

- Сгенерированные API-классы создаются проектным генератором через Composer script:

```bash
composer generate
```

- Composer script запускает:

```bash
node tools/generate-avito-openapi.mjs
```

- Генератор загружает Avito OpenAPI metadata и записывает providers, prompts, responses, schemas и provider registry в `src/Generated`.
</INSTRUCTIONS>
