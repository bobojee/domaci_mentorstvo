<?php

    function PDV($iznos_bez_PDV)
    {
        if(is_numeric($iznos_bez_PDV) && $iznos_bez_PDV >= 1)
        {
            $iznos_sa_PDV = 0.22 * $iznos_bez_PDV;
            echo "PDV iznosi ".$iznos_sa_PDV." eur";
        }
        else
        {
            echo "Uneseni podatak mora biti broj, te veci od 1";
        }    
    }
?>
