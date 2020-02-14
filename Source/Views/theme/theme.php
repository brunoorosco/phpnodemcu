<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title><?= $title; ?></title>
  
    <link href="<?= asset('bootstrap-4.1.3/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= asset('font-awesome/css/font-awesome.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= asset('css/style.css')?>"/>
    <?= $v->section("css"); ?>
  <title><?= $v->e($title) ?></title>
</head>

<body class="login">
   
    <main class="main_content">
        <?= $v->section("content"); ?>
    </main>
    <footer class="main_footer">
        <?= SITE['name'] ?> - Todos os Direitos Reservados

    </footer>

    <script src="<?= asset('js/jquery.js')?>"></script>
    <script src="<?= asset('js/jquery-ui.js')?>"></script>
    <script src="<?= asset('bootstrap-4.1.3/js/bootstrap.min.js')?>"></script>
    <?= $v->section("scripts"); ?>
</body>

</html>