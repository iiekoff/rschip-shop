<?php

use yii\helpers\Html;

$this->title = 'Castomer information | Card';
?>
<!-- header -->
    <header class="header-2">
        <?= \Yii::$app->view->renderFile('@app/views/layouts/navigation.php');?>
    <div class="cart-info">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col col-lg-6 d-block d-lg-none">
                    <div class="info-price text-center">
                        <div class="info-price__wrap-main">
                            <div class="info-price__wrap d-flex justify-content-between">
                                <div class="info-price__picture">
                                    <img src="img/picture2.png" alt="Chip" class="info-price__img">
                                    <span>1</span>
                                </div>
                                <div class="info-price__content d-flex align-items-center justify-content-between">
                                    <p class="info-price__text">
                                        Monte GTR
                                    </p>
                                    <p class="info-price__text">
                                        $12,99
                                    </p>
                                </div>
                            </div>
                            <div class="info-price__wrap d-flex justify-content-between flex-column flex-sm-row">
                                <input type="text" name="discount" class="info-price__input" placeholder="Discount code">
                                <button type="button" class="info-price__btn">
                                    Apply
                                </button>
                            </div>
                        </div>
                        <div class="info-price__wrap d-flex justify-content-between">
                            <p class="info-price__text">
                                Subtotal
                            </p>
                            <p class="info-price__text">
                                $12,99
                            </p>
                        </div>
                        <a href="#" class="info-price__link">
                            Show order details
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-none d-lg-flex">
                <div class="col">
                    <ul class="breadcrumbs d-flex">
                        <li class="breadcrumbs__item">
                            <a href="cart.html" class="breadcrumbs__link">
                                Cart
                            </a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="cart-info.html" class="breadcrumbs__link">
                                Castomer information
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <form action="#" class="info-form">
                        <div class="info-form__email">
                            <h5 class="info-form__title">
                                Contact information
                            </h5>
                            <div class="d-flex justify-content-between d-sm-block">
                                <p class="info-form__text">
                                    Email
                                </p>
                                <img src="img/avatar.svg" alt="" class="info-form__svg d-inlain-block d-sm-none">
                            </div>
                            <input id="#" type="email" class="info-form__input" name="email" placeholder="Enter your E-mail" required="">
                            <span class="info-form__span"></span>
                            <div class="info-form__checkbox">
                                <input id="check" type="checkbox" name="check" value="check" checked="" class="info-form__check">
                                <label for="check">
                                    Keep me up to date on news and exclusive offers
                                </label>
                            </div>
                        </div>
                        <div class="info-form__shipping">
                            <h5 class="info-form__title">
                                shipping address
                            </h5>
                            <div class="info-form__wrapper d-flex flex-column flex-sm-row justify-content-between">
                                <div class="info-form__wrap">
                                    <p class="info-form__text">
                                        First name (optional)
                                    </p>
                                    <input type="text" class="info-form__input" name="name" placeholder="Enter your name" required="">
                                </div>
                                <div class="info-form__wrap">
                                    <p class="info-form__text">
                                        Last name
                                    </p>
                                    <input type="text" class="info-form__input" name="lastname" placeholder="Enter your last name" required="">
                                </div>
                            </div>
                            <div class="info-form__addres">
                                <p class="info-form__text">
                                    Addres
                                </p>
                                <input type="text" class="info-form__input" name="country" placeholder="Your country" required="">
                            </div>
                            <div class="info-form__apartmen">
                                <p class="info-form__text">
                                    Apartmen, suit, etc (optional)
                                </p>
                                <input type="text" class="info-form__input" name="apartmen" placeholder="101" required="">
                            </div>
                            <div class="info-form__wrapper d-flex flex-column flex-sm-row justify-content-between">
                                <div class="info-form__wrap">
                                    <p class="info-form__text">
                                        Country
                                    </p>
                                    <input type="text" class="info-form__input" name="country" placeholder="Your country" required="">
                                </div>
                                <div class="info-form__wrap">
                                    <p class="info-form__text">
                                        Postal code
                                    </p>
                                    <input type="text" class="info-form__input" name="code" placeholder="Enter your zip code" required="">
                                </div>
                            </div>
                            <div class="info-form__Phone">
                                <p class="info-form__text">
                                    Phone
                                </p>
                                <input type="text" class="info-form__input" name="phone" pattern="^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$" placeholder="Enter phone number" required="">
                            </div>
                        </div>
                        <div class="info-form__footer d-flex justify-content-between align-items-center flex-column flex-sm-row">
                            <a href="shop.html" class="info-form__link">
                                <img src="img/scroll-arrow-to-left.svg" alt="">
                                Back to shop
                            </a>
                            <button type="" onclick="document.location='cart-shipping.html'" class="info-form__btn">
                                Continue to shipping method
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="info-price">
                        <div class="info-price__wrap d-flex justify-content-between">
                            <div class="info-price__picture">
                                <img src="img/picture2.png" alt="Chip" class="info-price__img">
                                <span>1</span>
                            </div>
                            <div class="info-price__content d-flex align-items-center justify-content-between">
                                <p class="info-price__text">
                                    Monte GTR
                                </p>
                                <p class="info-price__text">
                                    $12,99
                                </p>
                            </div>
                        </div>
                        <div class="info-price__wrap d-flex justify-content-between">
                            <input type="text" name="discount" class="info-price__input" placeholder="Discount code">
                            <button type="button" class="info-price__btn">
                                Apply
                            </button>
                        </div>
                        <div class="info-price__wrap d-flex justify-content-between">
                            <p class="info-price__text">
                                Cart subtotal
                            </p>
                            <p class="info-price__text">
                                $12,99
                            </p>
                        </div>
                        <div class="info-price__wrap d-flex justify-content-between">
                            <p class="info-price__text">
                                <span>Total</span>
                            </p>
                            <p class="info-price__text">
                                <span>$12,99</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
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
<script src="js/main.js"></script>
