<?php
$title = "Modification";
include_once("./src/head.inc.php");
include_once("./src/ddb.inc.php");
include_once("./src/client.inc.php");

if(isset($_POST["add"])){
    $client = new client($_POST["nom"], $_POST["prenom"], $_POST["age"], $_POST["mail"]);
    $client->setIdClient($_GET["id"]);
    $erreur = $client->update_ddb();
}


if(isset($_POST["remove"])){
    $client = new client($_POST["nom"], $_POST["prenom"], $_POST["age"], $_POST["mail"]);
    $client->setIdClient($_GET["id"]);
    $erreur = $client->delete_ddb();
}

if(!isset($_GET["id"])){
    header("location:index.php");
}else{
    $ddb = new ddb();
    $result = $ddb->select("SELECT * FROM client_ligue WHERE id_client = ".$_GET["id"]);
}
?>
<body>
<main>
    <section>
        <h1><a href="index.php"> Voir la liste des utilisateurs ></a></h1>
        <div class="form" role="region">
            <form action="" method="post">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" aria-required="true" value=<?php print $result[0][1] ?> autofocus>
                    <label for="prenom">Prenom :</label>
                    <input type="text" name="prenom" id="prenom" aria-required="true" value=<?php print $result[0][2] ?>>
                    <label for="age">Age :</label>
                    <input type="text" name="age" id="age" aria-required="true" value=<?php print $result[0][3] ?>>
                    <label for="mail">Adresse mail :</label>
                    <input type="email" name="mail" id="mail" aria-required="true" value=<?php print $result[0][4] ?>>
                    <button type="submit" name="add">Mettre a jour<img src="./asset/edit.svg" alt="mettre a jour"></button>
            </form>
        </div>
    </section>
    <section class="remove">
    <div class="form" role="region">
            <form action="" method="post">
                    <button type="submit" name="remove">Supprimer<img src="./asset/remove.svg" alt="mettre a jour"></button>
            </form>
    </div>
    </section>
</main>
</body>
</html>