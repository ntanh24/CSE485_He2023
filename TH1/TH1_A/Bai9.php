<?php
    function convertToLowercase($arr) {
        return array_map('strtolower', $arr);
    }
    $arrs1 = ['1', 'B', 'C', 'E'];
    $arrs2 = ['a', 0, null, false];

    $result1 = convertToLowercase($arrs1);
    $result2 = convertToLowercase($arrs1);

    echo "Kết quả mảng 1: ";
    print_r($result1);
    
    echo '<br>';
    
    echo "Kết quả mảng 2: ";
    print_r($result2);
?>
