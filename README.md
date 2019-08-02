Yii Shop
===============================

 Yii2 на модулях сторонних разработчиков, предназначен для быстрой сборки Интернет-магазина. Данное решение навязывает свою модульно-аспектную архитектуру приложения, направленную на

* Быструю разработку первой версии приложения за счет использования готовых конфигурируемых CRUD модулей, сервисов, аспектов и виджетов;

Модули
===============================
Используемые важные модули:

* [yii2-shop](https://github.com/dvizh/yii2-shop) - CRUD для управления товарами, модификациями, ценами, категориями, производителями, значениями фильтров;
* [yii2-filter](https://github.com/dvizh/yii2-filter) - CRUD для фильтров на сайте, набор виджетов для быстрого применения фильтов на фронте с помощью Ajax;
* [yii2-field](https://github.com/dvizh/yii2-field) - CRUD управления кастомными полями любой AR сущности;
* [yii2-gallery](https://github.com/dvizh/yii2-gallery) - виджет загрузки картинок, виджет вывода картинок в виде галереи;
* [yii2-seo](https://github.com/dvizh/yii2-seo) - виджет позволяет прикреплять к моделям важные для SEO поля;
* [yii2-order](https://github.com/dvizh/yii2-order) - CRUD заказов, набор виджетов для создания заказа и с аналитическими отчетами о заказах за период;
* [yii2-cart](https://github.com/dvizh/yii2-cart) - сервис и набор виджетов для быстрой разработки функционала корзины на сайте. В корзину можно положить любую модель, имплементируюущую нужный интерфейс;

Установка
===============================

Выполните git init. Вы создали свою собственную ветку DSS, осталось собрать с помощью виджетов фронт нужного заказчику сайта.

Выполните следующую команду в корне проекта:

```
php init
```

Обновите Composer:

```
composer update
```

Настройте подключение к БД в следующих файлах:    

*/commom/config/main-local.php
*/console/config/main-local.php

Выполнение миграций модулей:

```
php yii migrate --migrationPath=common/modules/shop/migrations

php yii migrate --migrationPath=vendor/dvizh/yii2-shop/src/migrations

php yii migrate --migrationPath=common/modules/cart/migrations

php yii migrate --migrationPath=common/modules/order/migrations

php yii migrate --migrationPath=common/modules/shop/migrations

php yii migrate --migrationPath=vendor/dvizh/yii2-seo/src/migrations

php yii migrate --migrationPath=vendor/dvizh/yii2-filter/src/migrations

php yii migrate --migrationPath=vendor/dvizh/yii2-field/src/migrations

php yii migrate/up --migrationPath=@vendor/dvizh/yii2-gallery/src/migrations
```

Если у вас стоит Apache, на этом всё, .htaccess файлы идут в составе скелетона, все запросы пользователя будут направления на /frontend/web.
Если Apache нет, то придется еще настроить точки входа для фронтенда (frontend/web) и бекенда (backend/web).