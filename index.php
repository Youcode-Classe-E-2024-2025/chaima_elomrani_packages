<!-- structure de la page -->

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
        <button><b><a href="userpage.php">Home</a></b></button>
        <button><b>Auteurs</b></button> 
        <button><b>Packages</b></button>
        <button><b><a href="index.php">administration</a></b></button>
      </div>
    </header>

    <div class="flex justify-center mt-10">
        <button id="addbtn">Ajouter</button>
    </div>

    <section id="card-container">
        <div id="card">
            <div class="card">
                <h3><b>Informations sur le Package</b></h3>
                <p><strong>Auteur :</strong> Nom de l'Auteur</p>
                <p><strong>Titre de Package :</strong> Titre du Package</p>
                <p><strong>Version :</strong> 1.0.0</p>
                <div class="buttons">
                    <button class="btn editbtn">Modifier</button>
                    <button class="btn suppbtn">Supprimer</button>
                </div>
            </div>

        </div>

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

        <form method="post" action="./assets/insertion.php">
            <div class="form-group">
                <label for="auteur">Auteur :</label>
                <input type="text" id="auteur" name="auteur" placeholder="Nom de l'auteur" required>
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Email de l'auteur" required>
            </div>

            <div class="form-group">
                <label for="package-title">Titre de Package :</label>
                <input type="text" id="package-title" name="package-title" placeholder="Titre du package" required>
            </div>

            <div class="form-group">
                <label for="description">Description :</label>
                <textarea id="description" name="description" placeholder="Description du package" required></textarea>
            </div>

            <div class="form-group">
                <label for="version">Version :</label>
                <input type="text" id="version" name="version" placeholder="Version (ex: 1.0.0)" required>
            </div>

            <div class="form-group">
                <label for="release-date">Date de Réalisation :</label>
                <input type="date" id="release-date" name="release-date" required>
            </div>

            <button type="submit" class="btn-submit">Ajouter</button>
        </form>
    </div>
</section>



    <script src="/assets/main.js"></script>
</body>

</html>