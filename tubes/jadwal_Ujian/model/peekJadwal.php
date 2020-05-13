<?php
    class Peek {
        protected $kodeMatakuliah;
        protected $namaMatakuliah;
        protected $mulaiUjian;
        protected $selesaiUjian;
        protected $ruangan;

        public function __construct($kode, $nama, $mulai, $selesai, $ruangan) {
            $this->kodeMatakuliah = $kode;
            $this->namaMatakuliah = $nama;
            $this->mulaiUjian = $mulai;
            $this->selesaiUjian = $selesai;
            $this->ruangan = $ruangan;
        }

        public function getKodeMK() {
            return $this->kodeMatakuliah;
        }

        public function getNamaMK() {
            return $this->namaMatakuliah;
        }

        public function getMulai() {
            return $this->mulaiUjian;
        }

        public function getRuangan() {
            return $this->ruangan;
        }

        public function getSelesai() {
            return $this->selesaiUjian;
        }
    }
?>