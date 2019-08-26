Зависимости
===

Установить ``oauth-token`` от ``Github`` ([Генерация токена](https://github.com/settings/tokens/new?scopes=repo&description=Composer+token)).

```
composer config -g github-oauth.github.com <токен>
```

Если установлен `fxp/composer-asset-plugin`, то необходимо удалить его:

```
composer global remove "fxp/composer-asset-plugin"
```

Загрузить зависимости для разработки

```
composer install
```

Если разворачиваете на боевом сервере, то

```
composer install --no-dev
```
