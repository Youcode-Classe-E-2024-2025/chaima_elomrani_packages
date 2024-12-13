<?php
$sql = "SELECT auteurs.name , auteurs.email FROM auteurs"; 
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $auteurs = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $auteurs = []; // Tableau vide par défaut si aucune donnée n'existe
}
