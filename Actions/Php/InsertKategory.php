<?php
if ($_POST['Chcempridať'] == 'Ok') {
    // Database
    global $connection;

    $namekat = $_POST['kategoryname'];
    // FIND EXIST KATEGORY
    if (isset($namekat)) {
        $existkat = $connection->prepare(FINDEXISTKATEGORY);
        $existkat->bindValue(':mykatname', $namekat, PDO::PARAM_STR);
        $existkat->execute();
        $result = $existkat->fetchAll();

        // COUNT RESULT
        if (count($result) > 0) {
            // MESSAGE ERROR
            echo "<p class='text-danger'>Táto kategória už existuje</p>";
        }
        // IF NOT EXIST -> INSERT
        else {
            $newkategory = $connection->prepare(NEWKATEGORY);
            $newkategory->bindParam(':mykatname', $namekat, PDO::PARAM_STR);
            $newkategory->execute();
            echo '<p>Nová kategória je pridaná teraz si môžete pridať do nej aj nejaké fotografie</p>';
        }
    }
} else {
    echo '<p class="text-danger">Systémová chyba !! Kód chyby I100 Prosím kontaktujte správcu. </p>';
}