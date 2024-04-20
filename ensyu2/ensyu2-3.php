<?php
    //大文字変換関数
    function showUpper($arr) {
       $upperCase = array_map('strtoupper' , $arr);
       return $upperCase;
    }

    //小文字変換関数
    function showLower($arr) {
       $lowerCase = array_map('strtolower' , $arr);
       return $lowerCase; 
    }


    function showAll ($lang , $arr) {
         //大文字変換
         if($lang === 'U') {
            $result = showUpper($arr);
        }

        //小文字変換
        if($lang === 'L') {
            $result = showLower($arr);
        }

        foreach($result as $key => $value) {
            echo "$key : $value\n <br>";
        }
    }

    $arr = array('WELCOME' , 'REAL' , 'WORLD');
    showAll('U' , $arr);
    showAll('L' , $arr);

?>