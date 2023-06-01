<?php
require_once 'include/database.php';
if (isset($_POST['appoint'])) {
    $name = $_POST['patient_name'];
    $email = $_POST['patient_mail'];
    $iddoc = $_POST['id_doctor'];
    $iddepart = $_POST['id_departement']; 
    $date = date('Y-m-d');
    $time =time();
    $insert="INSERT INTO appointment VALUES ('','$name','$email','$iddoc','$iddepart','$date','$time')";
var_dump($insert);
    mysqli_query($mysqli, $insert);
    //$stmt = $mysqli->prepare('INSERT INTO appointement VALUES(null,?,?,?,?,?,?,?)');
  //  $stmt->bind_param('', $name, $email, $iddoc, $iddepart, $date, $time);

   /*  $stmt->execute(); */

    // Redirection
    header('location:index.php');
/*     exit; */

   /*  $stmt->close();
    $mysqli->close(); */
     } ?>
 
