<?php
function db_select_assoc($query,$format = true){
    global $connection;
    $sql = $connection->prepare($query);

    $sql->execute();
    if ($sql->rowCount()){
        $results = $sql->fetchAll(PDO::FETCH_ASSOC);
        if ($format){
            $results = array_map('format',$results);
        }
    }
    else {
        $results = [];
    }
    return $results;
}