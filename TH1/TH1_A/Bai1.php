<?php
    function cal($arrs) {
        $tong = array_sum($arrs);
        $tich = array_product($arrs);

        $hieu = $arrs[0];
        $thuong = $arrs[0];

        for ($i = 1; $i < count($arrs); $i++) {
            $hieu -= $arrs[$i];
            $thuong /= $arrs[$i];
        }

        return array(
            'tong' => $tong,
            'tich' => $tich,
            'hieu' => $hieu,
            'thuong' => $thuong,
        );
    }

    $arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
    $result = cal($arrs);

    // In kết quả
    echo "Tổng: " . $result['tong'] . "\n";
    echo "Tích: " . $result['tich'] . "\n";
    echo "Hiệu: " . $result['hieu'] . "\n";
    echo "Thương: " . $result['thuong'] . "\n";
?>
