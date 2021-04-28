<?php
$title = "Modification";
include_once("./src/head.inc.php");
?>
<body>
<main>
    <section>
        <h1>Modifier un utilisateur</h1>
        <div class="form" id="form" role="region">
            <form action="" method="post">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" aria-required="true" autofocus>
                    <label for="prenom">Prenom :</label>
                    <input type="text" name="prenom" id="prenom" aria-required="true">
                    <label for="age">Age :</label>
                    <input type="text" name="age" id="age" aria-required="true">
                    <label for="mail">Adresse mail :</label>
                    <input type="email" name="mail" id="mail" aria-required="true">
                    <button type="submit">Mettre a jour <img src="./asset/edit.svg" alt="mettre a jour"></button>
            </form>
        </div>
    </section>
    <section>
        
    </section>
</main>
</body>
</html>