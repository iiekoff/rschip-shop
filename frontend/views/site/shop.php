<?php
use yii\helpers\Html;

$this->title = 'Shop | Monte';

?>
<header class="header-2">
    <?= \Yii::$app->view->renderFile('@app/views/layouts/navigation.php');?>
</header>

<!-- shop -->
<section class="shop">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="select-car">
                    <h2 class="select-car__title text-center">
                        1.<br>select your car
                    </h2>
                    <div class="select-car text-center text-md-left">
                        <form action="#" class="car-form d-flex flex-column flex-md-row justify-content-center">
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
                        <a href="#" class="select-car__link">
                            Can&apos;t find my car
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="efficiency text-center">
                    <h2 class="efficiency__title">
                        2.<br>type your horsepowers to calculate gains
                    </h2>
                    <div class="efficiency__wrap d-flex align-items-center justify-content-center flex-column flex-md-row">
                        <input id="#" type="text" placeholder="Calculate" name="horsepowers" required="" class="efficiency__input">
                        <button type="button" class="efficiency-btn">
                            Calculate
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 text-center">
                <svg class="shop-svg">
                    <use xlink:href="img/sprite.svg#gt"></use>
                </svg>
                <div class="chips">
                    <img src="img/picture8.png" alt="" class="chips__img">
                    <div class="chips__wrap d-none d-md-block text-center">
                        <p class="chips__text">
                            up to <span>+20</span> Hp <span>+45</span>Nm
                        </p>
                    </div>
                    <ul class="chips-list">
                        <li class="chips-list__item d-flex justify-content-center align-items-center justify-content-lg-between justify-content-around">
                            <p class="chips-list__text">
                                <span>USD</span> 349
                            </p>
                            <a href="#" class="chips-list__link">
                                SHOP
                            </a>
                        </li>
                        <li class="chips-list__item d-none d-md-flex">
                            <svg class="chips-list__svg">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                up to +20 Hp +45Nm
                            </p>
                        </li>
                        <li class="chips-list__item d-none d-md-flex">
                            <svg class="chips-list__svg">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                +15% Fuel Saving
                            </p>
                        </li>
                        <li class="chips-list__item d-none d-md-flex">
                            <svg class="chips-list__svg">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                3 Driving modes
                            </p>
                        </li>
                        <li class="chips-list__item d-none d-md-flex">
                            <svg class="chips-list__svg">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                Mac/Pc programmer
                            </p>
                        </li>
                        <li class="chips-list__item d-none d-md-flex">
                            <svg class="chips-list__svg">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                iOs/Android App
                            </p>
                        </li>
                        <li class="chips-list__item d-block d-md-none">
                            <div class="shop-slider">
                                <div class="shop-slider__item">
                                    <p class="shop-slider__text text-center">
                                        up to +20 Hp +45Nm
                                    </p>
                                </div>
                                <div class="shop-slider__item">
                                    <p class="shop-slider__text text-center">
                                        +15% Fuel Saving
                                    </p>
                                </div>
                                <div class="shop-slider__item">
                                    <p class="shop-slider__text text-center">
                                        3 Driving modes
                                    </p>
                                </div>
                                <div class="shop-slider__item">
                                    <p class="shop-slider__text text-center">
                                        Mac/Pc programmer
                                    </p>
                                </div>
                                <div class="shop-slider__item">
                                    <p class="shop-slider__text text-center">
                                        iOs/Android App
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <svg class="shop-svg">
                    <use xlink:href="img/sprite.svg#gtr"></use>
                </svg>
                <div class="chips">
                    <img src="img/picture9.png" alt="" class="chips__img">
                    <div class="chips__wrap d-none d-md-block text-center">
                        <p class="chips__text">
                            up to <span>+35</span> Hp <span>+60</span>Nm
                        </p>
                    </div>
                    <ul class="chips-list">
                        <li class="chips-list__item d-flex justify-content-center align-items-center justify-content-lg-between justify-content-around">
                            <p class="chips-list__text">
                                <span>USD</span> 549
                            </p>
                            <a href="#" class="chips-list__link">
                                SHOP
                            </a>
                        </li>
                        <li class="chips-list__item d-none d-md-flex">
                            <svg class="chips-list__svg">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                up to +35 Hp +60Nm
                            </p>
                        </li>
                        <li class="chips-list__item d-none d-md-flex">
                            <svg class="chips-list__svg">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                +18% Fuel Saving
                            </p>
                        </li>
                        <li class="chips-list__item d-none d-md-flex">
                            <svg class="chips-list__svg">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                3 Driving modes
                            </p>
                        </li>
                        <li class="chips-list__item d-none d-md-flex">
                            <svg class="chips-list__svg">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                Mac/Pc programmer
                            </p>
                        </li>
                        <li class="chips-list__item d-none d-md-flex">
                            <svg class="chips-list__svg">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                iOs/Android App
                            </p>
                        </li>
                        <li class="chips-list__item d-none d-md-flex">
                            <svg class="chips-list__svg">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                Toach screen display
                            </p>
                        </li>
                        <li class="chips-list__item d-none d-md-flex">
                            <svg class="chips-list__svg">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                Error code reader
                            </p>
                        </li>
                        <li class="chips-list__item d-none d-md-flex">
                            <svg class="chips-list__svg">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                Real time gauges
                            </p>
                        </li>
                        <li class="chips-list__item d-block d-md-none">
                            <div class="shop-slider">
                                <div class="shop-slider__item">
                                    <p class="shop-slider__text text-center">
                                        up to +35 Hp +60Nm
                                    </p>
                                </div>
                                <div class="shop-slider__item">
                                    <p class="shop-slider__text text-center">
                                        +18% Fuel Saving
                                    </p>
                                </div>
                                <div class="shop-slider__item">
                                    <p class="shop-slider__text text-center">
                                        3 Driving modes
                                    </p>
                                </div>
                                <div class="shop-slider__item">
                                    <p class="shop-slider__text text-center">
                                        Mac/Pc programmer
                                    </p>
                                </div>
                                <div class="shop-slider__item">
                                    <p class="shop-slider__text text-center">
                                        iOs/Android App
                                    </p>
                                </div>
                                <div class="shop-slider__item">
                                    <p class="shop-slider__text text-center">
                                        Toach screen display
                                    </p>
                                </div>
                                <div class="shop-slider__item">
                                    <p class="shop-slider__text text-center">
                                        Error code reader
                                    </p>
                                </div>
                                <div class="shop-slider__item">
                                    <p class="shop-slider__text text-center">
                                        Real time gauges
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section-widget-shop -->
<section class="section-widget section-widget-shop d-block d-md-none">
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
                            </a>
                        </li>
                        <li class="side-widget__item">
                            <a href="#" class="side-widget__link">
                                <div class="side-widget__icon">
                                    <svg class="side-widget__svg">
                                        <use xlink:href="img/sprite.svg#return"></use>
                                    </svg>
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
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer -->
<footer class="footer-shop">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="d-none d-md-block col-md-2">
                <p class="footer-shop-text text-uppercase">
                    your car
                </p>
            </div>
            <div class="col-6 col-md-4 col-lg-5 col-xl-6">
                <p class="footer-shop-text">
                    Ford Focus 1.6 2015
                </p>
                <p class="footer-shop-text d-block d-md-none">
                    USD 499
                </p>
            </div>
            <div class="d-none d-md-block col-md-3 col-lg-2">
                <p class="footer-shop-text">
                    <span class="footer-shop-text__span">USD</span> <span class="footer-shop-text__span">499</span>
                </p>
            </div>
            <div class="col-6 col-md-3 col-xl-2 text-right text-xl-left">
                <a href="cart.html" class="footer-shop-link">
                    to cart
                </a>
            </div>
        </div>
    </div>
</footer>
<!-- modal window -->
<div style="display: none;">
    <div class="box-modal" id="exampleModal">
        <form action="#" class="modal-form text-center">
            <div class="modal-form__wrapper">
                <h4 class="modal-form__title">
                    Select your vehicle
                </h4>
                <div class="modal-form__wrap d-flex flex-column flex-lg-row">
                    <select class="modal-form__select">
                        <option class="modal-form__option">
                            Maker
                        </option>
                        <option class="modal-form__option">
                            Maker2
                        </option>
                        <option class="modal-form__option">
                            Maker3
                        </option>
                        <option class="modal-form__option">
                            Maker4
                        </option>
                    </select>
                    <select class="modal-form__select">
                        <option class="modal-form__option">
                            Maker
                        </option>
                        <option class="modal-form__option">
                            Maker2
                        </option>
                        <option class="modal-form__option">
                            Maker3
                        </option>
                        <option class="modal-form__option">
                            Maker4
                        </option>
                    </select>
                    <select class="modal-form__select">
                        <option class="modal-form__option">
                            Model
                        </option>
                        <option class="modal-form__option">
                            Model2
                        </option>
                        <option class="modal-form__option">
                            Model3
                        </option>
                        <option class="modal-form__option">
                            Model4
                        </option>
                    </select>
                    <select class="modal-form__select">
                        <option class="modal-form__option">
                            Engine
                        </option>
                        <option class="modal-form__option">
                            Engine2
                        </option>
                        <option class="modal-form__option">
                            Engine3
                        </option>
                        <option class="modal-form__option">
                            Engine4
                        </option>
                    </select>
                </div>
            </div>
            <div class="modal-form__footer">
                <button type="button" onclick="document.location='shop.html'" class="modal-form__btn">
                    shop
                </button>
                <a href="#" class="modal-form__link d-none d-sm-block">
                    Can&apos;t find my car
                </a>
            </div>
        </form>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.arcticmodal-0.3.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<script src="js/main.js"></script>