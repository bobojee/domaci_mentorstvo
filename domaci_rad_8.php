<?php
    
    function izracunajDostavu($cenaProizvoda, $uneseniGrad)
    {
        $gradoviSaDostavom = [
            "subotica" => 220,
            "pancevo" => 10,
            "sarajevo" => 292,
            "split" => 799
        ];
        
        $uneseniGrad = trim(strtolower($uneseniGrad));
        

        if(is_numeric($cenaProizvoda) && array_key_exists($uneseniGrad, $gradoviSaDostavom))
        {
            foreach($gradoviSaDostavom as $grad => $rastojanje)
            {
                if($grad == $uneseniGrad)
                {
                    if($rastojanje < 100)
                    {
                        $cenaDostave = 200;
                    }
                    else if($rastojanje >= 100 && $rastojanje < 200)
                    {
                        $cenaDostave = 350;
                    }
                    else
                    {
                        $cenaDostave = 500;
                    }
                    
                    $cenaSaDostavom = $cenaProizvoda + $cenaDostave;
                    return $cenaSaDostavom;
                }
                else
                {
                    continue;
                }
            }
            
        }
    }

    $rezultat = izracunajDostavu(200, "panceVO");
    echo $rezultat;

    
   
?>

