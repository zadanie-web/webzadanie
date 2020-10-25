<?php
if ($_POST['Chcempridať'] == 'Ok') {
    global $connection;

    $namekat = $_POST['kategoryname'];
    // FIND EXIST
    if (isset($namekat)) {
        $existkat = $connection->prepare(FINDEXISTKATEGORY);
        $existkat->bindValue(':mykatname', $namekat, FILTER_SANITIZE_STRING);
        $existkat->execute();
        $result = $existkat->fetchAll();

        // COUNT RESULTS
        if (count($result) > 0) {
            // MESSAGE ERROR
            echo "<p class='red'>Táto kategória už existuje</p>";
        }
        // IF NOT EXIST -> INSERT
        else {
            $newkategory = $connection->prepare(NEWKATEGORY);
            $newkategory->bindParam(':mykatname', $namekat, FILTER_SANITIZE_STRING);
            $newkategory->execute();
            echo '<p>Nová kategória je pridaná teraz si môžete pridať do nej aj nejaké fotografie</p>';
        }
    }
}