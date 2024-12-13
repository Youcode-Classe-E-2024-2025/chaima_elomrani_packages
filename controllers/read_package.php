<?php
$sql = "SELECT packages.titre, packages.description, versions.version_number FROM packages
LEFT JOIN versions ON versions.packages_id = packages.id";



$result = $conn->query($sql);

$packages = $result->fetch_all(MYSQLI_ASSOC);
