<?php

use yii\helpers\Html;
$this->title = 'Products | Monte';
?>
<header class="head">
<?= \Yii::$app->view->renderFile('@app/views/layouts/navigation.php');?>
<?= \Yii::$app->view->renderFile('@app/views/layouts/side-widget.php');?>
</header>
<!-- products -->
<section class="products">
    <div class="container-fluid d-block d-md-none">
        <img src="img/monte-logo.svg" alt="Logo" class="products-img d-block d-md-none">
        <div class="slider-block d-block d-md-none">
            <div class="products-slider">
                <div class="products-slider__item">
                    <h3 class="products-slider__title text-center">
                        gt
                    </h3>
                    <a href="monte-gt.html" class="products-slider__link">
                        <img src="img/gt-variant.svg" alt="chip" class="products-slider__img">
                    </a>
                </div>
                <div class="products-slider__item">
                    <h3 class="products-slider__title text-center">
                        gtr
                    </h3>
                    <a href="monte-gtr.html" class="products-slider__link">
                        <img src="img/gtr-variant.svg" alt="chip" class="products-slider__img">
                    </a>
                </div>
                <div class="products-slider__item">
                    <h3 class="products-slider__title text-center">
                        Compare all
                    </h3>
                    <img src="img/all-variant.svg" alt="chip" class="products-slider__img products-slider__img_big">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="variant d-none d-md-flex justify-content-around">
                    <div class="variant__wrap text-center">
                        <a href="monte-gt.html" class="variant__link">
                            <img src="img/gt-variant.svg" alt="chip" class="variant__img">
                        </a>
                        <p class="variant__text">
                            GT
                        </p>
                    </div>
                    <div class="variant__wrap text-center">
                        <a href="monte-gtr.html" class="variant__link">
                            <img src="img/gtr-variant.svg" alt="chip" class="variant__img">
                        </a>
                        <p class="variant__text">
                            GT R
                        </p>
                    </div>
                    <div class="variant__wrap text-center">
                        <img src="img/all-variant.svg" alt="chip" class="variant__img">
                        <p class="variant__text">
                            Compare all
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3 class="products-title text-center">
                    Compare all products
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-6 text-center d-none d-md-block">
                <svg class="products-svg">
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
                        <li class="chips-list__item d-flex justify-content-center align-items-center justify-content-between">
                            <p class="chips-list__text">
                                <span>USD</span> 349
                            </p>
                            <a href="#" class="chips-list__link">
                                SHOP
                            </a>
                        </li>
                        <li class="chips-list__item d-lg-flex">
                            <svg class="chips-list__svg d-none d-lg-block">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                up to +20 Hp +45Nm
                            </p>
                        </li>
                        <li class="chips-list__item d-lg-flex">
                            <svg class="chips-list__svg d-none d-lg-block">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                +15% Fuel Saving
                            </p>
                        </li>
                        <li class="chips-list__item d-lg-flex">
                            <svg class="chips-list__svg d-none d-lg-block">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                3 Driving modes
                            </p>
                        </li>
                        <li class="chips-list__item d-lg-flex">
                            <svg class="chips-list__svg d-none d-lg-block">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                Mac/Pc programmer
                            </p>
                        </li>
                        <li class="chips-list__item d-lg-flex">
                            <svg class="chips-list__svg d-none d-lg-block">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                iOs/Android App
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6 text-center d-none d-md-block">
                <svg class="products-svg">
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
                        <li class="chips-list__item d-flex justify-content-center align-items-center justify-content-around">
                            <p class="chips-list__text">
                                <span>USD</span> 549
                            </p>
                            <a href="#" class="chips-list__link">
                                SHOP
                            </a>
                        </li>
                        <li class="chips-list__item d-lg-flex">
                            <svg class="chips-list__svg d-none d-lg-block">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                up to +35 Hp +60Nm
                            </p>
                        </li>
                        <li class="chips-list__item d-lg-flex">
                            <svg class="chips-list__svg d-none d-lg-block">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                +18% Fuel Saving
                            </p>
                        </li>
                        <li class="chips-list__item d-lg-flex">
                            <svg class="chips-list__svg d-none d-lg-block">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                3 Driving modes
                            </p>
                        </li>
                        <li class="chips-list__item d-lg-flex">
                            <svg class="chips-list__svg d-none d-lg-block">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                Mac/Pc programmer
                            </p>
                        </li>
                        <li class="chips-list__item d-lg-flex">
                            <svg class="chips-list__svg d-none d-lg-block">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                iOs/Android App
                            </p>
                        </li>
                        <li class="chips-list__item d-lg-flex">
                            <svg class="chips-list__svg d-none d-lg-block">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                Toach screen display
                            </p>
                        </li>
                        <li class="chips-list__item d-lg-flex">
                            <svg class="chips-list__svg d-none d-lg-block">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                Error code reader
                            </p>
                        </li>
                        <li class="chips-list__item d-lg-flex">
                            <svg class="chips-list__svg d-none d-lg-block">
                                <use xlink:href="img/sprite.svg#check-symbol"></use>
                            </svg>
                            <p class="chips-list__text">
                                Real time gauges
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-block d-md-none">
        <div class="wrapper-products d-flex">
            <div class="chips text-center">
                <svg class="chips-svg">
                    <use xlink:href="img/sprite.svg#gt"></use>
                </svg>
                <img src="img/picture8.png" alt="" class="chips__img">
                <div class="chips__wrap">
                    <p class="chips__text">
                        up to <span>+20</span> Hp <span>+45</span>Nm
                    </p>
                </div>
                <ul class="chips-list">
                    <li class="chips-list__item d-flex flex-column">
                        <p class="chips-list__text">
                            <span>USD</span> 349
                        </p>
                        <a href="#" class="chips-list__link">
                            SHOP
                        </a>
                    </li>
                    <li class="chips-list__item d-lg-flex">
                        <svg class="chips-list__svg d-none d-lg-block">
                            <use xlink:href="img/sprite.svg#check-symbol"></use>
                        </svg>
                        <p class="chips-list__text">
                            +15% Fuel Saving
                        </p>
                    </li>
                    <li class="chips-list__item d-lg-flex">
                        <svg class="chips-list__svg d-none d-lg-block">
                            <use xlink:href="img/sprite.svg#check-symbol"></use>
                        </svg>
                        <p class="chips-list__text">
                            3 Driving modes
                        </p>
                    </li>
                    <li class="chips-list__item d-lg-flex">
                        <svg class="chips-list__svg d-none d-lg-block">
                            <use xlink:href="img/sprite.svg#check-symbol"></use>
                        </svg>
                        <p class="chips-list__text">
                            Mac/Pc programmer
                        </p>
                    </li>
                    <li class="chips-list__item d-lg-flex">
                        <svg class="chips-list__svg d-none d-lg-block">
                            <use xlink:href="img/sprite.svg#check-symbol"></use>
                        </svg>
                        <p class="chips-list__text">
                            iOs/Android App
                        </p>
                    </li>
                </ul>
            </div>
            <div class="chips text-center">
                <svg class="chips-svg">
                    <use xlink:href="img/sprite.svg#gtr"></use>
                </svg>
                <img src="img/picture9.png" alt="" class="chips__img">
                <div class="chips__wrap">
                    <p class="chips__text">
                        up to <span>+35</span> Hp <span>+60</span>Nm
                    </p>
                </div>
                <ul class="chips-list">
                    <li class="chips-list__item d-flex flex-column">
                        <p class="chips-list__text">
                            <span>USD</span> 349
                        </p>
                        <a href="#" class="chips-list__link">
                            SHOP
                        </a>
                    </li>
                    <li class="chips-list__item d-lg-flex">
                        <svg class="chips-list__svg d-none d-lg-block">
                            <use xlink:href="img/sprite.svg#check-symbol"></use>
                        </svg>
                        <p class="chips-list__text">
                            +18% Fuel Saving
                        </p>
                    </li>
                    <li class="chips-list__item d-lg-flex">
                        <svg class="chips-list__svg d-none d-lg-block">
                            <use xlink:href="img/sprite.svg#check-symbol"></use>
                        </svg>
                        <p class="chips-list__text">
                            3 Driving modes
                        </p>
                    </li>
                    <li class="chips-list__item d-lg-flex">
                        <svg class="chips-list__svg d-none d-lg-block">
                            <use xlink:href="img/sprite.svg#check-symbol"></use>
                        </svg>
                        <p class="chips-list__text">
                            Mac/Pc programmer
                        </p>
                    </li>
                    <li class="chips-list__item d-lg-flex">
                        <svg class="chips-list__svg d-none d-lg-block">
                            <use xlink:href="img/sprite.svg#check-symbol"></use>
                        </svg>
                        <p class="chips-list__text">
                            iOs/Android App
                        </p>
                    </li>
                    <li class="chips-list__item d-lg-flex">
                        <svg class="chips-list__svg d-none d-lg-block">
                            <use xlink:href="img/sprite.svg#check-symbol"></use>
                        </svg>
                        <p class="chips-list__text">
                            Toach screen display
                        </p>
                    </li>
                    <li class="chips-list__item d-lg-flex">
                        <svg class="chips-list__svg d-none d-lg-block">
                            <use xlink:href="img/sprite.svg#check-symbol"></use>
                        </svg>
                        <p class="chips-list__text">
                            Error code reader
                        </p>
                    </li>
                    <li class="chips-list__item d-lg-flex">
                        <svg class="chips-list__svg d-none d-lg-block">
                            <use xlink:href="img/sprite.svg#check-symbol"></use>
                        </svg>
                        <p class="chips-list__text">
                            Real time gauges
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- section-widget -->
<section class="section-widget section-widget_2 d-block d-lg-none">
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