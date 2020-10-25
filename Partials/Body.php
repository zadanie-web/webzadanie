
<div id="myblac" class="container-fluid p-0">
    <div class="headerimage">
        <img src="<?= packageFille('Media/image.jpeg');?>" alt="Obrázok kategórie" class="rounded w-100 img-fluid">
    </div>
    <div class="position-absolute mycon">
        <div class="container">
            <h2 class="white bold">FOTOGALÉRIA</h2>
            <h3 class=" white bold mt-my">KATEGÓRIE</h3>
            <hr>
            <div id="MyKategory">
                <!-- KATEGORY APPEND -->
            </div>
        </div>
    </div>
</div>


<div id="tkategory" class="tkategory display-non">
    <div class="mynav w-100">
        <span class="bold float-right white tooglestart cursor" data-my-tog-center="tkategory" data-divtoogle-show="fade">
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bold bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            ZAVRIEŤ</span>
    </div>
    <div class="addkategory">
        <div class="p-4">
            <h4 class="bold">PRIDAŤ KATEGÓRIU</h4>
            <label for="kateg"></label>
            <input id="kateg" class="mt-4 border-0 w-75" type="text" placeholder="ZADAJTE NÁZOV KATEGÓRIE"><button type="button" class="mt-3 float-right btn btn-success bold">+ PRIDAŤ</button>
            <hr>
        </div>
    </div>
</div>