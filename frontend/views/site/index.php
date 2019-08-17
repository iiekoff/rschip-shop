<?php

/**
 * @var $this yii\web\View
 */

use dvizh\shop\widgets\ShowPrice;
use dvizh\cart\widgets\BuyButton;
use dvizh\cart\widgets\TruncateButton;
use dvizh\cart\widgets\CartInformer;
use dvizh\cart\widgets\ElementsList;
use dvizh\cart\widgets\ChangeCount;
use dvizh\cart\widgets\ChangeOptions;
use dvizh\shop\models\Product;

use yii\helpers\Url;
use dvizh\shop\models\Category;
use dvizh\filter\widgets\FilterPanel;
use dvizh\field\widgets\Show;
use dvizh\order\widgets\OrderForm;


$this->title = 'Monte';
?>
<header class="header">
        <?= \Yii::$app->view->renderFile('@app/views/layouts/navigation.php');?>
        <?= \Yii::$app->view->renderFile('@app/views/layouts/side-widget.php');?>
        <div class="offer">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="offer-title text-center d-none d-md-block">
                            More power for your car with Monte GT & Monte GTR
                        </h1>
                        <h1 class="offer-title text-center d-block d-md-none">
                            Performance Tuning & On-board diagnostics
                        </h1>
                        <div class="offer-wrap d-md-flex justify-content-center d-none d-md-block">
                            <div class="offer-wrap__left d-flex align-items-center">
                                <p class="offer-wrap__text text-right">
                                    Perfomance tuning
                                </p>
                                <img src="img/picture1.png" alt="Chip-GT" class="offer-wrap__img">
                            </div>
                            <div class="offer-wrap__right d-flex align-items-center">
                                <img src="img/picture2.png" alt="Chip-GTR" class="offer-wrap__img">
                                <p class="offer-wrap__text">
                                    Performance Tuning & On-board diagnostics
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form class="offer-form d-md-flex align-items-center d-none d-md-block">
                            <h5 class="offer-form__title">
                                Select your vehicle
                            </h5>
                            <select class="dropdown" tabindex="7" data-settings='{"cutOff":"7"}'>
                                <option class="label" >Maker</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                                <option value="7">Option 7</option>
                                <option value="8">Option 8</option>
                                <option value="9">Option 9</option>
                                <option value="10">Option 10</option>
                                <option value="11">Option 11</option>
                                <option value="12">Option 12</option>
                                <option value="13">Option 13</option>
                                <option value="14">Option 14</option>
                                <option value="15">Option 15</option>
                                <option value="16">Option 16</option>
                                <option value="17">Option 17</option>
                            </select>
                            <select class="dropdown" tabindex="7" data-settings='{"cutOff":"7"}'>
                                <option class="label" >Maker</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                                <option value="7">Option 7</option>
                                <option value="8">Option 8</option>
                                <option value="9">Option 9</option>
                                <option value="10">Option 10</option>
                                <option value="11">Option 11</option>
                                <option value="12">Option 12</option>
                                <option value="13">Option 13</option>
                                <option value="14">Option 14</option>
                                <option value="15">Option 15</option>
                                <option value="16">Option 16</option>
                                <option value="17">Option 17</option>
                            </select>
                            <select class="dropdown" tabindex="7" data-settings='{"cutOff":"7"}'>
                                <option class="label" >Model</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                                <option value="7">Option 7</option>
                                <option value="8">Option 8</option>
                                <option value="9">Option 9</option>
                                <option value="10">Option 10</option>
                                <option value="11">Option 11</option>
                                <option value="12">Option 12</option>
                                <option value="13">Option 13</option>
                                <option value="14">Option 14</option>
                                <option value="15">Option 15</option>
                                <option value="16">Option 16</option>
                                <option value="17">Option 17</option>
                            </select>
                            <select class="dropdown" tabindex="7" data-settings='{"cutOff":"7"}'>
                                <option class="label" >Engine</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                                <option value="7">Option 7</option>
                                <option value="8">Option 8</option>
                                <option value="9">Option 9</option>
                                <option value="10">Option 10</option>
                                <option value="11">Option 11</option>
                                <option value="12">Option 12</option>
                                <option value="13">Option 13</option>
                                <option value="14">Option 14</option>
                                <option value="15">Option 15</option>
                                <option value="16">Option 16</option>
                                <option value="17">Option 17</option>
                            </select>
                        </form>
                        <a href="#" class="offer-link d-block d-md-none text-center">
                            Select your vehicle
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- introduction -->
<section class="introduction">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="introduction-title">
                    Introducing Monte GTR
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <ul class="introduction-list d-none d-md-block">
                    <li class="introduction-list__item d-flex justify-content-center justify-content-lg-start">
                        <div class="introduction-list__icon">
                            <svg class="introduction-list__svg">
                                <use xlink:href="img/sprite.svg#rocket"></use>
                            </svg>
                        </div>
                        <div class="iintroduction-list__content">
                            <h4 class="introduction-list__title">
                                Increase power and torque
                            </h4>
                            <p class="introduction-list__text">
                                Increase power and torqueIncrease power and torqueIncrease power.
                            </p>
                        </div>
                    </li>
                    <li class="introduction-list__item d-flex justify-content-center justify-content-lg-start">
                        <div class="introduction-list__icon">
                            <svg class="introduction-list__svg">
                                <use xlink:href="img/sprite.svg#pac"></use>
                            </svg>
                        </div>
                        <div class="iintroduction-list__content">
                            <h4 class="introduction-list__title">
                                On-board diagnostic
                            </h4>
                            <p class="introduction-list__text">
                                Read/clear car fault codes, watch real-time data from car sensors, calculate your trip cost and much more.
                            </p>
                        </div>
                    </li>
                    <li class="introduction-list__item d-flex justify-content-center justify-content-lg-start">
                        <div class="introduction-list__icon"></div>
                        <div class="iintroduction-list__content">
                            <h4 class="introduction-list__title">
                                In-built touch screen display
                            </h4>
                            <p class="introduction-list__text">
                                Feature the gauges you want, perform dyno tests and select your tune right on in-built touch display.
                            </p>
                        </div>
                    </li>
                </ul>
                <div class="introduction-slider d-block d-md-none">
                    <div class="introduction-slider__item text-center">
                        <div class="introduction-slider__icon">
                            <svg class="introduction-slider__svg">
                                <use xlink:href="img/sprite.svg#rocket"></use>
                            </svg>
                        </div>
                        <div class="iintroduction-slider__content">
                            <h4 class="introduction-slider__title">
                                Increase power and torque
                            </h4>
                            <p class="introduction-slider__text">
                                Increase power and torqueIncrease power and torqueIncrease power.
                            </p>
                        </div>
                    </div>
                    <div class="introduction-slider__item text-center">
                        <div class="introduction-slider__icon">
                            <svg class="introduction-slider__svg">
                                <use xlink:href="img/sprite.svg#pac"></use>
                            </svg>
                        </div>
                        <div class="iintroduction-slider__content">
                            <h4 class="introduction-slider__title">
                                On-board diagnostic
                            </h4>
                            <p class="introduction-slider__text">
                                Read/clear car fault codes, watch real-time data from car sensors, calculate your trip cost and much more.
                            </p>
                        </div>
                    </div>
                    <div class="introduction-slider__item text-center">
                        <div class="introduction-slider__icon introduction-slider__icon_ellipse"></div>
                        <div class="introduction-slider__content">
                            <h4 class="introduction-slider__title">
                                In-built touch screen display
                            </h4>
                            <p class="introduction-slider__text">
                                Feature the gauges you want, perform dyno tests and select your tune right on in-built touch display.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div class="introduction-chip">
                    <img src="img/picture3.png" alt="Chip & Phone" class="introduction-chip__img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- app -->
<section class="app">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-lg-6">
                <div class="app-wrap d-flex align-items-center justify-content-center justify-content-md-around ">
                    <h3 class="app-wrap__title">
                        Monte App
                    </h3>
                    <div class="app-wrap__wrap-img">
                        <img src="img/phone2.png" alt="phone" class="app-wrap__img">
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="app-info">
                    <ul class="app-info__list d-none d-md-block">
                        <li class="app-info__item d-flex justify-content-center justify-content-lg-start">
                            <div class="app-info__icon">
                                <svg class="app-info__svg">
                                    <use xlink:href="img/sprite.svg#bluetooth"></use>
                                </svg>
                            </div>
                            <div class="app-info__content">
                                <h4 class="app-info__title">
                                    Easy hassle-free installation
                                </h4>
                                <p class="app-info__text">
                                    Program your car right from the driver seat. No computer needed.
                                </p>
                            </div>
                        </li>
                        <li class="app-info__item d-flex justify-content-center justify-content-lg-start">
                            <div class="app-info__icon">
                                <svg class="app-info__svg">
                                    <use xlink:href="img/sprite.svg#share"></use>
                                </svg>
                            </div>
                            <div class="app-info__content">
                                <h4 class="app-info__title">
                                    Social media sharing
                                </h4>
                                <p class="app-info__text">
                                    Share your dyno charts, logs and other vehicle statistics with your friends
                                </p>
                            </div>
                        </li>
                        <li class="app-info__item d-flex justify-content-center justify-content-lg-start">
                            <div class="app-info__icon">
                                <svg class="app-info__svg">
                                    <use xlink:href="img/sprite.svg#meter"></use>
                                </svg>
                            </div>
                            <div class="app-info__content">
                                <h4 class="app-info__title">
                                    More room for the gauges you need
                                </h4>
                                <p class="app-info__text">
                                    Turn your smartphone into OBD2 scan tool and performance controller
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="app-slider d-block d-md-none">
                        <div class="app-slider__item text-center">
                            <div class="app-slider__icon">
                                <svg class="app-slider__svg">
                                    <use xlink:href="img/sprite.svg#bluetooth"></use>
                                </svg>
                            </div>
                            <div class="iapp-slider__content">
                                <h4 class="app-slider__title">
                                    Easy hassle-free installation
                                </h4>
                                <p class="app-slider__text">
                                    Program your car right from the driver seat. No computer needed.
                                </p>
                            </div>
                        </div>
                        <div class="app-slider__item text-center">
                            <div class="app-slider__icon">
                                <svg class="app-slider__svg">
                                    <use xlink:href="img/sprite.svg#share"></use>
                                </svg>
                            </div>
                            <div class="iapp-slider__content">
                                <h4 class="app-slider__title">
                                    Social media sharing
                                </h4>
                                <p class="app-slider__text">
                                    Share your dyno charts, logs and other vehicle statistics with your friends
                                </p>
                            </div>
                        </div>
                        <div class="app-slider__item text-center">
                            <div class="app-slider__icon app-slider__icon_not">
                                <svg class="app-slider__svg">
                                    <use xlink:href="img/sprite.svg#meter"></use>
                                </svg>
                            </div>
                            <div class="app-slider__content">
                                <h4 class="app-slider__title">
                                    More room for the gauges you need
                                </h4>
                                <p class="app-slider__text">
                                    Turn your smartphone into OBD2 scan tool and performance controller
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="app-download d-flex justify-content-center">
                        <a href="#" class="app-download__link">
                            <img src="img/download-on-the-app-store-apple-(1).svg" alt="App-Store" class="app-download__img">
                        </a>
                        <a href="#" class="app-download__link">
                            <img src="img/google-play-download-android-app.svg" alt="Google-play" class="app-download__img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-widget d-block d-lg-none">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="widget">
                    <ul class="side-widget__list text-center d-flex justify-content-around">
                        <li class="side-widget__item">
                            <a href="#" class="side-widget__link">
                                <div class="side-widget__icon">
                                    <svg class="side-widget__svg">
                                        <use xlink:href="img/sprite.svg#infinity"></use>
                                    </svg>
                                </div>
                                <div class="side-widget__content">
                                    <p class="side-widget__text">
                                        Lifetime Warranty
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="side-widget__item">
                            <a href="#" class="side-widget__link">
                                <div class="side-widget__icon">
                                    <svg class="side-widget__svg">
                                        <use xlink:href="img/sprite.svg#return"></use>
                                    </svg>
                                </div>
                                <div class="side-widget__content">
                                    <p class="side-widget__text">
                                        100 days return policy
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="side-widget__item">
                            <a href="" class="side-widget__link">
                                <div class="side-widget__icon">
                                    <svg class="side-widget__svg">
                                        <use xlink:href="img/sprite.svg#box"></use>
                                    </svg>
                                </div>
                                <div class="side-widget__content">
                                    <p class="side-widget__text">
                                        Free shipping USA & Canada
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- chip -->
<section class="chip">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="chip-wrap text-center">
                    <h3 class="chip-wrap__title">
                        Monte GT
                    </h3>
                    <a href="#" class="chip-invis d-block d-md-none">
                        <img src="img/picture4.png" alt="Monte GT chip" class="chip-invis__img">
                    </a>
                    <p class="chip-wrap__text">
                        Up to +20 hp +45nm
                    </p>
                    <ul class="chip-wrap__list d-md-flex justify-content-center d-none d-md-block">
                        <li class="chip-wrap__item">
                            <a href="monte-gt.html" class="chip-wrap__link">
                                Learn more
                                <svg class="chip-wrap__svg">
                                    <use xlink:href="img/sprite.svg#arrow-right"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="chip-wrap__item">
                            <a href="#" class="chip-wrap__link">
                                Buy
                                <svg class="chip-wrap__svg">
                                    <use xlink:href="img/sprite.svg#arrow-right"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <img src="img/picture4.png" alt="Monte GT chip" class="chip-wrap__img d-none d-md-block">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="chip-wrap text-center">
                    <h3 class="chip-wrap__title">
                        Monte GTR
                    </h3>
                    <a href="#" class="chip-invis d-block d-md-none">
                        <img src="img/picture5.png" alt="Monte GTR chip" class="chip-invis__img">
                    </a>
                    <p class="chip-wrap__text">
                        Up to +35 hp +60nm
                    </p>
                    <ul class="chip-wrap__list d-md-flex justify-content-center d-none d-md-block">
                        <li class="chip-wrap__item">
                            <a href="monte-gtr.html" class="chip-wrap__link">
                                Learn more
                                <svg class="chip-wrap__svg">
                                    <use xlink:href="img/sprite.svg#arrow-right"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="chip-wrap__item">
                            <a href="#" class="chip-wrap__link">
                                Buy
                                <svg class="chip-wrap__svg">
                                    <use xlink:href="img/sprite.svg#arrow-right"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <img src="img/picture5.png" alt="Monte GTR chip" class="chip-wrap__img d-none d-md-block">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- advantage -->
<section class="advantage">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-lg-6">
                <h2 class="advantage-title">
                    Why choose Monte
                </h2>
            </div>
            <div class="col-12 col-lg-6">
                <ul class="advantage-list d-none d-md-block">
                    <li class="advantage-list__item d-flex justify-content-center justify-content-lg-start">
                        <div class="advantage-list__icon">
                            <svg class="advantage-list__svg">
                                <use xlink:href="img/sprite.svg#pac"></use>
                            </svg>
                        </div>
                        <div class="advantage-list__content">
                            <h4 class="advantage-list__title">
                                OBD2 Plug&Play installation
                            </h4>
                            <p class="advantage-list__text">
                                No special automotive knowledge needed. Monte takes less than 5 minutes<br>to be installed.
                            </p>
                        </div>
                    </li>
                    <li class="advantage-list__item d-flex justify-content-center justify-content-lg-start">
                        <div class="advantage-list__icon">
                            <svg class="advantage-list__svg">
                                <use xlink:href="img/sprite.svg#return"></use>
                            </svg>
                        </div>
                        <div class="advantage-list__content">
                            <h4 class="advantage-list__title">
                                Transferable to any vehicle
                            </h4>
                            <p class="advantage-list__text">
                                Buy once and use on any vehicle available in our growing database.
                            </p>
                        </div>
                    </li>
                    <li class="advantage-list__item d-flex justify-content-center justify-content-lg-start">
                        <div class="advantage-list__icon">
                            <svg class="advantage-list__svg">
                                <use xlink:href="img/sprite.svg#usa-flag"></use>
                            </svg>
                        </div>
                        <div class="advantage-list__content">
                            <h4 class="advantage-list__title">
                                Product of the USA
                            </h4>
                            <p class="advantage-list__text">
                                Designed and engineered in the USA from local and international components.
                            </p>
                        </div>
                    </li>
                    <li class="advantage-list__item d-flex justify-content-center justify-content-lg-start">
                        <div class="advantage-list__icon">
                            <svg class="advantage-list__svg">
                                <use xlink:href="img/sprite.svg#security"></use>
                            </svg>
                        </div>
                        <div class="advantage-list__content">
                            <h4 class="advantage-list__title">
                                Satisfaction guaranteed
                            </h4>
                            <p class="advantage-list__text">
                                Hassle-free money back and lifetime warranty on defects.
                            </p>
                        </div>
                    </li>
                </ul>
                <div class="advantage-slider d-block d-md-none">
                    <div class="advantage-slider__item text-center">
                        <div class="advantage-slider__icon">
                            <svg class="advantage-slider__svg">
                                <use xlink:href="img/sprite.svg#pac"></use>
                            </svg>
                        </div>
                        <div class="advantage-slider__content">
                            <h4 class="advantage-slider__title">
                                OBD2 Plug&Play installation
                            </h4>
                            <p class="advantage-slider__text">
                                No special automotive knowledge needed. Monte takes less than 5 minutes to be installed.
                            </p>
                        </div>
                    </div>
                    <div class="advantage-slider__item text-center">
                        <div class="advantage-slider__icon">
                            <svg class="advantage-slider__svg">
                                <use xlink:href="img/sprite.svg#return"></use>
                            </svg>
                        </div>
                        <div class="advantage-slider__content">
                            <h4 class="advantage-slider__title">
                                Transferable to any vehicle
                            </h4>
                            <p class="advantage-slider__text">
                                Buy once and use on any vehicle available in our growing database.
                            </p>
                        </div>
                    </div>
                    <div class="advantage-slider__item text-center">
                        <div class="advantage-slider__icon">
                            <svg class="advantage-slider__svg">
                                <use xlink:href="img/sprite.svg#usa-flag"></use>
                            </svg>
                        </div>
                        <div class="advantage-slider__content">
                            <h4 class="advantage-slider__title">
                                Product of the USA
                            </h4>
                            <p class="advantage-slider__text">
                                Designed and engineered in the USA from local and international components.
                            </p>
                        </div>
                    </div>
                    <div class="advantage-slider__item text-center">
                        <div class="advantage-slider__icon">
                            <svg class="advantage-slider__svg">
                                <use xlink:href="img/sprite.svg#security"></use>
                            </svg>
                        </div>
                        <div class="advantage-slider__content">
                            <h4 class="advantage-slider__title">
                                Satisfaction guaranteed
                            </h4>
                            <p class="advantage-slider__text">
                                Hassle-free money back and lifetime warranty on defects.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- news -->
<section class="news">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="news-title text-center">
                    Monte News
                </h2>
            </div>
        </div>
        <div class="row d-none d-md-flex">
            <div class="col-md-5">
                <div class="news-img">
                    <img src="img/bg-mini-1.jpg" alt="Mercedes-AMG" class="news-img__img">
                    <a href="#" class="news-img__link d-flex justify-content-center align-items-center">
                        <h4 class="news-img__title">
                            #montetuningnews
                        </h4>
                    </a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="news-content">
                    <h4 class="news-content__title">
                        Improve fuel economy
                    </h4>
                    <p class="news-content__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                        <a href="#" class="news-content__link">
                            Read more...
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row d-none d-md-flex">
            <div class="col-md-5">
                <div class="news-img">
                    <img src="img/bg-mini-2.jpg" alt="Man" class="news-img__img">
                    <a href="#" class="news-img__link d-flex justify-content-center align-items-center">
                        <h4 class="news-img__title">
                            #montetuningnews
                        </h4>
                    </a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="news-content">
                    <h4 class="news-content__title">
                        Improve fuel economy
                    </h4>
                    <p class="news-content__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                        <a href="#" class="news-content__link">
                            Read more...
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="news-slider d-block d-md-none">
                    <div class="news-slider__item">
                        <h4 class="news-slider__title text-center">
                            Improve fuel economy
                        </h4>
                        <div class="news-slider-wrap">
                            <img src="img/bg-mini-1.jpg" alt="Mercedes-AMG" class="news-slider-wrap__img">
                            <a href="#" class="news-slider-wrap__link d-flex justify-content-center align-items-center">
                                <h4 class="news-slider-wrap__title">
                                    #montetuningnews
                                </h4>
                            </a>
                        </div>
                        <div class="news-slider-content">
                            <p class="news-slider-content__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                            </p>
                            <a href="#" class="news-slider-content__link">
                                Read more...
                            </a>
                        </div>
                    </div>
                    <div class="news-slider__item">
                        <h4 class="news-slider__title text-center">
                            Improve fuel economy
                        </h4>
                        <div class="news-slider-wrap">
                            <img src="img/bg-mini-2.jpg" alt="Man" class="news-slider-wrap__img">
                            <a href="#" class="news-slider-wrap__link d-flex justify-content-center align-items-center">
                                <h4 class="news-slider-wrap__title">
                                    #montetuningnews
                                </h4>
                            </a>
                        </div>
                        <div class="news-slider-content">
                            <p class="news-slider-content__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                            </p>
                            <a href="#" class="news-slider-content__link">
                                Read more...
                            </a>
                        </div>
                    </div>
                </div>
                <a href="#" class="news-link text-center text-md-left">
                    Read other news
                    <svg class="news-link__svg">
                        <use xlink:href="img/sprite.svg#arrow-right"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- payment -->
<section class="payment">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="payment-wrap">
                    <h2 class="payment-wrap__title text-center">
                        Payment options
                    </h2>
                    <ul class="payment-wrap__list d-flex justify-content-center align-items-center">
                        <li class="payment-wrap__item">
                            <a href="#" class="payment-wrap__link">
                                <img src="img/paypal.svg" alt="PayPal" class="payment-wrap__img">
                            </a>
                        </li>
                        <li class="payment-wrap__item">
                            <a href="#" class="payment-wrap__link">
                                <img src="img/mastercard-2.svg" alt="Master-card" class="payment-wrap__img">
                            </a>
                        </li>
                        <li class="payment-wrap__item">
                            <a href="#" class="payment-wrap__link">
                                <img src="img/visa-(1).svg" alt="Visa" class="payment-wrap__img">
                            </a>
                        </li>
                        <li class="payment-wrap__item">
                            <a href="#" class="payment-wrap__link">
                                <img src="img/bank-transfer-(2).svg" alt="Transfer-bank" class="payment-wrap__img">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?= \Yii::$app->view->renderFile('@app/views/layouts/footer.php');
