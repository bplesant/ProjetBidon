<?php
require_once "./function/classAutoLoader.php";

spl_autoload_register( 'classAutoLoader');



$gerard = new Voiture("Jaune", 50);

$gerard->marque = "Renault Fuego";
$gerard->afficherMessageALaCon();

$gerard->peindreVoiture("Vert pomme");

$gerard->vitesse = 30;
$gerard->masse = 1075;

//echo $gerard->calculerEnergieCinetique() . " Joules<br />";

//echo $gerard->calculerKmRestant(30, 6) . " Km restants<br />";

$caisse = new Coupee("rouge", "50");
$caisse->setMessage("Forever forever");
echo $caisse->getMessage();

Bidon::coucou();
