<?php $v->layout("theme"); ?>
<?php $v->start("css"); ?>
<link href="<?= asset('css/login.css') ?>" rel="stylesheet">
<link href="<?= asset('css/form.css') ?>" rel="stylesheet">

<?php $v->end(); ?>

<div class="main_content_box">
    <div id="fundo_form" class="login">
        <form class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4" action="<?= $router->route("auth.register"); ?>" method="post" autocomplete="off">
            <div class="login_form_callback">
                <?= flash(); ?>
            </div>

            <div class="label_2">
                <label>
                    <span class="field">Nome:</span>
                    <input class="form-control" value="<?= $user->first_name; ?>" type="text" name="first_name" placeholder="Primeiro nome:" />
                </label>

                <label>
                    <span class="field">Sobrenome:</span>
                    <input class="form-control" value="<?= $user->last_name; ?>" type="text" name="last_name" placeholder="Último nome:" />
                </label>
            </div>

            <label>
                <span class="field">E-mail:</span>
                <input class="form-control" value="<?= $user->email; ?>" type="email" name="email" placeholder="Informe seu e-mail:" />
            </label>

            <label>
                <span class="field">Senha:</span>
                <input class="form-control" autocomplete="" type="password" name="passwd" placeholder="Informe sua senha:" />
            </label>

            <div class="form_actions">
                <button class="btn btn-success">Criar Conta</button>
            </div>
        </form>

        <div class="form_register_action">
            <p>Já tem conta?</p>
            <a href="<?= $router->route("web.login"); ?>" class="btn btn-primary">Fazer Login</a>
        </div>
    </div>
</div>

<?php $v->start("scripts"); ?>
<script src="<?= asset("js/form.js"); ?>"></script>
<?php $v->end(); ?>