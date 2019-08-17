<?php

use yii\helpers\Html;

$this->title = 'Installation | Support';
?>
<header class="header-2">
    <?= \Yii::$app->view->renderFile('@app/views/layouts/navigation.php');?>
    <div class="install-offer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="support.html" class="install-offer-link">
                        <svg class="install-offer__svg">
                            <use xlink:href="img/sprite.svg#arrow-left"></use>
                        </svg>
                        Return to support centre
                    </a>
                    <div class="install-wrapper d-md-flex justify-content-between align-items-center">
                        <h2 class="install-wrapper__title text-center text-md-left">
                            installation
                        </h2>
                        <ul class="install-wrapper-list d-none d-md-flex">
                            <li class="install-wrapper-list__item">
                                <a href="#gt" class="instal-wrapper-list__link">
                                    gt
                                </a>
                            </li>
                            <li class="install-wrapper-list__item">
                                <a href="#gtr" class="instal-wrapper-list__link">
                                    gtr
                                </a>
                            </li>
                            <li class="install-wrapper-list__item">
                                <a href="#download" class="instal-wrapper-list__link">
                                    download
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- install -->
<section class="install">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="install-wrap" id="gt">
                    <h2 class="install-wrap__title text-center">
                        installation gt
                    </h2>
                    <ul class="install-wrap-list d-flex justify-content-between">
                        <li class="install-wrap-list__item d-flex align-items-center flex-column flex-md-row" id="focus1" data-num="1">
                            <svg class="install-wrap-list__svg">
                                <use xlink:href="img/sprite.svg#notebook"></use>
                            </svg>
                            <p class="install-wrap-list__text d-none d-md-block">
                                installation with pc/mac
                            </p>
                            <p class="install-wrap-list__text d-block d-md-none">
                                pc/mac
                            </p>
                        </li>
                        <li class="install-wrap-list__item d-flex align-items-center flex-column flex-md-row" data-num="2">
                            <svg class="install-wrap-list__svg">
                                <use xlink:href="img/sprite.svg#phone"></use>
                            </svg>
                            <p class="install-wrap-list__text d-none d-md-block">
                                installation smartphone
                            </p>
                            <p class="install-wrap-list__text d-block d-md-none">
                                smartphone
                            </p>
                        </li>
                    </ul>
                    <div class="slider-wrap">
                        <div class="install-slider d-flex align-items-center" id="block1">
                            <div class="install-slider__item">
                                <img src="img/slider-img1.png" alt="" class="install-slider__img">
                            </div>
                            <div class="install-slider__item">
                                <img src="img/slider-img1.png" alt="" class="install-slider__img">
                            </div>
                            <div class="install-slider__item">
                                <img src="img/slider-img1.png" alt="" class="install-slider__img">
                            </div>
                        </div>
                        <div class="install-slider d-flex align-items-center" id="block2">
                            <div class="install-slider__item">
                                <img src="img/slider-img2.png" alt="" class="install-slider__img install-slider__img_smal">
                            </div>
                            <div class="install-slider__item">
                                <img src="img/slider-img2.png" alt="" class="install-slider__img install-slider__img_smal">
                            </div>
                            <div class="install-slider__item">
                                <img src="img/slider-img2.png" alt="" class="install-slider__img install-slider__img_smal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="install-wrap" id="gtr">
                    <h2 class="install-wrap__title text-center">
                        installation gtr
                    </h2>
                    <ul class="install-wrap-list2 d-flex justify-content-between">
                        <li class="install-wrap-list2__item d-flex align-items-center flex-column flex-md-row" id="focus2" data-num="3">
                            <svg class="install-wrap-list2__svg">
                                <use xlink:href="img/sprite.svg#notebook"></use>
                            </svg>
                            <p class="install-wrap-list2__text d-none d-md-block">
                                installation with pc/mac
                            </p>
                            <p class="install-wrap-list2__text d-block d-md-none">
                                pc/mac
                            </p>
                        </li>
                        <li class="install-wrap-list2__item d-flex align-items-center flex-column flex-md-row" data-num="4">
                            <svg class="install-wrap-list2__svg">
                                <use xlink:href="img/sprite.svg#phone"></use>
                            </svg>
                            <p class="install-wrap-list2__text d-none d-md-block">
                                installation smartphone
                            </p>
                            <p class="install-wrap-list2__text d-block d-md-none">
                                smartphone
                            </p>
                        </li>
                    </ul>
                    <div class="slider-wrap">
                        <div class="install-slider2 d-flex align-items-center" id="block3">
                            <div class="install-slider2__item">
                                <img src="img/slider-img1.png" alt="" class="install-slider2__img">
                            </div>
                            <div class="install-slider2__item">
                                <img src="img/slider-img1.png" alt="" class="install-slider2__img">
                            </div>
                            <div class="install-slider2__item">
                                <img src="img/slider-img1.png" alt="" class="install-slider2__img">
                            </div>
                        </div>
                        <div class="install-slider2 d-flex align-items-center" id="block4">
                            <div class="install-slider2__item">
                                <img src="img/slider-img2.png" alt="" class="install-slider2__img install-slider2__img_smal">
                            </div>
                            <div class="install-slider2__item">
                                <img src="img/slider-img2.png" alt="" class="install-slider2__img install-slider2__img_smal">
                            </div>
                            <div class="install-slider2__item">
                                <img src="img/slider-img2.png" alt="" class="install-slider2__img install-slider2__img_smal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="install-download" id="download">
                    <h2 class="install-download__title text-center">
                        downloads
                    </h2>
                    <ul class="download-list d-flex justify-content-between flex-wrap flex-sm-nowrap">
                        <li class="download-list__item">
                            <a href="#" download title="Download file" target="_blank" class="download-list__link d-flex d-lg-inline-block flex-column flex-lg-row align-items-center align-items-lg-start">
                                <svg class="download-list__svg">
                                    <use xlink:href="img/sprite.svg#windows-8"></use>
                                </svg>
                                <span>
										pc
									</span>
                            </a>
                        </li>
                        <li class="download-list__item">
                            <a href="#" download title="Download file" target="_blank" class="download-list__link d-flex d-lg-inline-block flex-column flex-lg-row align-items-center align-items-lg-start">
                                <svg class="download-list__svg">
                                    <use xlink:href="img/sprite.svg#apple"></use>
                                </svg>
                                <span>
										mac
									</span>
                            </a>
                        </li>
                        <li class="download-list__item">
                            <a href="#" download title="Download file" target="_blank" class="download-list__link d-flex d-lg-inline-block flex-column flex-lg-row align-items-center align-items-lg-start">
                                <svg class="download-list__svg">
                                    <use xlink:href="img/sprite.svg#android-logo"></use>
                                </svg>
                                <span>
										android
									</span>
                            </a>
                        </li>
                        <li class="download-list__item">
                            <a href="#" download title="Download file" target="_blank" class="download-list__link d-flex d-lg-inline-block flex-column flex-lg-row align-items-center align-items-lg-start">
                                <svg class="download-list__svg">
                                    <use xlink:href="img/sprite.svg#apple"></use>
                                </svg>
                                <span>
										ios
									</span>
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