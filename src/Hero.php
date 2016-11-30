<?php

namespace Rpg;

class Hero extends Character
{

    private $life;
    private $armor;
    private $damage;

    function __construct()
    {
        $this->life = 200;
        $this->armor = 0;
        $this->damage = 15;
    }

    public function getLife()
    {
        return $this->life;
    }

    public function setLife()
    {
        return $this->life + 50;
    }

    public function addLife($life)
    {
        return $this->life = $life;
    }

    public function getArmor()
    {
        return $this->armor;
    }

    public function setArmor()
    {
        return $this->armor += 20;
    }

    public function getDamage()
    {
        return $this->damage;
    }

    public function setDamage()
    {
        return $this->damage;
    }

}
