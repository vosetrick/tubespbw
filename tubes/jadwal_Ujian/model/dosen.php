<?php
    class Dosen {
        protected $dosen_id;
        protected $listMK;

        public function __construct($id,$mk) {
            $this->dosen_id = $id;
            $this->listMK = $mk;
        }

        public function getMK() {
            return $this->listMK;
        }
    
        public function getId() {
            return $this->dosen_id;
        }
    }
?>