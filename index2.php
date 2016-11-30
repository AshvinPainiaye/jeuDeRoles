<?php

namespace Rpg;
require __DIR__ . '/vendor/autoload.php';

echo '<p>Le héros récupère un bonus d\'armure (afficher la quantité d\'armure avant puis après)</p>';

$hero = new Hero();

?>


<ul>
  <li>Armure avant bonus: <?php echo $hero->getArmor() ?></li>
  <li>Armure après bonus: <?php echo $hero->setArmor() ?></li>
</ul>
