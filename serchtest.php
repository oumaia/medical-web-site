<?php 
// Récupération du département sélectionné depuis le formulaire
$departement = $_POST['departement'];

// Création de la requête SQL
$query = "SELECT * FROM medecin WHERE departement = '$departement'";

// Exécution de la requête
$result = $mysqli->query($query);

if ($result) {
    // Vérification s'il y a des résultats
    if ($result->num_rows > 0) {
        // Parcours des résultats
        while ($row = $result->fetch_assoc()) {
            // Affichage des informations du médecin (vous pouvez ajuster l'affichage selon votre structure HTML)
            echo "Nom : " . $row['libelle'] . "<br>";
            echo "Spécialité : " . $row['email'] . "<br>";
            echo "Département : " . $row['idcat'] . "<br>";
            echo "<br>";
        } } else {
            echo "Aucun résultat trouvé.";
        }
        $result->free();
    } else {
        echo "Erreur lors de l'exécution de la requête : " . $mysqli->error;
    }
    
    // Fermeture de la connexion
    $mysqli->close();
    ?>