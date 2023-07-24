<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

    $max_length_string = $array[0];
    $max_length = strlen($array[0]);

    $min_length_string = $array[0];
    $min_length = strlen($array[0]);

    foreach ($array as $string) {
        $length = strlen($string);

        if ($length > $max_length) {
            $max_length_string = $string;
            $max_length = $length;
        }

        if ($length < $min_length) {
            $min_length_string = $string;
            $min_length = $length;
        }
    }

    echo "Chuỗi lớn nhất là $max_length_string, độ dài = $max_length<br>";
    echo "Chuỗi nhỏ nhất là $min_length_string, độ dài = $min_length<br>";
?>
