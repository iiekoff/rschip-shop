<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = 'Cart | Monte';

?>
<!-- header -->
<header class="header-2">
    <?= \Yii::$app->view->renderFile('@app/views/layouts/navigation.php');?>
</header>
<div class="cart">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="cart-title">
                    your cart
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="cart-product d-md-flex justify-content-between">
                    <div class="cart-product__wrap d-block d-md-none">
                        <h4 class="cart-product__title text-center">
                            monte gtr
                        </h4>
                        <p class="cart-product__text text-center">
                            Acura TL 3.2I 260HP 315NM
                        </p>
                    </div>
                    <div class="cart-product__wrap d-flex align-items-center justify-content-between d-md-block">
                        <h4 class="cart-product__title d-none d-md-block">
                            monte gtr
                        </h4>
                        <p class="cart-product__text d-none d-md-block">
                            Acura TL 3.2I 260HP 315NM
                        </p>
                        <img src="img/picture12.png" alt="chip" class="cart-product__img">
                        <div class="cart-product-number d-flex d-md-none">
                            <span class="minus text-center">-</span>
                            <input type="number" value="1" size="5">
                            <span class="plus text-center">+</span>
                        </div>
                    </div>
                    <div class="cart-product__wrap d-none d-md-flex align-items-center">
                        <p class="cart-product__text">
                            $499
                        </p>
                        <div class="cart-product-number d-flex">
                            <span class="minus text-center">-</span>
                            <input type="number" value="1" size="5">
                            <span class="plus text-center">+</span>
                        </div>
                        <p class="cart-product__text">
                            $<span>1,197</span>
                        </p>
                    </div>
                    <div class="cart-product__wrap d-flex d-md-none justify-content-between">
                        <p class="cart-product__text">
                            $499
                        </p>
                        <p class="cart-product__text">
                            <span>$ 1,197</span>
                        </p>
                    </div>
                </div>
                <div class="cart-wrap d-flex justify-content-between">
                    <p class="cart-wrap__text d-none d-md-block">
                        Cart subtotal
                    </p>
                    <p class="cart-wrap__text d-block d-md-none">
                        Subtotal
                    </p>
                    <p class="cart-wrap__text">
                        $1,197
                    </p>
                </div>
                <div class="cart-wrap d-flex justify-content-between">
                    <p class="cart-wrap__text">
                        <span>Total</span>
                    </p>
                    <p class="cart-wrap__text">
                        <span>$1,197</span>
                    </p>
                </div>
                <div class="cart-wrap d-flex justify-content-between align-items-center flex-column flex-sm-row">
                    <a href="shop.html" class="cart-wrap__link">
                        <img src="img/scroll-arrow-to-left.svg" alt="">
                        Back to shop
                    </a>
                    <button type="button" onclick="document.location='cart-info.html'" class="cart-wrap__btn">
                        Сheckout
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
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
