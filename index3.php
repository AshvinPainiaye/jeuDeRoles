<?php


namespace Rpg;
require __DIR__ . '/vendor/autoload.php';

echo "<p>Le héros se fait un attaquer par un minion(afficher la vie avant l'attaque puis après)</p>";

$hero = new Hero();
$minion = new Minion();
$attack=$minion->attack($hero);

?>

<ul>
  <li>Vie avant : <?php echo $hero->getLife() ?></li>
  <li>Vie après attaque : <?php echo $attack['life'] ?></li>
</ul>
