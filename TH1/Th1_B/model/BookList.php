<?php
    class BookList {
        private $books = array();

        public function addBook(Book $book) {
            $this->books[] = $book;
        }

        public function getBooks() {
            return $this->books;
        }

        public function sortBooksByAuthor() {
            usort($this->books, function($a, $b) {
                return strcmp($a->getBookInfo()['tacGia'], $b->getBookInfo()['tacGia']);
            });
        }

        public function sortBooksByTitle() {
            usort($this->books, function($a, $b) {
                return strcmp($a->getBookInfo()['tenSach'], $b->getBookInfo()['tenSach']);
            });
        }

        public function sortBooksByPublicationYear() {
            usort($this->books, function($a, $b) {
                return $a->getBookInfo()['namXuatBan'] - $b->getBookInfo()['namXuatBan'];
            });
        }
    }
?>
