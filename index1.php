<?php

namespace Rpg;
require __DIR__ . '/vendor/autoload.php';

echo '<p>héros récupère un bonus de vie (afficher la vie avant le bonus puis après)</p>';

$hero = new Hero();

?>

<ul>
  <li>vie avant bonus: <?php echo $hero->getLife() ?></li>
  <li>vie après bonus: <?php echo $hero->setLife() ?></li>
</ul>
