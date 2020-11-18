<?php

function insertInto(string $table, array $data, $bdd){
    $table = htmlspecialchars($table);
    $tableau = array();
    foreach($data as $post => $value){
        if(!empty($value)){
            $tableau[htmlspecialchars($post)] = htmlspecialchars($value);
        }
    }   
    $fields = implode(", ", array_keys($tableau));
    $values = "'" . implode("', '", array_values($tableau)) . "'";
    $sql = $bdd->prepare("INSERT INTO " . $table ." (". $fields .") VALUES (". $values .")");
    $sql->execute();
    return $sql;
}


