<?php include_once "controllers/read_package.php"; ?>

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

    <div class="flex justify-center mt-10">
        <button id="addbtn">Ajouter</button>
    </div>

    <section id="card-container">

        <?php
        foreach ($packages as $row) {
            ?>

            <div id="card">

                <div class="card">
                    <h3><b>Informations sur le Package</b></h3>
                    <p><strong>Titre de Package : </strong><?= htmlspecialchars($row['titre']); ?></p>
                    <p><strong>description : </strong><?= htmlspecialchars($row['description']); ?></p>
                    <p><strong>Version :</strong>
                        <?= isset($row['version_number']) && $row['version_number'] !== null
                            ? htmlspecialchars($row['version_number'])
                            : 'Non disponible'; ?>
                    </p>

                </div>

            </div>
        <?php
        }
        ?>





    </section>

    <section>
        <div class="form-container" id="form-container">
            <h3>Ajouter un Package</h3>
            <button id="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </button>

            <form method="post" action="index.php?action=add_package">
                <div class="form-group">
                    <label for="package-title">Titre de Package :</label>
                    <input type="text" id="package-title" name="package-title" placeholder="Titre du package">
                </div>

                <div class="form-group">
                    <label for="description">Description :</label>
                    <textarea id="description" name="description" placeholder="Description du package"></textarea>
                </div>


                <div class="form-group">
                    <label for="version">version :</label>
                    <input id="version" name="version" placeholder="version du package"></input>
                </div>


                <button type="submit" class="btn-submit">Ajouter</button>
            </form>
        </div>

    </section>



    <script src="assets/main.js"></script>
</body>

</html>