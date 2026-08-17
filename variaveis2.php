<?php
    function somatoria($a){
        /*variável do tipo static mantêm 
        o valor que lhes foi atribuído na
        última execução */

        static $b;
        $b += $a;
        echo "<b> valor de a </b> = $a <br> <b> valor de b </b> = $b <br><br>";
    }

    somatoria(2);
    somatoria(4);
    somatoria(6);
?>