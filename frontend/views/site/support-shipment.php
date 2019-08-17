<?php

use yii\helpers\Html;
$this->title = 'Shipment and return | Support';
?>
<header class="header-2">
        <?= \Yii::$app->view->renderFile('@app/views/layouts/navigation.php');?>
    <div class="shipment-offer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <a href="support.html" class="shipment-offer-link">
                        <svg class="shipment-offer__svg">
                            <use xlink:href="img/sprite.svg#arrow-left"></use>
                        </svg>
                        Return to support centre
                    </a>
                    <h2 class="shipment-offer-title text-center text-sm-left">
                        shipment and return
                    </h2>
                </div>
                <div class="col-12 col-md-6">
                    <div class="shipment-offer-pictures">
                        <img src="img/shipment-bg.png" alt="Chips" class="shipment-offer-pictures__img d-none d-sm-block">
                        <img src="img/picture11.png" alt="Chips" class="shipment-offer-pictures__img d-block d-sm-none">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- return -->
<section class="return">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="shipment">
                    <h2 class="shipment__title text-center">
                        Shipping
                    </h2>
                    <ul class="list-questions">
                        <li class="list-questions__item">
                            <input type="checkbox" checked>
                            <i></i>
                            <h5 class="list-questions__title">
                                How soon will I get my order?
                            </h5>
                            <p class="list-questions__text">
                                Average delivery time is 2-3 days after paying the order.
                            </p>
                        </li>
                        <li class="list-questions__item">
                            <input type="checkbox" checked>
                            <i></i>
                            <h5 class="list-questions__title">
                                Who will be delivering my order?
                            </h5>
                            <p class="list-questions__text">
                                All orders within US are fulfilled by the UPS. All international orders will be delivered by the DHL.
                            </p>
                        </li>
                        <li class="list-questions__item">
                            <input type="checkbox" checked>
                            <i></i>
                            <h5 class="list-questions__title">
                                How much does delivery cost?
                            </h5>
                            <p class="list-questions__text">
                                Shipping is free within US and Canada. The shipping fee outside US/Canada is up to USD42
                            </p>
                        </li>
                        <li class="list-questions__item">
                            <input type="checkbox" checked>
                            <i></i>
                            <h5 class="list-questions__title">
                                Where can I find my tracking number?
                            </h5>
                            <p class="list-questions__text">
                                When your package is shipped you'll automatically receive an email with the tracking number. In case you did not receive this email,  please contact our customer service.
                            </p>
                        </li>
                        <li class="list-questions__item">
                            <input type="checkbox" checked>
                            <i></i>
                            <h5 class="list-questions__title">
                                Where I can trace my order status?
                            </h5>
                            <p class="list-questions__text">
                                Please enter your tracking number at the courier partner's website (USPS or DHL) and you can track the status of your package.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="warranty">
                    <h2 class="warranty__title text-center">
                        Returns, replacements, and warranty
                    </h2>
                    <ul class="list-questions">
                        <li class="list-questions__item">
                            <input type="checkbox" checked>
                            <i></i>
                            <h5 class="list-questions__title">
                                What is considered a warranty event?
                            </h5>
                            <p class="list-questions__text">
                                A warranty event is when your Monte has a technical problem or factory defect, which doesn’t let it function properly.
                            </p>
                        </li>
                        <li class="list-questions__item">
                            <input type="checkbox" checked>
                            <i></i>
                            <h5 class="list-questions__title">
                                What is the warranty period ?
                            </h5>
                            <p class="list-questions__text">
                                We are offering a lifetime warranty on factory defects
                            </p>
                        </li>
                        <li class="list-questions__item">
                            <input type="checkbox" checked>
                            <i></i>
                            <h5 class="list-questions__title">
                                What is the warranty period for RSCHIP? We are offering a lifetime warranty on factory defects.
                            </h5>
                            <p class="list-questions__text">
                                If the reason for return is a technical problem or factory defect, we will pay the delivery expenses. In other cases the customer covers all the corresponding expenses.
                            </p>
                        </li>
                        <li class="list-questions__item">
                            <input type="checkbox" checked>
                            <i></i>
                            <h5 class="list-questions__title">
                                Can I return the chip if I’m not satisfied with the results?
                            </h5>
                            <p class="list-questions__text">
                                Yes, we are offering 100 days trial period, if you are not satisfied with the results please ship the chip back. No questions asked.
                            </p>
                        </li>
                        <li class="list-questions__item">
                            <input type="checkbox" checked>
                            <i></i>
                            <h5 class="list-questions__title">
                                When does the 100-day trial period begin?
                            </h5>
                            <p class="list-questions__text">
                                It begins when you receive your order.
                            </p>
                        </li>
                        <li class="list-questions__item">
                            <input type="checkbox" checked>
                            <i></i>
                            <h5 class="list-questions__title">
                                How do I get my money back if I return the chip?
                            </h5>
                            <p class="list-questions__text">
                                We will provide the refund to your PayPal account. Please note the PayPal, and other fees are not refundable.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2 class="return__title text-center">
                    What is the return process?
                </h2>
            </div>
        </div>
        <div class="row d-block d-md-none">
            <div class="col">
                <div class="support-slider">
                    <div class="support-slider__item text-center">
                        <h4 class="support-slider__title">
                            step 1
                        </h4>
                        <svg class="support-slider__svg">
                            <use xlink:href="img/sprite.svg#print"></use>
                        </svg>
                        <p class="support-slider__text">
                            Print & submit RMA Form
                        </p>
                    </div>
                    <div class="support-slider__item text-center">
                        <h4 class="support-slider__title">
                            step 2
                        </h4>
                        <svg class="support-slider__svg">
                            <use xlink:href="img/sprite.svg#box"></use>
                        </svg>
                        <p class="support-slider__text">
                            Pack the product along with the printed RMA Form. Make sure that the item is in original unmarked packaging and all components are in the box.
                        </p>
                    </div>
                    <div class="support-slider__item text-center">
                        <h4 class="support-slider__title">
                            step 3
                        </h4>
                        <svg class="support-slider__svg">
                            <use xlink:href="img/sprite.svg#cash"></use>
                        </svg>
                        <p class="support-slider__text">
                            If the product is returned undamaged in its original condition, your money will be refunded within 7 business days. Please, note that return process is applicable only for purchases from montetuning.com.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-none d-md-flex">
            <div class="col-md-4">
                <div class="process">
                    <div class="process__wrap d-flex align-items-center">
                        <svg class="process__svg">
                            <use xlink:href="img/sprite.svg#print"></use>
                        </svg>
                        <h4 class="process__title">
                            step 1
                        </h4>
                        <svg class="process__arrow">
                            <use xlink:href="img/sprite.svg#arrow-to-right"></use>
                        </svg>
                    </div>
                    <p class="process__text">
                        Print & submit<br>RMA Form
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="process">
                    <div class="process__wrap d-flex align-items-center">
                        <svg class="process__svg">
                            <use xlink:href="img/sprite.svg#box"></use>
                        </svg>
                        <h4 class="process__title">
                            step 2
                        </h4>
                        <svg class="process__arrow">
                            <use xlink:href="img/sprite.svg#arrow-to-right"></use>
                        </svg>
                    </div>
                    <p class="process__text">
                        Pack the product along with the printed RMA Form. Make sure that the item is in original unmarked packaging and all components are in the box.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="process">
                    <div class="process__wrap d-flex align-items-center">
                        <svg class="process__svg">
                            <use xlink:href="img/sprite.svg#cash"></use>
                        </svg>
                        <h4 class="process__title">
                            step 3
                        </h4>
                    </div>
                    <p class="process__text">
                        If the product is returned undamaged in its original condition, your money will be refunded within 7 business days. Please, note that return process is applicable only for purchases from montetuning.com.
                    </p>
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