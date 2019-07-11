<?php
// Fichier de définition de l'environnement d'éxécution de l'application

// Dans le cas ou la variable $dev_domains n'est pas défini ( dans le fichier config.php)
//On initialise la variable $dev_domains avec un tableau vide
if(isset($dev_domains))
{
    $dev_domains =[];
}