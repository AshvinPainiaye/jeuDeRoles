<?php

namespace Rpg;


class Character
{
  private $life;
  private $armor;
  private $damage;
  private $name;


  public function attack($target)
  {

    $stats = array();

    $lifeTarget = $target->getLife();

    if (!method_exists($target, 'getArmor')) {
      $armor = 0;
    }else{
      $armor = $target->getArmor();
    }

    if ($armor == 0) {
      $stats['life'] = $lifeTarget - $this->getDamage();
      $stats['armor'] = 0;
      if ($stats['life'] <= 0) {
        $stats['life'] = 'Mort';
      }
    } else{

      $armorFinal = $armor - $this->getDamage();

      if ($armorFinal <= 0) {
        $stats['armor'] = 0;
        $stats['life'] = $lifeTarget + $armorFinal;

        if ($stats['life'] <= 0) {
          $stats['life'] = 'Mort';
        }

      } else{
        $stats['armor'] = $armorFinal;
        $stats['life'] = $lifeTarget;

        if ($stats['life'] <= 0) {
          $stats['life'] = 'Mort';
        }
      }

    }

    return $stats;
  }


  public function death()
  {
    return $this->$life <= 0;
    echo "mort";
  }

}
