<?php 

namespace App\classes;

use App\classes\Interfaces\WarriorsInterface;

class Knight extends Warriors 
{
    protected $lifeEnergy = 150;
    protected $force = 20;

    protected $name; 

    public function __construct($name)
    {
        $this->name = $name;
    }

}