<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titrePackage = $_POST["package-title"];
    $description = $_POST["description"];
    $version =$_POST["version"];

    $packagesTable = "INSERT INTO packages (titre, description) VALUES ('$titrePackage', '$description')";
    $conn->query($packagesTable);

    $versionsTable ="INSERT INTO versions (version_number) VALUES ('$version') ";
    $conn->query($versionsTable);
    
    // echo "Auteur ajouté avec succès ! 🎉";
}

include_once "views/package.php";

die();