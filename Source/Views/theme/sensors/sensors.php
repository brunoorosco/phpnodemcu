<?php $v->layout("sidebar"); ?>

<?php $v->start("css"); ?>
<link href="<?= asset('css/message.css') ?>" rel="stylesheet">


<?php $v->end(); ?>

<div class="page">
    <div class="container">
        <div class="row m-0">

            <form id="formSensors" method="post" action="<?= $router->route("sensors.save"); ?>" enctype="multipart/form-data" autocomplete="off">
                <div class="login_form_callback">
                    <?= flash(); ?>
                </div>
                <div class="form-group">
                    <label class="">Nome da Máquina<input type="text" name="sensor" class="form-control"></label>
                    <label class="">Usuário<input type="text" name="mac" class="form-control"></label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
<p><a class="btn btn-green" href="<?= $router->route("app.logoff"); ?>" title="Sair agora">SAIR AGORA :)</a></p>
</div>

<?php $v->start("js"); ?>

<script src="<?= asset('js/form.js') ?>"></script>

<?php $v->end(); ?>