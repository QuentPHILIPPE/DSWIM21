<?php
  $host = "dwarves.iut-fbleau.fr"; // serveur 
  $user = "philippe"; // compte
  $password ="quentinphpmyadmin" ; // le password du compte
  $bdd = "philippe";  // la base de données

  $db = new PDO(
         "mysql:host=$host;dbname=$bdd;charset=utf8",
         "$user",
         "$password"
      );

?>