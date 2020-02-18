<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Exception;

class SensorsModel extends DataLayer
{
    public function __construct()
    {
        parent::__construct("sensors",["mac","name"],"id", true);
    }

    
    protected function validaMaquina()//: bool
    {
        // if (empty($this->email) || !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        //     $this->fail = new Exception("Informe um e-mail válido");
        //     return false;
        // }

        // $userByEmail = null;

        // if (!$this->id) {
        //     $userByEmail = $this->find("Email = :email", "email={$this->email}")->count();
        // } else {
        //     $userByEmail = $this->find("Email = :email AND Codigo != :id", "email={$this->email} & id={$this->id}")->count();
        // }

        // if ($userByEmail) {
        //     $this->fail = new Exception("O e-mail informado já esta em uso");
        // }
        // return true;
    }

}
