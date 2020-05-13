<?php
    class Jadwal {
        protected $id;
        protected $kodeMatakuliah;
        protected $namaMatakuliah;
        protected $tanggalUjian;
        protected $ruangan;
        protected $tipeUjian;
        protected $dosenPengawas;
        protected $shift;

        public function __construct($id,$kode, $nama, $tanggal, $ruangan, $tipe, $dosen, $kapasitas,$shift) {
            $this->id = $id;
            $this->kodeMatakuliah = $kode;
            $this->namaMatakuliah = $nama;
            $this->tanggalUjian = $tanggal;
            $this->ruangan = $ruangan;
            $this->tipeUjian = $tipe;
            $this->dosenPengawas = $dosen;
            $this->kapasitas = $kapasitas;
            $this->shift = $shift;
        }

        public function getId() {
            return $this->id;
        }

        public function getKodeMK() {
            return $this->kodeMatakuliah;
        }

        public function getNamaMK() {
            return $this->namaMatakuliah;
        }

        public function getTanggal() {
            return $this->tanggalUjian;
        }

        public function getRuangan() {
            return $this->ruangan;
        }

        public function getTipe() {
            return $this->tipeUjian;
        }

        public function getDosen() {
            return $this->dosenPengawas;
        }

        public function getKapasitas() {
            return $this->kapasitas;
        }

        public function getShift() {
            return $this->shift;
        }
    }
?>