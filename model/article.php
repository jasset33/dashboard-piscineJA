<?php

$identities="";



$req = $bdd->prepare(
        'SELECT title, content, coverimage
        FROM article 
        '
        );
$req->execute();
$liste_article = $req->fetchAll();
// header('location: index.php');
// echo '<pre>';
// print_r($identities);
// echo '</pre>';

$row='';

    // ici on concetane la valeur row avec .= sinon on n'aurait qu'une seule ligne de valeur dedans
    foreach($liste_article as $element){
        $row .= '
        <tr>
        <td>'.$element['title'].'</td>
        <td>'.$element['content'].'</td>
        <td>'.$element['coverimage'].'</td>
        </tr>
        ';
    }
