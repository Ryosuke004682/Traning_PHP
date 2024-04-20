<?php
    //配列 data の末尾にキーを移動し、最後から前へと順番に値を表示するプログラム
    $date = array('welcome' , 'to' , 'real' , 'php' , 'world');
   
    $arrayReverceDate = array_reverse($date);

    for($i = 0; $i < count($arrayReverceDate) - 1; $i++) {
        echo $arrayReverceDate[$i] . '->' . $arrayReverceDate[$i + 1] . '<br>';
    }

    echo $arrayReverceDate[count($arrayReverceDate) - 1] . '->' . '<br>';
    echo "end.\n";
?>