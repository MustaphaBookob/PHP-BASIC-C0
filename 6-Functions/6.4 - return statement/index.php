<?php

function geefTienProcent(){
    $koopPrijs = 75; 
    $korting = 10;

    $berekening = ($korting / 100) * $koopPrijs;
    $uitkomst = $koopPrijs - $berekening;
    return $uitkomst;
    echo '<h1>' . geefTienProcent() . `</h1>`;
}

geefTienProcent();

function zetAllesGroot(){
    echo '<h1>' . geefTienProcent() . `</h1>`;
}

zetAllesGroot();

?>