<?php
    $lang = 'E';
    $hour = 15;
    echo $hour . ' : ';

    $greeting = ${'lang'.$lang}[$hour];

    echo $greeting;

    $langJ = [
        0 => 'おやすみ',
        1 => 'おやすみ',
        2 => 'おやすみ',
        3 => 'おやすみ',
        4 => 'おやすみ',
        5 => 'おやすみ',
        6 => 'おやすみ',
        7 => 'おはよう', 
        8 => 'おはよう',
        9 => 'おはよう',
        10 => 'おはよう',
        11 => 'おはよう',
        12 => 'こんにちは',
        13 => 'こんにちは',
        14 => 'こんにちは',
        15 => 'こんにちは',
        16 => 'こんにちは',
        17 => 'こんにちは',
        18 => 'こんばんわ',
        19 => 'こんばんわ',
        20 => 'こんばんわ',
        21 => 'こんばんわ',
        22 => 'こんばんわ',
        23 => 'こんばんわ'
    ];

    $langE = [
        0 => 'Good Night',
        1 => 'Good Night',
        2 => 'Good Night',
        3 => 'Good Night',
        4 => 'Good Night',
        5 => 'Good Night',
        6 => 'Good Night',
        7 => 'Good morning', 
        8 => 'Good morning',
        9 => 'Good morning',
        10 => 'Good morning',
        11 => 'Good morning',
        12 => 'Hello',
        13 => 'Hello',
        14 => 'Hello',
        15 => 'Hello',
        16 => 'Hello',
        17 => 'Hello',
        18 => 'Good evening',
        19 => 'Good evening',
        20 => 'Good evening',
        21 => 'Good evening',
        22 => 'Good evening',
        23 => 'Good evening'
    ];
?>