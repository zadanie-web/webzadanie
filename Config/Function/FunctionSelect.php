<?php

/**
 * @param $query
 * @param bool $format
 * @return array
 * FUNCTION FORMAT (OBJECT)
 */
function db_select_assoc($query,$id,$format = true){
    global $connection;


    $sql = $connection->prepare($query);

    // EXIST ID PARAM ID
    if ($id) {
        $sql->bindParam(':id_category', $id, PDO::PARAM_INT);
    }

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