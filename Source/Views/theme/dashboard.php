<?php $v->layout("sidebar"); ?>

<?php $v->start("css"); ?>
<link href="<?= asset('css/message.css') ?>" rel="stylesheet">
<link href="<?= asset('css/dashboard.css') ?>" rel="stylesheet">

<?php $v->end(); ?>

<div class="page">
    <div class="container">
        <div class="row m-0">
            <div class="col col-6 col-sm-4 col-md-3 p-3 col-lg-5-12">
                <div class="widget-box cursor-pointer">
                    <a href="" class="widget-box__link" target="">
                        <div class="widget-box__content">
                            <span class="widget-box__icon">
                                <img src="<?= asset('img/costura.png') ?>" class="img-widget" width="50px" height="50px" alt="Order Usage">
                            </span>
                            <span class="widget-box__subtitle text-center">
                                <span>Máquina 1</span>
                            </span>
                            <span class="widget-box__counter text-center">
                                <span>000</span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-6 col-sm-4 col-md-3 p-3 col-lg-5-12">
                <div class="widget-box cursor-pointer">
                    <a href="" class="widget-box__link" target="">
                        <div class="widget-box__content">
                            <span class="widget-box__icon">
                                <img src="<?= asset('img/costura.png') ?>" class="img-widget" width="50px" height="50px" alt="Order Usage">
                            </span>
                            <span class="widget-box__subtitle text-center">
                                <span>Máquina 2</span>
                            </span>
                            <span class="widget-box__counter text-center">
                                <span>000</span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-6 col-sm-4 col-md-3 p-3 col-lg-5-12">
                <div class="widget-box cursor-pointer">
                    <a href="" class="widget-box__link" target="">
                        <div class="widget-box__content">
                            <span class="widget-box__icon">
                                <img src="<?= asset('img/costura.png') ?>" class="img-widget" width="50px" height="50px" alt="Order Usage">
                            </span>
                            <span class="widget-box__subtitle text-center">
                                <span>Máquina 3</span>
                            </span>
                            <span class="widget-box__counter text-center">
                                <span>000</span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-6 col-sm-4 col-md-3 p-3 col-lg-5-12">
                <div class="widget-box cursor-pointer">
                    <a href="" class="widget-box__link" target="">
                        <div class="widget-box__content">
                            <span class="widget-box__icon">
                                <img src="<?= asset('img/costura.png') ?>" class="img-widget" width="50px" height="50px" alt="Order Usage">
                            </span>
                            <span class="widget-box__subtitle text-center">
                                <span>Máquina 4</span>
                            </span>
                            <span class="widget-box__counter text-center">
                                <span>000</span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row m-0">
            <div class="col col-6 col-sm-4 col-md-3 p-3 col-lg-5-12">
                <div class="widget-box cursor-pointer">
                    <a href="/hosting/secretariacac.com/order/order-usage" class="widget-box__link" target="">
                        <div class="widget-box__content">
                            <span class="widget-box__icon">
                                <img src="<?= asset('img/costura.png') ?>" width="50px" height="50px" alt="Order Usage">
                            </span>
                            <span class="widget-box__subtitle text-center">
                                <span>Máquina 5</span>
                            </span>
                            <span class="widget-box__counter text-center">
                                <span>000</span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-6 col-sm-4 col-md-3 p-3 col-lg-5-12">

            </div>
            <div class="col col-6 col-sm-4 col-md-3 p-3 col-lg-5-12">

            </div>
            <div class="col col-6 col-sm-4 col-md-3 p-3 col-lg-5-12">

            </div>
        </div>
    </div>
    <p><a class="btn btn-green" href="<?= $router->route("app.logoff"); ?>" title="Sair agora">SAIR AGORA :)</a></p>
</div>