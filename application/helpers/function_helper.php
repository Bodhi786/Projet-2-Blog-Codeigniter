<?php

//Comme déjà vu lors du projet 1, cette fonction servira pour retrouver le nom correct de l'image pour avoir le bon chemin.L'image à été intégrée dans "back" par le fichier "base_blog". Donc une fois sur la racine pour notre page index lorsqu'on fera un appel de l'image il faudra remplacer les "../" par "(vide)" du nom de l'image pour pouvoir la retrouver correctement.
function newPath($text){
    return str_replace('../', '', $text);
}



//Pour cette fonction il s'agira de remettre la date dans le bon ordre et plus en anglais, quand on "explode" la date on obtient un tableau d'où le "0" "1" "2" qu'on va remettre dans l'ordre en type jour/mois/année
function dateGdFr($date){
    $date = explode("-", $date);
    $newdate=$date[2].'-'.$date[1].'-'.$date[0];
    
    echo $newdate;
    }





?>