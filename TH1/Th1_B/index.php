<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sách</title>
</head>
<body>
    <?php
    require 'Book.php';
    require 'BookList.php';

    // Tạo danh sách sách
    $bookList = new BookList();

    // Thêm sách vào danh sách
    $book1 = new Book();
    $book1->setBookInfo('Book 1', 'Author A', 'Publisher X', 2022, 'ISBN-1234', array('Chapter 1', 'Chapter 2'));
    $bookList->addBook($book1);

    $book2 = new Book();
    $book2->setBookInfo('Book 2', 'Author B', 'Publisher Y', 2020, 'ISBN-5678', array('Chapter 1', 'Chapter 2', 'Chapter 3'));
    $bookList->addBook($book2);

    $book3 = new Book();
    $book3->setBookInfo('Book 3', 'Author C', 'Publisher Z', 2021, 'ISBN-9876', array('Chapter 1'));
    $bookList->addBook($book3);

    // Sắp xếp sách theo yêu cầu
    if (isset($_GET['sort'])) {
        $sort = $_GET['sort'];
        switch ($sort) {
            case 'author':
                $bookList->sortBooksByAuthor();
                break;
            case 'title':
                $bookList->sortBooksByTitle();
                break;
            case 'publicationYear':
                $bookList->sortBooksByPublicationYear();
                break;
            default:
                // Sắp xếp theo tên tác giả nếu không xác định yêu cầu
                $bookList->sortBooksByAuthor();
                break;
        }
    } else {
        // Sắp xếp theo tên tác giả nếu không có tham số sort được truyền vào
        $bookList->sortBooksByAuthor();
    }

    // Hiển thị danh sách sách
    $books = $bookList->getBooks();
    foreach ($books as $book) {
        $bookInfo = $book->getBookInfo();
        echo '<p>';
        echo 'Title: ' . $bookInfo['title'] . '<br>';
        echo 'Author: ' . $bookInfo['author'] . '<br>';
        echo 'Publisher: ' . $bookInfo['publisher'] . '<br>';
        echo 'Publication Year: ' . $bookInfo['publicationYear'] . '<br>';
        echo 'ISBN: ' . $bookInfo['isbn'] . '<br>';
        echo 'Chapters: ' . implode(', ', $bookInfo['chapters']);
        echo '</p>';
    }
    ?>

    <!-- Form để chọn cách sắp xếp sách -->
    <form action="" method="get">
        <label for="sort">Sắp xếp theo:</label>
        <select name="sort" id="sort">
            <option value="author">Tên tác giả</option>
            <option value="title">Tên sách</option>
            <option value="publicationYear">Năm xuất bản</option>
        </select>
        <input type="submit" value="Sắp xếp">
    </form>
</body>
</html>
