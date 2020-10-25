<div class="card-deck">
    <?php for ($i=1;$i < 6;$i++):?>
        <div class=" mt-4">
            <div class="card">
                <img class="card-img-top" src="<?= packageFille('Media/'.'p'.$i.'x.jpeg');?>" alt="Card image cap">
                <div class="card-body">
                    <p class="text-center bold  m-0 card-title">Architektúra</p>
                    <p class="card-text mycall text-center">6 fotiek</p>
                </div>
            </div>
        </div>
    <?php endfor; ?>
    <div class="mt-4">
        <div class="card card-block">
            <div class="card-body text-center mt-5">
                <img src="<?= packageFille('Media/a.svg');?>" width="40" alt="ikonka add" class="filter-green">
                <p class="mt-2 bold darkgrey">PRIDAŤ KATEGÓRIU</p>
            </div>
        </div>
    </div>
</div>
<p class="myfoot mt-5">webdesign bart.sk</p>