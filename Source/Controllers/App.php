<?php

namespace Source\Controllers;

use Source\Models\UserModel;

class App extends Controller
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

    public function home(): void
    {
         $head = $this->seo->optimize(
            "Bem vind@ {$this->user->Nome} | ". site("name"), //title
            site("desc"), //descrição
            $this->router->route("app.home"), //url
            routeImage("Home") //image
        )->render(); //transforma tudo em string

        echo $this->view->render("dashboard", [
             "head" => $head ,
             "user" => $this->user,
             "title" => "DashBoard"
        ]);
    }


    public function logoff()
    {
        unset($_SESSION['user']);

        flash("info", "Você saiu com sucesso, volte logo {$this->user->Nome}");

        $this->router->redirect("web.login");
    }
}
