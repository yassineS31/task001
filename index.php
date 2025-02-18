<?php
include './Abstractpersonnage.php';
include './Interface/InterfaceArme.php';
// personnages:
include './Model/Guerrier.php';
include './Model/Mage.php';
include './Model/Voleur.php';
// Armes: 
include './arme/Epee.php';
include './arme/Arc.php';
include './arme/Projectile.php';



// Guerrier:
$guerrier = new Guerrier('Guerrieros',new Epee(10,"sabre"), 'type guerrier');
$guerrier->afficher();
echo '<br><br>';
$guerrier->attaquer();
echo '<br><br>';
echo $guerrier->getArme()->attaquer();
echo '<br><br>';
echo "__________________________________________________________";
// Voleur: 
$voleur = new Voleur('Le voleur de poule',new Arc(10,'Arc super flex'),'voleur nocturne');
echo '<br><br>';
$voleur->afficher();
echo '<br><br>';
$voleur->attaquer();
echo '<br><br>';
echo $voleur->getArme()->attaquer();
echo '<br><br>';
echo "__________________________________________________________";




