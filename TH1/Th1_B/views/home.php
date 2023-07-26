<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sách</title>
</head>
<body>
    <h1>Danh sách</h1>
    <table>
        <table>
            <tr>
                <th>Tên sách</th>
                <th>Tên tác giả</th>
                <th>Nhà xuất bản</th>
                <th>Năm xuất bản</th>
                <th>Danh mục chương sách</th>
            </tr>
            <?php foreach ($books as $book) { 
                $bookInfo = $book->getBookInfo(); 
            ?>
            <tr>
                <td><?php echo $bookInfo['tenSach']; ?></td>
                <td><?php echo $bookInfo['tacGia']; ?></td>
                <td><?php echo $bookInfo['nhaXuatBan']; ?></td>
                <td><?php echo $bookInfo['namXuatBan']; ?></td>
                <td><?php echo implode(', ', $bookInfo['soChuong']); ?></td>
            </tr>
            <?php } ?>
    </table>
    </table>

    <h2>Sắp xếp sách</h2>
    <form action="" method="get">
        <label for="sapXep">Sắp xếp theo:</label>
        <select name="sapXep" id="sapXep">
            <option value="tacGia">Tên tác giả</option>
            <option value="tenSach">Tên sách</option>
            <option value="namXuatBan">Năm xuất bản</option>
        </select>
        <input type="submit" value="Sắp xếp">
    </form>
</body>
</html>