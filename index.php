<?php
ob_start();
session_start();

require __DIR__ . "/vendor/autoload.php";
use  CoffeeCode\Router\Router;

$route = new Router(site());
$route->namespace("Source\Controllers");

/**
 * web
 */

$route->group(null);
$route->get("/", "Web:login","web.login");
$route->get("/cadastrar", "Web:register","web.register");
$route->get("/recuperar", "Web:forget", "web.forget");
$route->get("/senha/{email}/{forget}", "Web:reset", "web.reset");
// /**
//  * Auth
//  */
$route->group(null);
$route->post("/login", "Auth:login","auth.login");
$route->post("/register", "Auth:register","auth.register");
$route->post("/forget", "Auth:forget", "auth.forget");
$route->post("/reset", "Auth:reset", "auth.reset");
// /**
//  * DashBoard
//  */
$route->group("/app");
$route->get("/", "App:home","app.home");
$route->get("/logoff", "App:logoff","app.logoff");

// /**
//  * Sensors // GET
//  */
$route->group("/sensors");
$route->get("/", "Sensors:read","sensors.read");
$route->get("/new", "Sensors:create","sensors.create");

// /**
//  * Sensors // metodo POST, PUT, DELETE 
//  */
$route->group("/sensors");
$route->post("/", "Sensors:test","sensors.test");
$route->post("/new", "Sensors:save","sensors.save");
$route->put("/{id}", "Sensors:edit","sensors.edit");
$route->delete("/{id}", "Sensors:delete","sensors.delete");


/**
 * ERROR
 */
$route->group("ops");
$route->get("/{errcode}", "Web:error");

/**
 * PROCESS
 */
$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();