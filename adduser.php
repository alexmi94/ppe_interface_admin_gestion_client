<?php
$title = "Crée un utilisateur";
include_once("./src/head.inc.php");
include_once("./src/ddb.inc.php");
include_once("./src/client.inc.php");

if(isset($_POST["send"])){
    $client = new client($_POST["nom"], $_POST["prenom"], $_POST["age"], $_POST["mail"]);
    $erreur = $client->add_ddb();
}

?>
<body>
<main>
    <section>
        <h1>Ajouter un utilisateur</h1>
        <?php
        if(isset($erreur)){
            print $erreur;
        }
        ?>
        <div class="form" id="form" role="region">
            <form action="" method="post">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" aria-required="true" autofocus>
                    <label for="prenom">Prenom :</label>
                    <input type="text" name="prenom" id="prenom" aria-required="true">
                    <label for="age">Age :</label>
                    <input type="text" name="age" id="age" aria-required="true">
                    <label for="mail">Adresse mail :</label>
                    <input type="text" name="mail" id="mail" aria-required="true">
                    <button type="submit" name="send">Créer <img src="./asset/edit.svg" alt="Créer"></button>
            </form>
        </div>
    </section>
</main>
</body>
</html>