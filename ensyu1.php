<?php
    $numbar = 5;

    echo $number . 'です。<br>'
    switch($number) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "深夜です。";
            break;

        case 6:
        case 7:
        case 8:
        case 9:
        case 10:
        case 11:
            echo "おはようございます。";
            break;

        case 12:
        case 13:
        case 14:
        case 15:
        case 16:
        case 17:
            echo "こんにちは。";
            break;
        

        case 18:
        case 19:
        case 20:
        case 21:
        case 22:
        case 23:
            echo "こんばんわ";
            break;    
    }
?>