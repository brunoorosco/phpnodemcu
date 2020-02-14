<?php

namespace Source\Controllers;

use Source\Models\UserModel;

class Auth extends Controller
{
    public function __construct($router)
    {
        parent::__construct($router);
    }
    public function login($data): void
    {
        $email = filter_var($data["user"], FILTER_DEFAULT);
        $passwd = filter_var($data["passwd"], FILTER_DEFAULT);
     
        if (!$email || !$passwd) {
            echo $this->ajaxResponse("message", [
                "type" => "alert",
                "message" => "Informe seu e-mail e senha para logar"
            ]);
            return;
        }

        $user = (new UserModel())->find("email = :e", "e={$email}")->fetch(false);
        //$passwd = md5($passwd);
        // if (!$user ||  $passwd != $user->Senha) {
         if (!$user || !password_verify($passwd, $user->passwd)) {
            echo $this->ajaxResponse("message", [
                "type" => "alert",
                "message" => "E-mail ou senha não conferem!"
            ]);
            return;
        }

        $_SESSION["user"] = $user->id;
        $_SESSION["userName"] = $user->first_name;
        //$_SESSION["userJob"] = $user->Codigo;

        echo $this->ajaxResponse("redirect",["url" => $this->router->route("app.home")]);
    }

    public function register($data)
    {
        var_dump($data);
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        if (in_array("", $data)) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => "Preencha todos os campos para cadastrar-se"
            ]);
            return;
        }

        $user = new UserModel();
        $user->Nome = $data["first_name"];
        $user->Email = $data["email"];
        $user->Senha = password_hash($data["passwd"], PASSWORD_DEFAULT);

        if (!$user->save()) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => $user->fail()->getMessage()
            ]);
            return;
        }

        $_SESSION["user"] = $user->id;
        echo $this->ajaxResponse("redirect", [
            "url" => $this->router->route("app.home")
        ]);
    }
}
