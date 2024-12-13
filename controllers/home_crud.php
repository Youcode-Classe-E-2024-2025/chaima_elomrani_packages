<?php
$sql = "SELECT packages.titre, packages.description, versions.version_number,auteurs.name , auteurs.email FROM packages 
       LEFT JOIN versions ON versions.packages_id = packages.id JOIN auteurs ON auteurs.id = packages.id_auteurs";


$result = $conn->query($sql);


$packages = $result->fetch_all(MYSQLI_ASSOC);
