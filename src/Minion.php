<?php

namespace Rpg;

class Minion extends Character
{

    private $life;
    private $damage;

    function __construct()
    {
        $this->life = 20;
        $this->damage = 10;
    }

    public function getLife()
    {
        return $this->life;
    }

    public function getDamage()
    {
        return $this->damage;
    }

}
