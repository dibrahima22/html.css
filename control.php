<!DOCTYPE html>
<html>
    <body>
        <head>
            <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
            <meta charset="utf-8"/>
        </head>
    <form method="post">
            <input type="text" name="titre" placeholder="Titre de votre tache">
            <input type="textarea" name="message" placeholder=" Tache à faire">
            <input type="submit" value="Formulaire Envoyer">
        </form>

        <p><a href="donnee.php">Voir les données stockées</a></p>
</body>
</html>

<?php
    if(isset($_POST['titre'])){
    var_dump($_POST);
    $fichierdata="tache.txt";
    $titre = $_POST [ "titre"];
    $message= $_POST ["message"];
    $tableau2 = [1 => "$titre", 2 => "$message"];
    //permet de mettre dans tâche.txt la valeur titre et message sur 2 lignes différentes
    file_put_contents($fichierdata,$titre . "\n" .$message . " ",FILE_APPEND);}
?>