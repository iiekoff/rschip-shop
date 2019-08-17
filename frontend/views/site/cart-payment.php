<?php

use yii\helpers\Html;

$this->title = 'Payment method | Card';
?>
<!-- header -->
<header class="header-2">
    <?= \Yii::$app->view->renderFile('@app/views/layouts/navigation.php');?>
    <div class="pay">
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
            <div class="row">
                <div class="col">
                    <h5 class="pay-title">
                        monte tuning
                    </h5>
                    <ul class="breadcrumbs d-none d-lg-flex">
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
                        <li class="breadcrumbs__item">
                            <a href="cart-shipping.html" class="breadcrumbs__link">
                                Shipping method
                            </a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="cart-payment.html" class="breadcrumbs__link">
                                Payment method
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="pay-block">
                        <div class="delivery-info">
                            <div class="delivery-info__wrap d-none d-sm-flex">
                                <span>Contact</span>
                                <p class="delivery-info__text ml-3">
                                    eugenegrigorash@icloud.com
                                </p>
                                <a href="#" class="delivery-info__link">
                                    Change
                                </a>
                            </div>
                            <div class="delivery-info__wrap d-block d-sm-none">
                                <div class="delivery-info__wrap2 d-flex justify-content-between">
                                    <span>Contact</span>
                                    <a href="#" class="delivery-info__link">
                                        Change
                                    </a>
                                </div>
                                <p class="delivery-info__text">
                                    eugenegrigorash@icloud.com
                                </p>
                            </div>
                            <div class="delivery-info__wrap d-none d-sm-flex">
                                <span>Ship to</span>
                                <p class="delivery-info__text ml-4">
                                    Russia, Russia 101, 40120, Latvia
                                </p>
                                <a href="#" class="delivery-info__link">
                                    Change
                                </a>
                            </div>
                            <div class="delivery-info__wrap d-block d-sm-none">
                                <div class="delivery-info__wrap2 d-flex justify-content-between">
                                    <span>Ship to</span>
                                    <a href="#" class="delivery-info__link">
                                        Change
                                    </a>
                                </div>
                                <p class="delivery-info__text">
                                    Russia, Russia 101, 40120, Latvia
                                </p>
                            </div>
                            <div class="delivery-info__wrap d-none d-sm-flex">
                                <span>Method</span>
                                <p class="delivery-info__text ml-3">
                                    USPS Priority Mail International (6-10 Days to Most Major Markets) - $35.00
                                </p>
                                <a href="#" class="delivery-info__link">
                                    Change
                                </a>
                            </div>
                            <div class="delivery-info__wrap d-block d-sm-none">
                                <div class="delivery-info__wrap2 d-flex justify-content-between">
                                    <span>Method</span>
                                    <a href="#" class="delivery-info__link">
                                        Change
                                    </a>
                                </div>
                                <p class="delivery-info__text">
                                    USPS Priority Mail International (6-10 Days to Most Major Markets) - $35.00
                                </p>
                            </div>
                        </div>
                        <p class="pay-block__text">
                            Payment method
                        </p>
                        <span class="pay-block__span">
								All transactions are secure and encrypted.
							</span>
                        <form class="pay-form">
                            <div class="pay-form__head d-flex justify-content-between flex-column flex-sm-row">
                                <div class="pay-form__radio">
                                    <input type="radio" id="radio3" name="radio" value="Credit card">
                                    <label for="radio3">Credit card</label>
                                </div>
                                <ul class="pay-form__list d-flex justify-content-center align-items-center">
                                    <li class="pay-form__item">
                                        <img src="img/mastercard-2-(2).svg" alt="Master-card" class="pay-form__img">
                                    </li>
                                    <li class="pay-form__item">
                                        <img src="img/visa-(1).svg" alt="Visa" class="pay-form__img">
                                    </li>
                                    <li class="pay-form__item">
                                        <img src="img/bank-transfer.svg" alt="Transfer-bank" class="pay-form__img">
                                    </li>
                                    <li class="pay-form__item">
                                        <img src="img/paypal.svg" alt="PayPal" class="pay-form__img">
                                    </li>
                                    <li class="pay-form__item">
                                        <a href="#">
                                            and more...
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pay-form__card">
                                <input id="#" type="text" class="pay-form__input" name="card-number" placeholder="Card number" required="">
                                <input id="#" type="text" class="pay-form__input" name="name" placeholder="Name on card" required="">
                                <div class="pay-form__wrap d-flex justify-content-between flex-column flex-xl-row">
                                    <input id="#" type="text" class="pay-form__input" name="expiry" placeholder="Expiration date (MM / YY)" required="">
                                    <input id="#" type="text" class="pay-form__input" name="cvc" placeholder="Secirity Code" required="">
                                </div>
                            </div>
                            <div class="pay-form__wrapper d-flex justify-content-between">
                                <div class="pay-form__radio">
                                    <input type="radio" id="radio4" name="radio" value="Credit card">
                                    <label for="radio4">
                                        <img src="img/paypal.svg" alt="PayPal" class="pay-form__img">
                                    </label>
                                </div>
                                <ul class="pay-form__list d-flex justify-content-center align-items-center">
                                    <li class="pay-form__item">
                                        <img src="img/mastercard-2-(2).svg" alt="Master-card" class="pay-form__img">
                                    </li>
                                    <li class="pay-form__item">
                                        <img src="img/visa-(1).svg" alt="Visa" class="pay-form__img">
                                    </li>
                                    <li class="pay-form__item">
                                        <img src="img/bank-transfer.svg" alt="Transfer-bank" class="pay-form__img">
                                    </li>
                                </ul>
                            </div>
                        </form>
                        <p class="pay-block__text">
                            Billing adress
                        </p>
                        <div class="group-ridio">
                            <input type="radio" id="radio5" name="radio" value="Same as shipping address">
                            <label for="radio5">Same as shipping address</label><br>
                            <input type="radio" id="radio6" name="radio" value="Use a different billing address">
                            <label for="radio6">Use a different billing address</label>
                        </div>
                        <div class="pay-block__footer d-flex justify-content-between align-items-center flex-column flex-sm-row">
                            <a href="shop.html" class="pay-block__link">
                                <img src="img/scroll-arrow-to-left.svg" alt="">
                                Back to shop
                            </a>
                            <button type="submit" onclick="document.location='success.html'" class="pay-block__btn">
                                Complete order
                            </button>
                        </div>
                    </div>
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
</body>
</html>
