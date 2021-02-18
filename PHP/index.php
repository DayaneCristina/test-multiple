<?php
    
    function multiples($number)
    {
        for($i=0; $i<=$number; $i++)
        {
            $multipleThree = $i % 3;
            $multipleFive  = $i % 5;
            $textOne = "Baz";
            $textTwo = "Inga";

            if($multipleThree == 0 && $multipleFive == 0)
            {
                echo $textOne . $textTwo . "\n";
                continue;
            }
            
            if($multipleThree == 0)
            {
                echo $textOne . "\n";
                continue;
            }

            if ($multipleFive == 0)
            {
                echo $textTwo . "\n";
                continue;
            }

            echo $i . "\n";
        }
    }

    multiples(15);
