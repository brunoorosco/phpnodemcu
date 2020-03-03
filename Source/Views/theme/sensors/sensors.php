<?php $v->layout("sidebar"); ?>

<?php $v->start("css"); ?>
<link href="<?= asset('css/message.css') ?>" rel="stylesheet">
<link href="<?= asset('css/form.css') ?>" rel="stylesheet">
<?php $v->end(); ?>

<div class="container">

    <form method="post" action="<?= $router->route("sensors.save"); ?>" enctype="multipart/form-data" autocomplete="off">
        <div class="login_form_callback">
            <?= flash(); ?>
        </div>
        <div class="card">
            <h5 class="card-header">Dados da Máquina</h5>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="">Nome da Máquina:</label>
                        <input type="text" name="sensor" class="col form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="">MAC Addrress:</label>
                        <input type="text" name="mac" class="col form-control">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Salvar
            </button>
        </div>
    </form>
</div>

<p><a class="btn btn-green" href="<?= $router->route("app.logoff"); ?>" title="Sair agora">SAIR AGORA :)</a></p>
</div>

<?php $v->start("js"); ?>

<script src="<?= asset('js/form.js') ?>"></script>

<?php $v->end(); ?>