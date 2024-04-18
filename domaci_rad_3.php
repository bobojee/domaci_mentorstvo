<?php

    //prvi zadatak
    $ime = "administrator";
    $lozinka = "mojaSifraJeSigurna";
    $uneseno_ime = strtolower($ime);

    if($uneseno_ime && $lozinka == "mojaSifraJeSigurna")
        {
            echo "Dobrodosao administratore";
        }

?>

<html> <br> <br> </html>

<?php

    //drugi zadatak
    $tocna_ura = date("H");

    if($tocna_ura > 5 && $tocna_ura < 12)
        {
            echo "Jutro je";
        }
    else if($tocna_ura > 12 && $tocna_ura < 20)
        {
            echo "Podne je";
        }
    else
        {
            echo "Noc je";
        }

?>


