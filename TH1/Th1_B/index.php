<?php
    require 'model/Book.php';
    require 'model/BookList.php';

    $bookList = new BookList();

    // Thêm sách vào danh sách
    $book1 = new Book();
    $book1->setBookInfo('Sach 1', 'Tac Gia B', 'Nha Xuat Ban Q', 2022, array('Chuong 1', 'Chuong 2'));
    $bookList->addBook($book1);

    $book2 = new Book();
    $book2->setBookInfo('Sach 2', 'Tac Gia A', 'Nha Xuat Ban W', 2020, array('Chuong 1', 'Chuong 2', 'Chuong 3'));
    $bookList->addBook($book2);

    $book3 = new Book();
    $book3->setBookInfo('Sach 3', 'Tac Gia C', 'Nha Xuat Ban E', 2021, array('Chuong 1'));
    $bookList->addBook($book3);

    // Xử lý yêu cầu sắp xếp
    if (isset($_GET['sapXep'])) {
        $sort = $_GET['sapXep'];
        switch ($sort) {
            case 'tacGia':
                $bookList->sortBooksByAuthor();
                break;
            case 'tenSach':
                $bookList->sortBooksByTitle();
                break;
            case 'namXuatBan':
                $bookList->sortBooksByPublicationYear();
                break;
            default:
                // Sắp xếp theo tên tác giả nếu không xác định yêu cầu
                $bookList->sortBooksByAuthor();
                break;
        }
    }

    // Lấy danh sách sách đã được sắp xếp
    $books = $bookList->getBooks();

    // Hiển thị trang chủ
    $pageTitle = 'Trang chủ - Quản lý sách';
    $contentView = 'views/home.php';
    require 'views/layout.php';
?>
