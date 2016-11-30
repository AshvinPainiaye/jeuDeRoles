<?php

namespace Rpg;
require __DIR__ . '/vendor/autoload.php';

echo "<p>Le héros doit combattre le chef minion durant 5 tours. Avant chaque tour le héros a 1 chance sur 3 d'obtenir de l'armure et 1 chance sur 5 d'obtenir de la vie. A chaque round le héros attaque le chef minion puis le chef minion attaque le héros (Afficher pour chaques round: la valeur d'armure et la quantité de vie avant chaque attaque)</p>";

$hero = new Hero();
$chef = new Chef();



for ($i=1; $i <= 5; $i++) {


  $luckArmor = 2 ;
  $randomArmor = rand(1,3);
  if ($randomArmor == $luckArmor) {
    $hero->setArmor();
  } else{
    $hero->getArmor();
  }

  $luckLife = 1 ;
  $randomLife = rand(1,5);
  if ($randomLife == $luckLife) {
    $hero->setLife();
  }else{
    $hero->getLife();
  }



  $attackHero = $hero->attack($chef);
  $attackEnnemy = $chef->attack($hero);


  $heroLifeBefore = $hero->getLife();
  $heroLifeAfter = $attackEnnemy['life'];

  $chefLifeBefore = $chef->getLife();
  $chefLifeAfter = $attackHero['life'];

  ?>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>Tour <?php echo $i;?></th>
        <th>Vie avant</th>
        <th>Vie après</th>
        <th>Armure Avant</th>
        <th>Armure après</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>Heros</td>
        <td><?php echo $heroLifeBefore;?></td>
        <td><?php echo $heroLifeAfter ;?></td>
        <td><?php echo $hero->getArmor() ;?></td>
        <td><?php echo $attackEnnemy['armor'] ;?></td>
      </tr>
      <tr class="danger">
        <td>Chef-Minion</td>
        <td><?php echo $chefLifeBefore?></td>
        <td><?php echo $chefLifeAfter?></td>
        <td>Aucune</td>
        <td>Aucune</td>
      </tr>
      <tr>
      </tr>
    </tbody>
  </table>

  <?php

  $heroKeepLife = $hero->addLife($heroLifeAfter);
  $chefKeepLife = $chef->addLife($chefLifeAfter);


  if ($heroLifeAfter <= 0 && $chefLifeAfter <= 0) { ?>
    <p class="text-center"><strong>Hero et chef sont tout les deux mort au tour numéro <?php echo $i; ?></strong></p>
    <?php die();
  } else if ($heroLifeAfter <= 0) { ?>
    <p class="text-center"><strong>Hero a perdu au tour numéro <?php echo $i; ?></strong></p>
    <?php die();
  } else if ($chefLifeAfter <= 0) { ?>
    <p class="text-center"><strong>Chef a perdu au tour numéro <?php echo $i; ?></strong></p>
    <?php die();
  }

}

?>
