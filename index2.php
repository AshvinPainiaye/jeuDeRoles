<?php

namespace Rpg;
require __DIR__ . '/vendor/autoload.php';

echo '<p>Le héros récupère un bonus d\'armure (afficher la quantité d\'armure avant puis après)</p>';

$hero = new Hero();
echo 'Armure avant bonus : ' . $hero->getArmor() . '<br> Armure après bonus : ' . $hero->setArmor();
