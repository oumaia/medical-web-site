<?php
//ouvrir une session
session_start();
//Récupérer le login et le mot de passe
$lo=$_POST['Email'];
$mo=$_POST['Password'];
//Etablir la connexion
$conn = mysqli_connect('localhost','root','','miniprojet');
if($conn->connect_error){
die('Problème de connexion'.$conn->connect_error);
}else{;
//Vérifier que le login et le mot de passe ne sont pas vide
if(isset($lo)&&(isset($mo))){
//Etablir la requête de sélection qui permet de récupérer les compteuser ayant
// le même login et mot de passe insérer dans le formulaire
$req=mysqli_query($conn, "SELECT * FROM utilisateur WHERE Email='$lo'
AND Password='$mo' ");
$num_ligne=mysqli_num_rows($req);//compter le nombre de ligne ayant
// rapport à la requête
var_dump($num_ligne);
if ($num_ligne >0 ) {
    
// Si le nombre est supérieur à 1 on va afficher la page bienvenu.php

$_SESSION['Email']=$lo;

header('Location: index.php');
// envoyer le nom du login vers la page bienvenu.php


} else
// sinon envoyer un message
{ echo "adresse mail ou mot de passe incorrectes !" ;}
}
}

?>