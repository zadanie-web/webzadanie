<?php
namespace bell;

// AK NEEXISTUJE FLASH->ERROR NECH NAP3E STAV V3ETKO JE V PORIADNKU
class bell
{
    public $message;
    public function __construct($message)
    {
        echo '<div id="bell" class="display-non bell-menu">';
        echo '<span class="red float-right"><i class="fas fa-times"></i></span>';

        if ($message){
            echo $message;
        }
        echo '</div>';
    }
}
