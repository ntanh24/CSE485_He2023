<?php
    $a = [
        'a' => [
        'b' => 0,
        'c' => 1
        ],
        'b' => [
        'e' => 2,
        'o' => [
        'b' => 3
        ]
        ]
    ];

    $valueB = $a['b']['o']['b'];

    $valueC = $a['a']['c'];

    $infoA = $a['a'];

    echo "Giá trị của 'b' là $valueB<br>";
    echo "Giá trị của 'c' là $valueC<br>";
    echo "Thông tin của 'a':<pre>" . print_r($infoA, true) . "</pre>";
?>