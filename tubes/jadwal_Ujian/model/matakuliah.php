<?php
    class Matakuliah {
        protected $kodeMatakuliah;
        protected $namaMatakuliah;
        protected $programStudi;
        protected $tingkat;
        protected $dosen;

        public function __construct($kode, $nama, $ps, $t) {
            $this->kodeMatakuliah = $kode;
            $this->namaMatakuliah = $nama;
            $this->programStudi = $ps;
            $this->tingkat = $t;
            $this->dosen = [];
        }

        public function getNamaMK() {
            return $this->namaMatakuliah;
        }

        public function setDosen($arr) {
            $this->ruangan = $arr;
        }

        public function getDosen() {
            return $this->ruangan;
        }

        public function getKodeMK() {
            return $this->kodeMatakuliah;
        }
    }
?>