<?php

namespace Source\Controllers;

use Source\Models\UserModel;
use Source\models\SensorsModel;

class Sensors extends Controller
{
    /** @var UserModal   */
    protected $user;

    public function __construct($router)
    {
        parent::__construct($router);
        if (empty($_SESSION["user"]) || !$this->user = (new UserModel())->findById($_SESSION["user"])) {
            unset($_SESSION["user"]);

            flash("error", "Acesso negado!");
            $this->router->redirect("web.login");
        }
    }

    public function read($data): void
    {
        $head = $this->seo->optimize(
            "Bem vind@ {$this->user->Nome} | " . site("name"), //title
            site("desc"), //descrição
            $this->router->route("app.home"), //url
            routeImage("Home") //image
        )->render(); //transforma tudo em string

        echo $this->view->render("dashboard", [
            "head" => $head,
            "user" => $this->user,
            "title" => "DashBoard"
        ]);
    }
    public function create($data): void
    {
        if(empty($data)){
            
        }
    }

    public function edit(): void
    {
    }


    public function delete()
    {
    }
}
