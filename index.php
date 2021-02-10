<?php


// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon
// TODO attention, certaines erreurs volontaires ont pu être glissées, a vous de vérifier ! Ce message en lui même est peut être un piège :-)
require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";
require "classes/Sorcier.php";

// Creation d'une instance de la classe personnage
$humain = new Personnage();
$humain->setNom("Votre nom");

// Creation d'une instance de la classe dragon
$dragon = new Dragon();
$dragon->setNom("");

$princess = new Princesse();
$sorcer = new Sorcier();

$princess->setNom("Leia");
echo $princess->getNom()." : ".$princess->getVie()." vies, "."position x : ".$princess->x." / position y : ".$princess->y." - saved : ".$princess->getSaved();

echo "<br>";

$sorcer->setNom("Gandalf");
echo $sorcer->getNom()." : ".$sorcer->getVie()." vies, "."position x : ".$sorcer->x." / position y : ".$sorcer->y;
