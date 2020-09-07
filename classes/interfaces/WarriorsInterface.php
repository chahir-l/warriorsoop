<?php 

namespace App\Interfaces;

interface WarriorsInterface{

    public function attack(WarriorsInterface $warriors);

    public function defense(WarriorsInterface $warriors);

}