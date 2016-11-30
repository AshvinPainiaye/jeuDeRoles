<?php


namespace Rpg;
require __DIR__ . '/vendor/autoload.php';

echo "<p>Le héros se fait un attaquer par un minion(afficher la vie avant l'attaque puis après)</p>";

$hero = new Hero();
$minion = new Minion();
$attack=$minion->attack($hero);

?>

<ul>
  <li>vie avant : <?php echo $hero->getLife() ?></li>
  <li>vie après attaque : <?php echo $attack['life'] ?></li>
</ul>
