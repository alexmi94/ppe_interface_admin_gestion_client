<?php
$title = "Maison des ligues : Interface admin";
include_once("./src/head.inc.php");
include_once("./src/ddb.inc.php");

$ddb = new ddb();
$result = $ddb->select("SELECT * FROM client_ligue");

?>
<body>
    <header>
        <h1><?php print $title ?></h1>
    </header>
    <main>
        <table>
        <thead>
            <tr>
                <th>Identifiant</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Age</th>
                <th>Adresse Mail</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if(isset($result)){
                foreach($result as $value){
                    echo '
                    <tr>
                    <td><a href="edit.php?id='.$value[0].'" class="edit"><img src="./asset/edit.svg" alt="modifier"> Modifier ou <img src="./asset/remove.svg" alt="supprimmer"> supprimer</a></td>
                    <td>'.$value[1].'</td>
                    <td>'.$value[2].'</td>
                    <td>'.$value[3].'</td>
                    <td>'.$value[4].'</td>
                    </tr>
                    ';
                }
            }
        ?>
        </tbody>
        </table>
        <a href="adduser.php" class="addclient">+ Ajouter un client</a>
    </main>
</body>
</html>