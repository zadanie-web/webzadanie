<div class="card-deck">
    <?php
    $kategory = db_select_assoc(SELECTKATEGORY);
    foreach($kategory as $kat):?>
    <?php  if (!$kat->image){ ?>
            <div class="mt-4">
                <div class="card">
                    <div class="card-body text-center">
                        <div class=" text-warning mt-4  ml-4 mr-4  mb-1 bold">Teraz pridajte fotky pre túro kategóriu</div>
                        <img src="<?= packageFille('Media/a.svg');?>" width="40" alt="ikonka add" class="filter-green">
                        <p class="text-center bold  m-0 card-title"><?= plain($kat->name);?></p>
                    </div>
                </div>
            </div>
    <?php } else {?>
        <div class="mt-4">
            <div class="card">
                <img id="myidimg" class="card-img-top" src="<?= packageFille(plain($kat->image));?>" alt="Card image cap">
                <div class="card-body">
                    <p class="text-center bold  m-0 card-title"><?= plain($kat->name);?></p>
                    <p class="card-text mycall text-center">6 fotiek</p>
                </div>
            </div>
        </div>


    <?php } endforeach; ?>
    <div class="mt-4">
        <div class="tooglestart card card-block" data-my-tog-center="tkategory" data-divtoogle-show="fade">
            <div class="card-body text-center mt-5">
                <img src="<?= packageFille('Media/a.svg');?>" width="40" alt="ikonka add" class="filter-green">
                <p class="mt-2 bold darkgrey">PRIDAŤ KATEGÓRIU</p>
            </div>
        </div>
    </div>
</div>
<p class="myfoot mt-5">webdesign bart.sk</p>
<script> animatehover(); </script>