<?php
$title = "Modification";
include_once("./src/head.inc.php");
?>
<body>
<main>
    <section>
        <h1>Ajouter un utilisateur</h1>
        <div class="form" id="form" role="region">
            <form action="" method="post">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" aria-required="true">
                    <label for="prenom">Prenom :</label>
                    <input type="text" name="prenom" id="prenom" aria-required="true">
                    <label for="age">Age :</label>
                    <input type="text" name="age" id="age" aria-required="true">
                    <label for="mail">Adresse mail :</label>
                    <input type="email" name="mail" id="mail" aria-required="true">
                    <input type="submit" value="Créer">
            </form>
        </div>
    </section>
</main>
</body>
</html>