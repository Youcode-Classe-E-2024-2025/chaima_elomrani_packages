<!-- fonctions de manipulation des packages , auteurs , version, et collaboration -->
<?php

    

// code de tableau li ghankhedmo bih
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $auteur = $_POST["auteur"];
    $email = $_POST["email"];
    $titrePackage = $_POST["package-title"];
    $description = $_POST["description"];
    $version_number = $_POST["version"];

    echo $auteur ,$email , $titrePackage;
   
    include'db.php';
    
    $auteurTable ="INSERT INTO auteurs(name,email) VALUES ('$auteur','$email') ";
    $packagesTable = "INSERT INTO packages (titre, description) VALUES ('$titrePackage', '$description')";
    $versionTable = "INSERT INTO versions (version_number) VALUES ('$version_number')";


    $conn-> query($auteurTable);
     
    $conn-> query($packagesTable);
    
    $conn-> query($versionTable);
   
   }
   echo "Auteur ajouté avec succès ! 🎉";
  


?>