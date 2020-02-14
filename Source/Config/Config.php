<?php

define(
    "SITE",
    [
        "name" => "#IST",
        "desc" => "Instituto Senai de Tecnologia Têxtil",
        "domain" => "localhost/nodeMcu",
        //"domain" => "slab.sp.senai.br/",
        "locale" => "pt-br",
        "root" => "http://localhost/nodeMcu",
        //"root" => "https://slab.sp.senai.br",
        "theme" => "theme/sidebar"
    ]
);


if ($_SERVER["SERVER_NAME"] == "localhost") {
    require __DIR__ . "/Minify.php";
}


define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost" ,
    "port" => "3306",
    "dbname" => "sistemalogin",
    "username" => "brunoorosco",
    "passwd" => "123456",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/**
 * SOCIAL
 */
define("SOCIAL", [
    "facebook_page" => "",
    "facebook_author" => "",
    "facebook_appId" => "",
    "twitter_creater" => "",
    "twitter_site" => ""
]);

/**
 * MAIL CONNECT
 */
define("MAIL", []);
