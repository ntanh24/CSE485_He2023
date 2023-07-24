<?php
    $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Tên khoá học</th>
        </tr>
        <?php
            foreach ($arrs as $item) {
                    echo "<tr>";
                    echo "<td>$item</td>";
                    echo "</tr>";
                }
        ?>
    </table>
</body>
</html>
