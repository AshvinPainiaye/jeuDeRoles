<?php

namespace Jdr;
require __DIR__ . '/vendor/autoload.php';

$hero = new Hero();
echo 'Vie avant bonus : ' . $hero->getLife() . '<br> Vie après bonus : ' . $hero->setLife();





// Créer un jeu de rôles sous forme de texte : 
// Game Design
// ==========
// * Le héros a 200 points de vie
// * La vie du héros augmente de 50 quand il prend le bonus *"vie supplémentaire"*
// * Le héros fait 15 de dégâts
// * Le héros peut obtenir une amure +20 en recevant le bonus *"Armure"*
// * L'armure du héros se soustrait à la puissance d'attaque de l'ennemi. Le total des dégâts qui seront reçus par le héros est la résultante de la différence entre l'armure et la puissance d'attaque du héros.
// * Le héros perd de la vie à chaque fois qu'il se fait attaquer avec succès par un ennemi
// * Les ennemies peuvent attaquer le héros et lui faire des dégâts de valeurs différentes
// * Pour l'instant il y'a 3 types d'ennemies classer par la puissance des attaques : minion (dégâts 10), lieutenant minion(dégâts 30), chef minion (dégâts 100).
//
// Stories
// =======
// Afficher dans des fichiers différents les différents stories suivants :
//
// *  héros récupère un bonus de vie (afficher la vie avant le bonus puis après)
// *  Le héros récupère un bonus d'armure (afficher la quantité d'armure avant puis après)
// *  Le héros se fait un attaquer par un minion(afficher la vie avant l'attaque puis après)
// *  Le héros récupère de l'armure puis se fait attaquer par un lieutenant minion (afficher la vie avant l'attaque puis après)
// *  Le héros doit combattre le chef minion durant 5 tours. Avant chaque tour le héros a 1 chance sur 3 d'obtenir de l'armure et 1 chance sur 5 d'obtenir de la vie. A chaque round le héros attaque le chef minion puis le chef minion attaque le héros (Afficher pour chaques round: la valeur d'armure et la quantité de vie avant chaque attaque)
//
// Contraintes
// =========
// * Utiliser des classes ! pas de fonctions !
// * Utiliser composer pour mettre en place l'autoloading
// * Les seuls tuto que vous pouvez utiliser c'est pour mettre en place composer et autoloading
//
// Bonus
// =====
// * Rendre le jeu intéractif
// * Sauvegarder le résultat des combats en base de données












 ?>
