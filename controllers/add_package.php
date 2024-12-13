<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titrePackage = $_POST["package-title"];
    $description = $_POST["description"];
    $version = $_POST["version"];
    $name = $_POST["autheur_name"];
    
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT name, id FROM auteurs WHERE name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 0) {
        echo "No such author found";
        die();
    }
    
    $row = $result->fetch_assoc();
    $auteur_id = $row['id'];

    // Insert into packages table
    $stmt = $conn->prepare("INSERT INTO packages (titre, description, id_auteurs) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $titrePackage, $description, $auteur_id);
    $stmt->execute();

    // Retrieve last inserted package ID
    $package_id = $conn->insert_id;

    // Insert into versions table
    $stmt = $conn->prepare("INSERT INTO versions (version_number, packages_id) VALUES (?, ?)");
    $stmt->bind_param("si", $version, $package_id);
    $stmt->execute();

    echo "Auteur and package added successfully! 🎉";
}

include_once "views/package.php";
die();
