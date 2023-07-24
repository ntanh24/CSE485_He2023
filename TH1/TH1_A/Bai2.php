<?php
    $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
    $names = ['Anh', 'Sơn', 'Thắng', 'tôi'];
    $favorite_colors = '';

    foreach ($arrs as $key => $color) {
        // Lấy tên người yêu thích màu hiện tại từ mảng $names
        $name = isset($names[$key]) ? $names[$key] : 'Tôi';

        // Thêm màu yêu thích của người hiện tại vào chuỗi $favorite_colors
        $favorite_colors .= ucfirst($color) . ' là màu yêu thích của ' . $name;
        
        // Nếu là màu cuối cùng, thêm dấu chấm vào cuối chuỗi
        if ($key === count($arrs) - 1) {
            $favorite_colors .= '.';
        } else {
            // Nếu không phải màu cuối cùng, thêm dấu phẩy và khoảng trắng để ngăn cách giữa các màu
            $favorite_colors .= ', ';
        }
    }

    // Hiển thị chuỗi kết quả
    echo "Màu $favorite_colors";
?>
