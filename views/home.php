<?php include_once "controllers/home_crud.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="">
    <title>JS packages</title>
</head>

<body>
    <header>
        <h1 id="title">Gestions de JS packages</h1>
        <div id="navbtns">
            <button><b><a href="index.php?page=home">Home</a></b></button>
            <button><b><a href="index.php?page=author">Auteurs</a></b></button>
            <button><b><a href="index.php?page=package">Packages</a></b></button>
        </div>
    </header>

    <section id="card-container">

<?php
foreach ($packages as $row) {
    ?>

    <div id="card">

        <div class="card">
            <h3><b> Package Details </b></h3>
            <p><strong>Auteur: </strong><?= htmlspecialchars($row['name']); ?></p>
            <p><strong>Email auteur : </strong><?= htmlspecialchars($row['email']); ?></p>
            <p><strong>Titre de Package : </strong><?= htmlspecialchars($row['titre']); ?></p>
            <p><strong>description : </strong><?= htmlspecialchars($row['description']); ?></p>
            <p><strong>Version :</strong>
                <?= isset($row['version_number']) && $row['version_number'] !== null
                    ? htmlspecialchars($row['version_number'])
                    : 'Non disponible'; ?>
            </p>
            <div class="buttons">
                    <button class="btn editbtn">Modifier</button>
                    <button class="btn suppbtn">Supprimer</button>
                </div>

        </div>

    </div>
<?php
}
?>





</section>
s/main.js"></script>
</body>

</html>