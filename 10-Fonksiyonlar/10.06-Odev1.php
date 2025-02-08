<?php

function ucgen($sat){
    for ($i=1; $i <= $sat; $i++) {
        $a=0;
        while($a < $i) {
            echo "O";
            $a++;
        }
        echo "<br>";
    }

}

ucgen(15);

?>