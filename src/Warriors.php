<?php 
namespace App\classes;

use App\classes\Interfaces\WarriorsInterface;

abstract class Warriors implements WarriorsInterface 
{
 
    public function attack(WarriorsInterface $warriors)
    {
        $warriors->defense($this);
    }

    public function defense(WarriorsInterface $warriors)
    {
        $this->lifeEnergy -= $warriors->force;
    }
}
