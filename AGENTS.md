# instructions for php-client-avito

<INSTRUCTIONS>
Отвечай на Русском.
Нормализуй переводы строк к LF.

## Документация

- README и `docs/ru/README.md` держи пользовательскими: установка, быстрый старт, конфигурация, публичный API, ошибки.
- Не добавляй в README внутренние детали генерации OpenAPI и команды генератора.

## Сгенерированный код

- Сгенерированные API-классы хранятся в `src/Generated`: providers, prompts, responses, schemas и provider registry.
- Публичного Composer script для генерации OpenAPI в этом репозитории нет.
- Не добавляй `composer generate` в инструкции без восстановления поддерживаемого генератора в репозитории.

## Composer в текущей среде

- Для Composer-команд под root используй `COMPOSER_ALLOW_SUPERUSER=1`, иначе Composer отключает plugins и выводит предупреждение.
- При обновлении `andy87/php-client-sdk` не используй source-update через SSH `git@github.com`: команда зависала на `git remote update`/`git fetch`.
- Для обновления SDK предпочитай HTTPS/dist-путь:

```bash
COMPOSER_ALLOW_SUPERUSER=1 composer require andy87/php-client-sdk:v0.7.0 --prefer-dist
```

- Если пакет уже установлен как source и Composer сообщает, что `.git` отсутствует в `vendor/andy87/php-client-sdk`, восстанови checkout из локального Composer cache и добавь remote `composer`, затем запускай install offline:

```bash
git clone /root/.cache/composer/vcs/https---github.com-andy87-php-client-sdk.git vendor/andy87/php-client-sdk
git -C vendor/andy87/php-client-sdk remote add composer /root/.cache/composer/vcs/https---github.com-andy87-php-client-sdk.git
COMPOSER_ALLOW_SUPERUSER=1 COMPOSER_DISABLE_NETWORK=1 composer install --prefer-source --no-progress --no-interaction
```

## Публикация релизов

- Если `git push origin master <tag>` падает с `Failed to connect to github.com port 443 ... Connection timed out`, проверь доступность GitHub API:

```bash
gh api repos/andy87/php-client-avito --jq .full_name
```

- При рабочем `gh api` можно опубликовать commit/tag через GitHub Git Data API, предварительно проверив SHA дерева, parent commit и отсутствие remote tag.

## Поиск PHP namespace

- Для поиска FQCN с обратными слешами используй fixed-string режим `rg -F`, иначе regex-поиск может падать с `regex parse error: unopened group`.

```bash
rg -n -F 'and_y87\PhpClientSdk\Prompt\' src tests docs README.md
```
</INSTRUCTIONS>
