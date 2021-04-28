<?php
$title = "Maison des ligues : Interface admin";
include_once("./src/head.inc.php");
include_once("./src/ddb.inc.php");
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
            $ddb = new ddb();
            $result = $ddb->select("SELECT * FROM client_ligue");
            if(isset($result)){
                foreach($result as $value){
                    echo "
                    <tr>
                    <td>".$value[0]."</td>
                    <td>".$value[1]."</td>
                    <td>".$value[2]."</td>
                    <td>".$value[3]."</td>
                    <td>".$value[4]."</td>
                    </tr>
                    ";
                }
            }
        ?>
        </tbody>
        </table>
        <a href="adduser.php">+ Ajouter un client</a>
    </main>
</body>
</html>