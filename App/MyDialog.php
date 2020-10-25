<div id="tkategory" class="tkategory display-non">
    <div class="mynav w-100">
        <span class="bold float-right white tooglestart cursor" data-my-tog-center="tkategory" data-divtoogle-show="fade">
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bold bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            ZAVRIEŤ
        </span>
    </div>
    <div class="addkategory">
        <div class="p-4">
            <h4 class="bold">PRIDAŤ KATEGÓRIU</h4>
            <form method="post" action="NewKat">
                <label for="kateg"></label>
                <input type="text" id="kateg" class="mt-4 border-0 w-75"
                       name="kategoryname"
                       placeholder="ZADAJTE NÁZOV KATEGÓRIE"
                       required="required"
                       oninvalid="this.setCustomValidity('Je potrebné zadať názov kategórie.')"
                       onchange="this.setCustomValidity('')"
                >
                <button type="submit"  class="mt-3 float-right btn btn-success bold">+ PRIDAŤ</button>
                <input type="hidden" name="Chcempridať" value="Ok">
            </form>
            <hr>
        </div>
    </div>
</div>
