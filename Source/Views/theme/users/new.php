<?php $v->layout("sidebar"); ?>

<?php $v->start("css"); ?>
<link href="<?= asset('css/message.css') ?>" rel="stylesheet">
<link href="<?= asset('css/form.css') ?>" rel="stylesheet">
<?php $v->end(); ?>


<div class="container">

    <form class="form" method="post" action="<?= $router->route("users.save"); ?>" enctype="multipart/form-data" autocomplete="off">
        <div class="login_form_callback">
            <?= flash(); ?>
        </div>
        <div class="card">
            <h5 class="card-header">Dados Pessoais</h5>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="">Nome:</label>
                        <input type="text" name="first_name" class="col form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="">Sobrenome:</label>
                        <input type="text" name="last_name" class="col form-control">
                    </div>
                </div>
            </div>
        </div>
        </br>
        <div class="card">
            <h5 class="card-header">Dados Funcionais</h5>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="">Matricula:</label>
                        <input type="text" name="matricula" class="col form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="">Cargo:</label>
                        <input type="text" name="cargo" class="col form-control">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <h5 class="card-header">Dados de Acesso</h5>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="">Nº de Cartão:</label>
                        <input type="text" name="cartao" class="col form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="">Outros:</label>
                        <input type="text" name="outros" class="col form-control">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Salvar
            </button>
           <a href="<?= site('app'); ?>" class="btn btn-dark">Voltar</a>
        </div>
    </form>

</div>

<p><a class="btn btn-green" href="<?= $router->route("app.logoff"); ?>" title="Sair agora">SAIR AGORA :)</a></p>
</div>

<?php $v->start("js"); ?>

<script src="<?= asset('js/form.js') ?>"></script>

<?php $v->end(); ?>