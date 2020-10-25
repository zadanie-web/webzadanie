<?php
if ($_POST['Chcempridať'] == 'Ok'){
    global $connection;
    $newkategory = $connection->prepare(NEWKATEGORY);
    $newkategory->bindParam(':mykatname',$_POST['kategoryname'],FILTER_SANITIZE_STRING);
    $newkategory->execute();
    echo '<p>Nová kategória je pridaná teraz si môžete pridať do nej aj nejaké fotografie</p>';
}
