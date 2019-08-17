<?php

$this->title = 'Pre-sales questions | Support';

use yii\helpers\Html;
?>
<header class="header-2">
        <?= \Yii::$app->view->renderFile('@app/views/layouts/navigation.php');?>
    <div class="presale-offer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-7">
                    <a href="support.html" class="presale-offer-link">
                        <svg class="presale-offer__svg">
                            <use xlink:href="img/sprite.svg#arrow-left"></use>
                        </svg>
                        Return to support centre
                    </a>
                    <h2 class="presale-offer-title text-center text-md-left">
                        Pre-sales questions
                    </h2>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5">
                    <div class="presale-offer-pictures text-center text-md-left">
                        <img src="img/picture10.png" alt="Chips" class="presale-offer-pictures__img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- questions -->
<section class="questions">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="questions-wrap">
                    <ul class="list-questions">
                        <li class="list-questions__item">
                            <input type="checkbox" checked>
                            <i></i>
                            <h5 class="list-questions__title">
                                How does Monte work?
                            </h5>
                            <p class="list-questions__text">
                                Monte tuning device works by dynamically changing the values in the ECU. Each chip comes with no car specific software and needs to be tuned via Smartphone or Desktop App. Tuning map contains a set of EPROM addresses that directly affect efficiency and performance. When the ECU attempts to read the specific EPROM address, the Monte replaces the factory value with one from its on-board performance tuned map. The chip runs its own software that communicates with the ECU and modifies fuel maps safely. It reads the ECU and the ECU's fuel and timing values ONLY are the subjects to change.
                            </p>
                        </li>
                        <li class="list-questions__item">
                            <input type="checkbox" checked>
                            <i></i>
                            <h5 class="list-questions__title">
                                Does it affect my vehicle's warranty?
                            </h5>
                            <p class="list-questions__text">
                                No, it doesn't. The MONTE chip is untraceable if it is removed. As opposed to re-mapping, the ECU is not overwritten.
                            </p>
                        </li>
                        <li class="list-questions__item">
                            <input type="checkbox" checked>
                            <i></i>
                            <h5 class="list-questions__title">
                                Is it at all possible for this chip to damage my car?
                            </h5>
                            <p class="list-questions__text">
                                No, MONTE exploits untapped resources. Monte tuning device runs its own software that communicates with the ECU and modifies fuel maps safely. It reads the ECU and only the ECU's fuel and timing values are the subject to change. The chip will not affect any other electronic systems such as dashboard displays, safety features, etc. We advise you to check your oil level and serpentine belt before you install it.
                            </p>
                        </li>
                        <li class="list-questions__item">
                            <input type="checkbox" checked>
                            <i></i>
                            <h5 class="list-questions__title">
                                Can  transfer my Monte to another car ?
                            </h5>
                            <p class="list-questions__text">
                                Yes, Monte can be transferable to any vehicle available in our database of over 6000 vehicles.
                            </p>
                        </li>
                        <li class="list-questions__item">
                            <input type="checkbox" checked>
                            <i></i>
                            <h5 class="list-questions__title">
                                What are the basic vehicle requirements ?
                            </h5>
                            <p class="list-questions__text">
                                The vehicle must be well-maintained and have OBDII diagnostic port.Usually all cars from 1996 has the OBD2 port.
                            </p>
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
