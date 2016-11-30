<?php

namespace Rpg;

class Chef extends Character
{

    private $life;
    private $damage;

    function __construct()
    {
        $this->life = 60;
        $this->damage = 100;
    }

    public function getLife()
    {
        return $this->life;
    }

    public function getDamage()
    {
        return $this->damage;
    }

    public function addLife($life)
    {
        return $this->life = $life;
    }

}
