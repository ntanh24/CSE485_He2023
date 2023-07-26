<?php
    interface IBook {
        public function setBookInfo($tenSach, $tacGia, $nhaXuatBan, $namXuatBan, $soChuong);
        public function getBookInfo();
    }
?>

<?php
    class Book implements IBook {
        private $tenSach;
        private $tacGia;
        private $nhaXuatBan;
        private $namXuatBan;
        private $soChuong;

        // public function __construct($tenSach, $tacGia, $nhaXuatBan, $namXuatBan, $soChuong) {
        //     $this->tenSach = $tenSach;
        //     $this->tacGia = $tacGia;
        //     $this->nhaXuatBan = $nhaXuatBan;
        //     $this->namXuatBan = $namXuatBan;
        //     $this->soChuong = $soChuong;
        // }

        public function setBookInfo($tenSach, $tacGia, $nhaXuatBan, $namXuatBan, $soChuong) {
            $this->tenSach = $tenSach;
            $this->tacGia = $tacGia;
            $this->nhaXuatBan = $nhaXuatBan;
            $this->namXuatBan = $namXuatBan;
            $this->soChuong = $soChuong;
        }

        public function getBookInfo() {
            return array(
                'tenSach' => $this->tenSach,
                'tacGia' => $this->tacGia,
                'nhaXuatBan' => $this->nhaXuatBan,
                'namXuatBan' => $this->namXuatBan,
                'soChuong' => $this->soChuong
            );
        }
    }
?>
