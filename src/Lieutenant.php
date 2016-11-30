<?php

namespace Rpg;


class Lieutenant extends Character
{
  private $life;
  private $damage;

  function __construct()
  {
    $this->life = 40;
    $this->damage = 30;

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
