<div class="headerimage">
    <?php
    // IF EXIST ID BACKGROUND KATEGORY
    if ($_POST['pol']) {
        $id = $_POST['pol'];
        $bc = db_select_assoc(SELECTFORCATEGORY, $id);
    }
    // IF not category background add define background
    if (count($bc) == 0) {
        $background = packageFille('Media/image.jpeg');
    } else {
        // SELECT KATEGORY BACKGROUND
        foreach ($bc as $img) {
            $background = packageFille($img->image);
        }
    }
    ?>
    <img id="bla" src="<?= $background ?>" alt="Obrázok kategórie" class="rounded w-100 img-fluid">
</div>