<?php

$conn = mysqli_connect('localhost','root','','miniprojet');

if(isset($_POST['ajout'])){

   $name = $_POST['Name'];
   $date = date(format:'Y-m-d');
   $sexe = $_POST['Sexe'];
   $email = $_POST['Email'];
   $birthdte = $_POST['birthdate'];
   $password = $_POST['Password'];


   $insert = "INSERT INTO utilisateur VALUES ('','$name',$date,'$sexe','$email','$birthdte','$password')";

   mysqli_query($conn, $insert);

   header('location:index.php');

}

?>
