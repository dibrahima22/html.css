<!DOCTYPE html>
<html>
<body>
<p><a href="control.php">Revenir vers le formulaire</a></p>
</body>
</html>
<?php
    //récupère le contenue du fichier
    $tache=file_get_contents('tache.txt');
    //et l affiche
    echo $tache;
?>