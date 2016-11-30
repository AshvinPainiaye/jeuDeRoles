<?php


namespace Rpg;
require __DIR__ . '/vendor/autoload.php';

echo "<p>Le héros récupère de l'armure puis se fait attaquer par un lieutenant minion (afficher la vie avant l'attaque puis après)</p>";

$hero = new Hero();
$lieutenant = new Lieutenant();
$hero->setArmor();
$attack=$lieutenant->attack($hero);
echo 'armur avant :' . $hero->getArmor() . 'armure après :' . $attack['armor'] . '</br>';
echo "vie avant :" .$hero->getLife()." vie après attaque :" .$attack['life'];
