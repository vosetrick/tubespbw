<?php
    require_once "controller/services/mysqlDB.php";
    require_once "controller/services/view.php";
    require_once "model/jadwal.php";
    require_once "model/ruang.php";
    require_once "model/dosen.php";
    require_once "model/matakuliah.php";
    require_once "model/peekJadwal.php";

    class jadwalController{
        protected $db;
    
        public function __construct(){
            $this->db = new MySQLDB("localhost","root","","ftis_akademik_a");
        }

        public function viewHome() {
            $result = $this->getJadwalTerdekat();
            return View::createView('index.php',[
                "result" => $result
            ]);
        }

        public function viewChange() {
            session_start();
            $kodeMK = $_SESSION['kodeMK'];
            $namaMK = $_SESSION['namaMK'];
            session_write_close();
            $resultR = $this->getAllRuangan();
            $resultD = $this->getAllDosen();
            return View::createView('ubahJadwal.php', [
                "resultR" => $resultR,
                "resultD" => $resultD
            ]);
        }

        public function getJadwalTerdekat() {
            $query = "SELECT * FROM (SELECT kode, mid.mulai, mid.selesai, mid.ruang FROM (SELECT mengajar_id, mulai, selesai, ruang FROM ujian)as mid JOIN mengajar on mid.mengajar_id = mengajar.id) as mid2 JOIN matakuliah on mid2.kode LIKE matakuliah.kode ORDER BY mid2.mulai ASC LIMIT 5";
            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            foreach ($query_result as $key => $value) {
                $result[] = new Peek($value['kode'],$value['nama'],$value['mulai'],$value['selesai'],$value['ruang']);
            }
            return $result;
        }

        public function viewJadwalUjianUserUTS() {
            $result = $this->getJadwalUTS();
            return View::createView('jadwalUjianUser.php', [
                "result" => $result
            ]);
        }

        public function viewJadwalUjianAdminUTS() {
            $result = $this->getJadwalUTS();
            return View::createView('jadwalUjianAdmin.php', [
                "result" => $result
            ]);
        }

        public function viewJadwalUjianUserUAS() {
            $result = $this->getJadwalUAS();
            return View::createView('jadwalUjianUser.php', [
                "result" => $result
            ]);
        }

        public function viewJadwalUjianAdminUAS() {
            $result = $this->getJadwalUAS();
            return View::createView('jadwalUjianAdmin.php', [
                "result" => $result
            ]);
        }

        public function viewTambahJadwal() {
            $resultMK = $this->getAllMatakuliah();
            $resultR = $this->getAllRuangan();
            $resultD = $this->getAllDosen();
            return View::createView('tambahJadwal.php', [
                "resultMK" => $resultMK,
                "resultR" => $resultR,
                "resultD" => $resultD
            ]);
        }

        public function insertJadwal() {
            $matakuliah = $_POST['matakuliah'];
            $date = $_POST['tanggalUjian'];
            $time = $_POST['waktuUjian'];
            $datetime = $date.' '.$time;
            $datetime = date("Y-m-d H:i:s", strtotime($datetime));
            $ruangan = $_POST['ruangan'];
            $peserta = $_POST['peserta'];
            $durasi = $_POST['durasi'];
            $date = date_create($datetime); 
            date_add($date, date_interval_create_from_date_string($durasi." hours")); 
            $selesai = date_format($date, "Y-m-d H:i:s"); 
            $tipe = $_POST['tipe'];
            $tataCara = $_POST['tataCara'];
            $shift = $_POST['shift'];
            $dosen = $_POST['dosen'];
            $kebutuhan = $_POST['kebutuhan'];
            if (isset($matakuliah) && isset($ruangan)
                && isset($peserta) && isset($durasi) && isset($tipe)
                    && isset($tataCara) && isset($shift) && isset($dosen) 
                        && isset ($kebutuhan)
                && $matakuliah != "" && $ruangan != ""
                    && $peserta != "" && $durasi != "" && $tipe != ""
                        && $tataCara != "" && $shift != "" && $dosen != ""
                             && $kebutuhan != "") {
                                if($this->isMuat($ruangan)>=$peserta){
                                $queryTemp = "SELECT id FROM mengajar WHERE kode LIKE '$matakuliah' AND dosen_id = '$dosen'";
                                $mengajar = $this->db->executeSelectQuery($queryTemp);
                                foreach ($mengajar as $key => $value) {
                                    $id = $value['id'];
                                    $query = "INSERT INTO ujian (mengajar_id, tipe, tata_cara, mulai, selesai, ruang, shift, kebutuhan_pengawas, jumlahPeserta)
                                     VALUES ('$id', '$tipe', '$tataCara', '$datetime', '$selesai', '$ruangan', '$shift', '$kebutuhan', '$peserta')";
                                    $query_result = $this->db->executeNonSelectQuery($query);
                                    header('Location: jadwalUjianAdminUTS?semester=2');
                                    }
                                }else{
                                    if($this->isMuat($ruangan)>0){
                                    echo '<script>var alert = alert("Jumlah melebihi kapasitas!, sisa kuota untuk ruangan ini adalah : '.$this->isMuat($ruangan).'")
                                    console.log(!(alert=="undefined"));    
                                    if(!(alert=="undefined")){
                                            window.location.replace("jadwalUjianAdminUTS?semester=2");
                                        }
                                    </script>';
                                    }else{
                                        echo '<script>var alert = alert("Jumlah melebihi kapasitas!, sisa kuota untuk ruangan ini adalah : 0")
                                    console.log(!(alert=="undefined"));    
                                    if(!(alert=="undefined")){
                                            window.location.replace("jadwalUjianAdminUTS?semester=2");
                                        }
                                    </script>'; 
                                    }
                                }
                            }
                            else {
                                $message = "isi dulu yang benar";
                                echo "<script type='text/javascript'>
                                alert('$message');
                                </script>";
                            }
        }

        public function hapusJadwal() {
            session_start();
            $ujian = $_SESSION['idUjian'];
            $query = "DELETE FROM ujian WHERE id = $ujian";
            $this->db->executeNonSelectQuery($query);
            session_write_close();
            header("Location: jadwalUjianAdminUTS?semester=2");
        }

        public function editJadwal() {
            session_start();
            $matakuliah = $_SESSION['kodeMK'];
            $date = $_POST['tanggalUjian'];
            $time = $_POST['waktuUjian'];
            $datetime = $date.' '.$time;
            $datetime = date("Y-m-d H:i:s", strtotime($datetime));
            $ruangan = $_POST['ruangan'];
            $peserta = $_POST['peserta'];
            $durasi = $_POST['durasi'];
            $date = date_create($datetime); 
            date_add($date, date_interval_create_from_date_string($durasi." hours")); 
            $selesai = date_format($date, "Y-m-d H:i:s"); 
            $tipe = $_POST['tipe'];
            $tataCara = $_POST['tataCara'];
            $shift = $_POST['shift'];
            $dosen = $_POST['dosen'];
            $kebutuhan = $_POST['kebutuhan'];
            if (isset($ruangan)
                && isset($peserta) && isset($durasi) && isset($tipe)
                    && isset($tataCara) && isset($shift) && isset($dosen) 
                        && isset ($kebutuhan)
                && $ruangan != ""
                    && $peserta != "" && $durasi != "" && $tipe != ""
                        && $tataCara != "" && $shift != "" && $dosen != ""
                             && $kebutuhan != "") {
                                
                                $queryTemp = "SELECT id FROM mengajar WHERE kode LIKE '$matakuliah' AND dosen_id = '$dosen'";
                                $mengajar = $this->db->executeSelectQuery($queryTemp);
                                foreach ($mengajar as $key => $value) {
                                    $id = $value['id'];
                                    $idUjian = $_SESSION['idUjian'];
                                    
                                    $query = "UPDATE ujian 
                                    SET mengajar_id = '$id',
                                     tipe = '$tipe',
                                      tata_cara = '$tataCara',
                                       mulai = '$datetime',
                                        selesai = '$selesai',
                                         ruang = '$ruangan',
                                          shift = '$shift',
                                           kebutuhan_pengawas = '$kebutuhan',
                                            jumlahPeserta = '$peserta'
                                     WHERE id =  '$idUjian'";
                                    $this->db->executeNonSelectQuery($query);
                                    header('Location: jadwalUjianAdminUTS?semester=2');
                                }
                            }
                            session_write_close();
        }

        public function getJadwalUTS(){
            $query = "SELECT * FROM ujian WHERE tipe LIKE 'uts'";
            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            $mk = [];
            foreach ($query_result as $key => $value) {
                $mk = $this->getMK($value['mengajar_id']);
                foreach ($mk as $keyz => $valuez) {
                    $result[] = new Jadwal($value['id'],$valuez['kode'],$valuez['nama'],$value['mulai'],$value['ruang'],$value['tata_cara'],$valuez['dosen_id'],$value['jumlahPeserta'],$value['shift']);
                }
            }
            return $result;
        }

        public function getJadwalUAS(){
            $query = "SELECT * FROM ujian WHERE tipe LIKE 'uas'";
            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            $mk = [];
            foreach ($query_result as $key => $value) {
                $mk = $this->getMK($value['mengajar_id']);
                foreach ($mk as $keyz => $valuez) {
                    $result[] = new Jadwal($value['id'],$valuez['kode'],$valuez['nama'],$value['mulai'],$value['ruang'],$value['tata_cara'],$valuez['dosen_id'],$value['jumlahPeserta'],$value['shift']);
                }            
            }
            return $result;
        }
        
        public function setSemester() {
            session_start();
            $semester = $_GET['semester'];
            $_SESSION['semester'] = $semester;
            session_write_close();
        }

        public function getMK($id) {
            session_start();
            $semester = $_SESSION['semester'];
            $query = "SELECT matakuliah.kode, matakuliah.nama, md.dosen_id FROM (SELECT kode, dosen_id FROM mengajar WHERE id = $id AND semester_id = $semester) as md JOIN matakuliah on md.kode LIKE matakuliah.kode";
            $result = [];
            $result = $this->db->executeSelectQuery($query);
            session_write_close();
            return $result;
        }

        public function getAllMatakuliah() {
            $query = "SELECT * FROM matakuliah";
            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            $dosen = [];
            foreach ($query_result as $key => $value) {
                $dosen[] = $this->getSpecificDosen($value['kode']);
                $result[] = new Matakuliah($value['kode'],$value['nama'],$value['program_studi'],$value['tingkat'],$dosen);
            }
            return $result;
        }

        public function ambilJadwal() {
            $idUjian = $_GET['id'];
            $kodeMK = $_GET['kode'];
            $namaMK = $_GET['nama'];
            session_start();
            $_SESSION['idUjian'] = $idUjian;
            $_SESSION['kodeMK'] = $kodeMK;
            $_SESSION['namaMK'] = $namaMK;
            session_write_close();
        }

        // public function getChosenUjian() {
        //     session_start();
        //     $id = $_SESSION['matakuliah'];
        //     $query = "UPDATE"
        // }

        public function getAllDosen(){
            $query = "SELECT DISTINCT(dosen_id) FROM mengajar";
            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            $mk = [];
            foreach ($query_result as $key => $value) {
                $mk = $this->getMKDosen($value['dosen_id']);
                $result[] = new Dosen($value['dosen_id'], $mk);
            }
            return $result;
        }

        public function getMKDosen($id) {
            $query = "SELECT kode FROM mengajar WHERE dosen_id = $id";
            $result = [];
            $result = $this->db->executeSelectQuery($query);
            return $result;
        }

        public function getSpecificDosen($kode) {
            $query = "SELECT dosen_id FROM mengajar WHERE kode LIKE '$kode'";
            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            foreach ($query_result as $key => $value) {
                $id = $value['dosen_id'];
                $result[] = $id;
            }
            return $result;
        }

        public function getAllRuangan() {
            $query = "SELECT * FROM ruang";
            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            foreach ($query_result as $key => $value) {
                $result[] = new Ruang($value['kode'], $value['nama'], $value['kapasitas']);
            }
            return $result;
        }

        public function isMuat($kodeRuangan){
            $query = "SELECT SUM(jumlahPeserta) as 'jumlah', ruang.kapasitas FROM ujian join ruang on ujian.ruang = ruang.kode WHERE ujian.ruang='$kodeRuangan'";
            $query_result = $this->db->executeSelectQuery($query);
            $hasil=$query_result[0]['kapasitas']-$query_result[0]['jumlah'];
            return $hasil;
        }
    }
