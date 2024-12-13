<?php
// dd($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $auteur = $_POST["name"];
    $email = $_POST["email"];

    $sql = "INSERT INTO auteurs (name, email) VALUES ('$auteur', '$email')";
    $stmt = $conn->prepare($sql);
    // $stmt->bind_param("ss", $auteur, $email);
    $stmt->execute();

    // echo "Auteur ajouté avec succès ! 🎉";
    $stmt->close();
    
    
}
include_once "views/author.php";

die();

