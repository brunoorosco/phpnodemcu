<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Exception;

class ProductionModel extends DataLayer
{
    public function __construct()
    {
        parent::__construct("production", ["maq", "user", "quant"], "id", true);
    }
}
