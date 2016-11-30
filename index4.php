<?php


namespace Rpg;
require __DIR__ . '/vendor/autoload.php';

echo "<p>Le héros récupère de l'armure puis se fait attaquer par un lieutenant minion (afficher la vie avant l'attaque puis après)</p>";

$hero = new Hero();
$lieutenant = new Lieutenant();
$hero->setArmor();
$attack=$lieutenant->attack($hero);
?>

<ul>
  <li>Armure avant : <?php echo $hero->getArmor() ?></li>
  <li>Armure après : <?php echo $attack['armor'] ?></li>
</ul>

<ul>
  <li>Vie avant : <?php echo $hero->getLife() ?></li>
  <li>Vie après attaque : <?php echo $attack['life'] ?></li>
</ul>
