<?php
function evenOrOdd($min, $max)
{
            for ($i = $min; $i <= $max; $i++) {
                if ($i % 2 == 0){
                   echo $i . " -- even" . "<br>";
                }else {echo $i . " -- odd" . "<br>";}
            } echo "<br>";
        }

        evenOrOdd(1, 10);
