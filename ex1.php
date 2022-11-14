        function even_or_odd($min, $max){
            for($i = $min; $i <= $max; $i++){
                if($i % 2 == 0){
                   echo $i . " -- é par" . "<br>";
                }else{echo $i . " -- é impar" . "<br>";}
            } echo "<br>";
        }
