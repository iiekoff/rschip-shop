<?php
use yii\helpers\Html;

$this->title = 'Monte GTR | Monte';
?>
<!-- header -->
<header class="head">
    <?= \Yii::$app->view->renderFile('@app/views/layouts/navigation.php');?>
    <?= \Yii::$app->view->renderFile('@app/views/layouts/side-widget.php');?>
    <div class="product2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="img/gtr-logo.svg" alt="Monte-GTR" class="product-img">
                    <ul class="product-list d-flex justify-content-center">
                        <li class="product-list__item">
                            <a href="#benefit2" class="product-list__link">
                                Features
                            </a>
                        </li>
                        <li class="product-list__item">
                            <a href="#correction2" class="product-list__link">
                                Perfomance
                            </a>
                        </li>
                        <li class="product-list__item">
                            <a href="#description2" class="product-list__link">
                                Tech Specs
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row d-none d-md-flex">
                <div class="col-md-6 offset-xl-2 col-xl-6 d-flex justify-content-center justify-content-md-end">
                    <div class="product-content">
                        <h3 class="product-content__title">
                            our most advanced chip
                        </h3>
                        <p class="product-content__text">
                            performance tuning & on-board diagnostics
                        </p>
                        <ul class="product-content__list">
                            <li class="product-content__item">
                                <svg class="product-content__svg">
                                    <use xlink:href="img/sprite.svg#check-symbol"></use>
                                </svg>
                                up to +35 Hp<sup>1</sup> +60Nm<sup>1</sup>
                            </li>
                            <li class="product-content__item">
                                <svg class="product-content__svg">
                                    <use xlink:href="img/sprite.svg#check-symbol"></use>
                                </svg>
                                +18% Fuel Saving<sup>1</sup>
                            </li>
                            <li class="product-content__item">
                                <svg class="product-content__svg">
                                    <use xlink:href="img/sprite.svg#check-symbol"></use>
                                </svg>
                                error code reader
                            </li>
                            <li class="product-content__item">
                                <svg class="product-content__svg">
                                    <use xlink:href="img/sprite.svg#check-symbol"></use>
                                </svg>
                                real time gauges
                            </li>
                            <li class="product-content__item">
                                <svg class="product-content__svg">
                                    <use xlink:href="img/sprite.svg#check-symbol"></use>
                                </svg>
                                touch screen display
                            </li>
                            <li class="product-content__item">
                                <svg class="product-content__svg">
                                    <use xlink:href="img/sprite.svg#check-symbol"></use>
                                </svg>
                                ios/android app
                            </li>
                        </ul>
                        <button type="button" class="btn product-content-btn">
                            Add to Bag for USD 499
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="product2-picture">
                        <img src="img/picture3.png" alt="iPhone&Chip" class="product2-picture__img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-slider d-block d-md-none">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="product-content">
                        <h3 class="product-content__title">
                            our most advanced chip
                        </h3>
                        <p class="product-content__text">
                            performance tuning & on-board diagnostics
                        </p>
                    </div>
                    <div class="gt-plus-slider">
                        <div class="gt-plus-slider__item">
                            <div class="gt-plus-slider__icon">
                                <svg class="gt-plus-slider__svg">
                                    <use xlink:href="img/sprite.svg#light"></use>
                                </svg>
                            </div>
                            <p class="gt-plus-slider__text text-center">
                                up to +35hp<sup>1</sup>
                            </p>
                        </div>
                        <div class="gt-plus-slider__item">
                            <div class="gt-plus-slider__icon">
                                <svg class="gt-plus-slider__svg">
                                    <use xlink:href="img/sprite.svg#graph"></use>
                                </svg>
                            </div>
                            <p class="gt-plus-slider__text text-center">
                                dyno proven
                            </p>
                        </div>
                        <div class="gt-plus-slider__item">
                            <div class="gt-plus-slider__icon">
                                <svg class="gt-plus-slider__svg">
                                    <use xlink:href="img/sprite.svg#speed"></use>
                                </svg>
                            </div>
                            <p class="gt-plus-slider__text text-center">
                                real time gauges
                            </p>
                        </div>
                        <div class="gt-plus-slider__item">
                            <div class="gt-plus-slider__icon">
                                <svg class="gt-plus-slider__svg">
                                    <use xlink:href="img/sprite.svg#fuel"></use>
                                </svg>
                            </div>
                            <p class="gt-plus-slider__text text-center">
                                +15% more fuel<sup>1</sup>
                            </p>
                        </div>
                        <div class="gt-plus-slider__item">
                            <div class="gt-plus-slider__icon">
                                <svg class="gt-plus-slider__svg">
                                    <use xlink:href="img/sprite.svg#check-symbol"></use>
                                </svg>
                            </div>
                            <p class="gt-plus-slider__text text-center">
                                easy to install
                            </p>
                        </div>
                        <div class="gt-plus-slider__item">
                            <div class="gt-plus-slider__icon">
                                <svg class="gt-plus-slider__svg">
                                    <use xlink:href="img/sprite.svg#steering-wheel"></use>
                                </svg>
                            </div>
                            <p class="gt-plus-slider__text text-center">
                                3 driving modes
                            </p>
                        </div>
                        <div class="gt-plus-slider__item">
                            <div class="gt-plus-slider__icon">
                                <svg class="gt-plus-slider__svg">
                                    <use xlink:href="img/sprite.svg#graph2"></use>
                                </svg>
                            </div>
                            <p class="gt-plus-slider__text text-center">
                                in-built dyno
                            </p>
                        </div>
                        <div class="gt-plus-slider__item">
                            <div class="gt-plus-slider__icon">
                                <svg class="gt-plus-slider__svg">
                                    <use xlink:href="img/sprite.svg#medical-stethoscope-variant"></use>
                                </svg>
                            </div>
                            <p class="gt-plus-slider__text text-center">
                                on-board diagnostics
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-slider3 d-block d-md-none">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="product3-picture">
                        <img src="img/picture3.png" alt="iPhone&chip" class="product3-picture__img">
                    </div>
                    <button type="button" class="btn product-content-btn">
                        Add to Bag for USD 499
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
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
<!-- correction2 -->
<section class="correction2" id="correction2">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 class="correction-title">
                    the flagship. no compromises.
                </h3>
                <span class="correction-span">
						up to +22% horsepower and torque<sup>1</sup>
					</span>
                <p class="correction-text text-left text-md-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- performance2 -->
<section class="performance2">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="performance-title text-center">
                    performance unleashed
                </h3>
                <div class="performance-gain">
                    <h4 class="performance-gain__title">
                        BMW M4 Cope
                    </h4>
                    <ul class="performance-gain__list d-flex justify-content-center justify-content-sm-start">
                        <li class="performance-gain__item animated">
                            <svg class="performance-gain__svg">
                                <use xlink:href="img/sprite.svg#rocket"></use>
                            </svg>
                        </li>
                        <li class="performance-gain__item d-flex align-items-center justify-content-center animated">
                            power
                        </li>
                        <li class="performance-gain__item d-flex align-items-center justify-content-center animated">
                            <span>184</span> HP
                        </li>
                        <li class="performance-gain__item d-flex align-items-center justify-content-center animated">
                            +<span>23</span> HP<sup>1</sup>
                        </li>
                    </ul>
                    <ul class="performance-gain__list d-flex justify-content-center justify-content-sm-start">
                        <li class="performance-gain__item animated">
                            <svg class="performance-gain__svg">
                                <use xlink:href="img/sprite.svg#rocket"></use>
                            </svg>
                        </li>
                        <li class="performance-gain__item d-flex align-items-center justify-content-center animated">
                            torque
                        </li>
                        <li class="performance-gain__item d-flex align-items-center justify-content-center animated">
                            <span>380</span> NM
                        </li>
                        <li class="performance-gain__item d-flex align-items-center justify-content-center animated">
                            +<span>67</span> NM<sup>1</sup>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- benefit2 -->
<section class="benefit2" id="benefit2">
    <div class="container">
        <div class="row d-none d-md-block">
            <div class="col">
                <h3 class="benefit-title text-center">
                    monte tuning. here is why.
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-lg-4 d-none d-md-block">
                <div class="benefit-img">
                    <div class="benefit-img__picture">
                        <img src="img/picture6.png" alt="Phone&Chip" class="benefit-img__img">
                    </div>
                    <button class="btn benefit-btn">
                        Add to Bag for USD 499
                    </button>
                    <p class="benefit-img__text text-center">
                        Need some help?
                        <a href="#" class="benefit-img__link">
                            Contact Us.
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-md-7 col-lg-8">
                <div class="benefit-content d-none d-md-flex justify-content-between">
                    <ul class="benefit-content__list">
                        <li class="benefit-content__item">
                            <div class="benefit-content__icon">
                                <svg class="benefit-content__svg">
                                    <use xlink:href="img/sprite.svg#light"></use>
                                </svg>
                            </div>
                            <p class="benefit-content__text text-center">
                                up to<br>+35hp<sup>1</sup>
                            </p>
                        </li>
                        <li class="benefit-content__item">
                            <div class="benefit-content__icon">
                                <svg class="benefit-content__svg">
                                    <use xlink:href="img/sprite.svg#graph"></use>
                                </svg>
                            </div>
                            <p class="benefit-content__text text-center">
                                dyno <br>proven
                            </p>
                        </li>
                        <li class="benefit-content__item">
                            <div class="benefit-content__icon">
                                <svg class="benefit-content__svg">
                                    <use xlink:href="img/sprite.svg#medical-stethoscope-variant"></use>
                                </svg>
                            </div>
                            <p class="benefit-content__text text-center">
                                on-board diagnostics
                            </p>
                        </li>
                    </ul>
                    <ul class="benefit-content__list">
                        <li class="benefit-content__item">
                            <div class="benefit-content__icon">
                                <svg class="benefit-content__svg">
                                    <use xlink:href="img/sprite.svg#fuel"></use>
                                </svg>
                            </div>
                            <p class="benefit-content__text text-center">
                                +15% more fuel<sup>1</sup>
                            </p>
                        </li>
                        <li class="benefit-content__item">
                            <div class="benefit-content__icon">
                                <svg class="benefit-content__svg">
                                    <use xlink:href="img/sprite.svg#check-symbol"></use>
                                </svg>
                            </div>
                            <p class="benefit-content__text text-center">
                                easy to install
                            </p>
                        </li>
                        <li class="benefit-content__item">
                            <div class="benefit-content__icon">
                                <svg class="benefit-content__svg">
                                    <use xlink:href="img/sprite.svg#graph2"></use>
                                </svg>
                            </div>
                            <p class="benefit-content__text text-center">
                                in-built <br>dyno
                            </p>
                        </li>
                    </ul>
                    <ul class="benefit-content__list">
                        <li class="benefit-content__item">
                            <div class="benefit-content__icon">
                                <svg class="benefit-content__svg">
                                    <use xlink:href="img/sprite.svg#steering-wheel"></use>
                                </svg>
                            </div>
                            <p class="benefit-content__text text-center">
                                3 driving modes
                            </p>
                        </li>
                        <li class="benefit-content__item">
                            <div class="benefit-content__icon">
                                <svg class="benefit-content__svg">
                                    <use xlink:href="img/sprite.svg#speed"></use>
                                </svg>
                            </div>
                            <p class="benefit-content__text text-center">
                                real time gauges
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="benefit-download d-flex align-items-center flex-column flex-lg-row">
                    <p class="benefit-download__text">
                        Download the App for free
                    </p>
                    <div class="benefit-download__wrap d-flex">
                        <a href="#" class="benefit-download__link">
                            <img src="img/download-on-the-app-store-apple-(1).svg" alt="App-Store" class="benefit-download__img">
                        </a>
                        <a href="#" class="benefit-download__link">
                            <img src="img/google-play-download-android-app.svg" alt="Google-play" class="benefit-download__img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- description2 -->
<section class="description2" id="description2">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="description-title text-center">
                    tech specs
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul class="description-list">
                    <li class="description-list__item">
                        <div class="row">
                            <div class="col-12 col-md-6 offset-lg-2 col-lg-5 d-flex align-items-md-center justify-content-center justify-content-md-start">
                                <h3 class="description-list-title">
                                    monte gtr
                                </h3>
                            </div>
                            <div class="col-12 col-md-6 col-lg-5 text-center text-md-left">
                                <img src="img/gtr-variant.svg" alt="GTR-chip" class="description-list-img description-list-img_max">
                            </div>
                        </div>
                    </li>
                    <li class="description-list__item d-block d-md-none">
                        <div class="description-slider">
                            <div class="description-slider__item text-center">
                                <h4>
                                    perfomance figures
                                </h4>
                                <p>
                                    UP +35 MORE HP<sup>1</sup>
                                </p>
                                <p>
                                    UP TO +60 MORE NM<sup>1</sup>
                                </p>
                                <p>
                                    UP TO +18 MORE FUEL SAVINGS<sup>1</sup>
                                </p>
                            </div>
                            <div class="description-slider__item text-center">
                                <h4>
                                    warranty and return
                                </h4>
                                <p>
                                    30 days  money back and lifetime warranty and deffects
                                </p>
                            </div>
                            <div class="description-slider__item text-center">
                                <h4>
                                    software
                                </h4>
                                <p>
                                    Monte GTR firmware core
                                </p>
                                <p>
                                    Mac/PC programmer with vehicle specific tuning database
                                </p>
                                <p>
                                    Monte IOS/Android App
                                </p>
                            </div>
                            <div class="description-slider__item text-center">
                                <h4>
                                    hardware
                                </h4>
                                <p>
                                    16 pin obdii connector
                                </p>
                                <p>
                                    Operating temperature -40 C° +85C°
                                </p>
                                <p>
                                    Operating voltage 7,5V - 20V
                                </p>
                                <p>
                                    Touch screen display
                                </p>
                                <p>
                                    Bluetooth 4.0
                                </p>
                            </div>
                            <div class="description-slider__item text-center">
                                <h4>
                                    dimension
                                </h4>
                                <p>
                                    Length<span>&ensp;121 mm</span>
                                </p>
                                <p>
                                    Width<span>&emsp;76 mm</span>
                                </p>
                                <p>
                                    Hight<span>&emsp;&nbsp;25 mm</span>
                                </p>
                            </div>
                            <div class="description-slider__item text-center">
                                <h4>
                                    what&apos;s in the box?
                                </h4>
                                <p>
                                    Monte GT
                                </p>
                                <p>
                                    Quick start guide
                                </p>
                                <p>
                                    OBDII connector
                                </p>
                                <p>
                                    Magnet mount
                                </p>
                                <p>
                                    Car stickers
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="description-list__item d-none d-md-block">
                        <div class="row">
                            <div class="col-md-6 offset-lg-2 col-lg-5">
                                <h4>
                                    perfomance figures
                                </h4>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <p>
                                    UP +35 MORE HP <sup>1</sup>
                                </p>
                                <p>
                                    UP TO +60 MORE NM<sup>1</sup>
                                </p>
                                <p>
                                    UP TO +18 MORE FUEL SAVINGS<sup>1</sup>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="description-list__item d-none d-md-block">
                        <div class="row">
                            <div class="col-md-6 offset-lg-2 col-lg-5">
                                <h4>
                                    warranty and return
                                </h4>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <p>
                                    30 days  money back and lifetime warranty and deffects
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="description-list__item d-none d-md-block">
                        <div class="row">
                            <div class="col-md-6 offset-lg-2 col-lg-5">
                                <h4>
                                    software
                                </h4>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <p>
                                    Monte GTR firmware core
                                </p>
                                <p>
                                    Mac/PC programmer with vehicle specific tuning database
                                </p>
                                <p>
                                    Monte IOS/Android App
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="description-list__item d-none d-md-block">
                        <div class="row">
                            <div class="col-md-6 offset-lg-2 col-lg-5">
                                <h4>
                                    hardware
                                </h4>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <p>
                                    16 pin obdii connector
                                </p>
                                <p>
                                    Operating temperature -40 C° +85C°
                                </p>
                                <p>
                                    Operating voltage 7,5V - 20V
                                </p>
                                <p>
                                    Touch screen display
                                </p>
                                <p>
                                    Bluetooth 4.0
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="description-list__item d-none d-md-block">
                        <div class="row">
                            <div class="col-md-6 offset-lg-2 col-lg-5">
                                <h4>
                                    dimension
                                </h4>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <p>
                                    Length<span>&ensp;121 mm</span>
                                </p>
                                <p>
                                    Width<span>&emsp;76 mm</span>
                                </p>
                                <p>
                                    Hight<span>&emsp;&nbsp;25 mm</span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="description-list__item d-none d-md-block">
                        <div class="row">
                            <div class="col-md-6 offset-lg-2 col-lg-5">
                                <h4>
                                    what&apos;s in the box?
                                </h4>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <p>
                                    Monte GT
                                </p>
                                Quick start guide
                                <p>
                                <p>
                                    OBDII connector
                                </p>
                                <p>
                                    Magnet mount
                                </p>
                                <p>
                                    Car stickers
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
                <p class="description-text">
                    1. Real world gains may be less or more depending on a large number of contributing factors.
                </p>
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