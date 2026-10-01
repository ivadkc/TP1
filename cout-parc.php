<?php
$nombreServeurs = 6;
$coutMensuelUnitaire = 24.90;
$nombreMois = 12;

$coutmensuel = $coutMensuelUnitaire * $nombreServeurs;
$coutanuel = $coutmensuel * 12;
echo "Le cout mensuel est " . $coutmensuel . "<br>";
echo "Le cout annuel est " . $coutanuel. "<br>";
echo "cout moyen par serveur " . $coutMensuelUnitaire . "<br>";