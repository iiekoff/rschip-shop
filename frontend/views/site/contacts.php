<?php

use yii\helpers\Html;

$this->title = 'Contacts | Monte';
?>
<!-- support -->
<header class="header-2">
    <?= \Yii::$app->view->renderFile('@app/views/layouts/navigation.php');?>
</header>
<section class="contacts">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="contacts-title text-center">
                    contact us
                </h1>
                <div class="contacts-wrap d-flex align-items-center d-sm-none">
                    <a href="#" class="contacts-wrap__link">
                        <img src="img/instagram.svg" alt="Instagram" class="contacts-wrap__img">
                    </a>
                    <a href="#" class="contacts-wrap__link">
                        <svg class="contacts-wrap__svg">
                            <use xlink:href="img/sprite.svg#facebook"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul class="adress-list">
                    <li class="adress-list__item d-flex align-items-center">
                        <svg class="adress-list__svg">
                            <use xlink:href="img/sprite.svg#email"></use>
                        </svg>
                        <a href="mailto:germes_w@mail.ru" class="adress-list__link">
                            support@montetuning.com
                        </a>
                    </li>
                    <li class="adress-list__item d-flex align-items-center">
                        <svg class="adress-list__svg">
                            <use xlink:href="img/sprite.svg#phone-symbol"></use>
                        </svg>
                        <a href="tel:+18000000000" class="adress-list__link">
                            +1 800 000 00 00 <br>
                            <span>
									US/Canada toll free
								</span>
                        </a>
                    </li>
                    <li class="adress-list__item d-flex justify-content-between">
                        <div class="adress-list__wrap d-flex align-items-center">
                            <svg class="adress-list__svg">
                                <use xlink:href="img/sprite.svg#map"></use>
                            </svg>
                            <p>
                                1201 East 5st Street North Little Rock, Arkansas USA 72114
                            </p>
                        </div>
                        <div class="adress-list__wrap d-none d-sm-flex align-items-center">
                            <a href="#" class="adress-list__link">
                                <img src="img/instagram.svg" alt="Instagram" class="adress-list__img">
                            </a>
                            <a href="#" class="adress-list__link">
                                <svg class="adress-list__svg">
                                    <use xlink:href="img/sprite.svg#facebook"></use>
                                </svg>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6555.942120824671!2d-92.25764125313972!3d34.75632181674067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d2bc799c155701%3A0x1d7f793e001d8845!2sVolo+Performance+Inc.!5e0!3m2!1sen!2sru!4v1557825227504!5m2!1sen!2sru" width="1140" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- payment -->
<section class="payment d-block d-md-none">
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