<?php

namespace Source\Controllers;

use Source\Models\UserModel;
use Source\Models\SensorsModel;

class Users extends Controller
{
    /** @var UserModal   */
    protected $user;

    /** @var SensorModal   */
    protected $sensor;

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
        $this->sensor = (new UserModel())->find()->fetch(true);

        $head = $this->seo->optimize(
            "Bem vind@ {$this->user->Nome} | " . site("name"), //title
            site("desc"), //descrição
            $this->router->route("app.home"), //url
            routeImage("Home") //image
        )->render(); //transforma tudo em string

        echo $this->view->render("sensors/sensorRead", [
            "head" => $head,
            "sensores" => $this->sensor,
            "title" => "Sensors | " . SITE['name']
        ]);
    }

    public function create($data): void
    {
        $head = $this->seo->optimize(
            "Bem vind@ {$this->user->Nome} | " . site("name"), //title
            site("desc"), //descrição
            $this->router->route("app.home"), //url
            routeImage("Home") //image
        )->render(); //transforma tudo em string

        echo $this->view->render("users/new", [
            "head" => $head,
            "user" => $this->user,
            "title" => "Funcionários | " . SITE['name']
        ]);
    }

    public function test($data)
    {
        $data = json_decode(file_get_contents('php://input'), true);
     
        $email = filter_var($data["value"], FILTER_DEFAULT);
        $passwd = filter_var($data["name"], FILTER_DEFAULT);
      
        $this->logMsg($email);
        $this->logMsg($passwd);

        //  $data = json_decode(file_get_contents('php://input'), true);
        // $this->logMsg($data['value']);
        // $this->logMsg($data['name']);
        // $this->logMsg($data['id']);
     
    }


    public function save($data)
    {

        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
      
        //função abaixo verifica se tem algum vazio ou null na array
        // if (in_array("", $data)) {
        //     echo $this->ajaxResponse("message", [
        //         "type" => "error",
        //         "message" => "Preencha todos os campos para cadastrar"
        //     ]);
        //     return;
        // }

        $user = new UserModel();
        $user->first_name = $data["first_name"];
        $user->last_name = $data["last_name"];
        $user->cargo = $data["cargo"];
        $user->matricula = $data["matricula"];
        $user->cartao = $data["cartao"];
        $user->outros = $data["outros"];


        if (!$user->save()) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => $user->fail()->getMessage()
            ]);
            return;
        }

        //  $_SESSION["user"] = $user->id;
        echo $this->ajaxResponse("redirect", [
            "url" => $this->router->route("users.create")

        ]);
    }

    public function edit(): void
    {
    }


    public function delete()
    {
    }

    function logMsg($msg, $level = 'info', $file = 'main.log')
    {
        // variável que vai armazenar o nível do log (INFO, WARNING ou ERROR)
        $levelStr = '';

        // verifica o nível do log
        switch ($level) {
            case 'info':
                // nível de informação
                $levelStr = 'INFO';
                break;

            case 'warning':
                // nível de aviso
                $levelStr = 'WARNING';
                break;

            case 'error':
                // nível de erro
                $levelStr = 'ERROR';
                break;
        }

        // data atual
        $date = date('Y-m-d H:i:s');

        // formata a mensagem do log
        // 1o: data atual
        // 2o: nível da mensagem (INFO, WARNING ou ERROR)
        // 3o: a mensagem propriamente dita
        // 4o: uma quebra de linha
        $msg = sprintf("[%s] [%s]: %s%s", $date, $levelStr, $msg, PHP_EOL);

        // escreve o log no arquivo
        // é necessário usar FILE_APPEND para que a mensagem seja escrita no final do arquivo, preservando o conteúdo antigo do arquivo
        file_put_contents($file, $msg, FILE_APPEND);
    }
}
