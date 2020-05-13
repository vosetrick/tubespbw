<?php
    class Ruang {
        protected $kodeRuangan;
        protected $namaRuangan;
        protected $kapasitas;

        public function __construct($kode, $nama, $kapasitas) {
            $this->kodeRuangan = $kode;
            $this->namaRuangan = $nama;
            $this->kapasitas = $kapasitas;
        }

        public function getKodeRuangan() {
            return $this->kodeRuangan;
        }
    }
?>