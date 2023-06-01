<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération de la catégorie choisie depuis le formulaire
    $categorie = $_POST['categorie'];

    var_dump($categorie); // Débogage

    // Définition des correspondances entre catégories et pages de destination
    $correspondances = [
       "1"  => "Ophthalmologiste.php",
       "2"  => "Generalist.php",
        "3" => "Dermatologist.php",
        "4"=> "Dentist.php"
    ];

    var_dump($correspondances); // Débogage

    // Vérification si la catégorie choisie est une correspondance valide
    if ( isset($correspondances["$categorie"])) {
        // Redirection vers la page de destination
        $pageDestination = $correspondances[$categorie];
        echo "<script>window.location.href='$pageDestination';</script>";
        exit;
    } else {
        echo "Catégorie invalide.";
    }
}
?>