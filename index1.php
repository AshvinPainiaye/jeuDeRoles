<?php

namespace Rpg;
require __DIR__ . '/vendor/autoload.php';

echo '<p>héros récupère un bonus de vie (afficher la vie avant le bonus puis après)</p>';

$hero = new Hero();
echo 'Vie avant bonus : ' . $hero->getLife() . '<br> Vie après bonus : ' . $hero->setLife();
