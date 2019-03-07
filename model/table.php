<?php

$identities="";



$req = $bdd->prepare(
        'SELECT civilite.type as civilite, user.id, nom, prenom, mail, user_status.type as status_user
        FROM user 
        INNER JOIN civilite ON user.id_civilite = civilite.id 
        INNER JOIN user_status ON user.id_user_status = user_status.id'
        );
$req->execute();
$identities = $req->fetchAll();
// header('location: index.php');
// echo '<pre>';
// print_r($identities);
// echo '</pre>';

$row='';

    // ici on concetane la valeur row avec .= sinon on n'aurait qu'une seule ligne de valeur dedans
    foreach($identities as $element){
        $row .= '
        <tr>
        <td>'.$element['prenom'].'</td>
        <td>'.$element['nom'].'</td>
        <td>'.$element['mail'].'</td>
        <td>'.$element['id'].'</td>
        </tr>
        ';
    }
