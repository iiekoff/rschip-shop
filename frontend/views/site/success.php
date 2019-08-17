<?php

use yii\helpers\Html;

$this->title = 'Thank you for your purchase! | Monte';
?>
<!-- header -->
<header class="header-2">
    <?= \Yii::$app->view->renderFile('@app/views/layouts/navigation.php');?>
    <div class="success">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h5 class="success-title">
                        thank you for your purchase!
                    </h5>
                    <p class="success-text d-none d-sm-block">
                        Your order is confirmed. We`ve accepted your order, and we`re getting it ready.
                    </p>
                    <p class="success-text d-none d-sm-block">
                        An email receipt containig your order information will be delivered to you shortly.
                    </p>
                    <p class="success-text d-block d-sm-none">
                        Your order is confirmed. We`ve accepted your order, and we`re getting it ready. An email receipt containig your order information will be delivered to you shortly.
                    </p>
                    <a href="shop.html" class="success-link">
                        Continue shopping
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
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
