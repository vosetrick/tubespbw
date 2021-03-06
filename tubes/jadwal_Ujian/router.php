<?php
	$url = $_SERVER['REDIRECT_URL'];
	$baseURL = '/tubespbw/tubes/jadwal_ujian';
	
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		switch ($url) {
			case $baseURL.'/login':
                require_once "controller/userController.php";
                $user = new userController();
                echo $user->viewLogin();
				break;
				
			case $baseURL.'/register':
				require_once "controller/userController.php";
				$user = new userController();
				echo $user->viewRegister();
				break;

			case $baseURL.'/index':
				require_once "controller/jadwalController.php";
				$home = new jadwalController();
				echo $home->viewHome();
				break;

			// case $baseURL.'/list':
			// 	require_once "controller/jadwalController.php";
			// 	$list = new jadwalController();
			// 	echo $list->list();
			// break;

			case $baseURL.'/jadwalUjianUserUTS':
				require_once "controller/jadwalController.php";
				$jadwalUjian = new jadwalController();
				$jadwalUjian->setSemester();
				echo $jadwalUjian->viewJadwalUjianUserUTS();
				break;

			case $baseURL.'/jadwalUjianAdminUTS':
				require_once "controller/jadwalController.php";
				$jadwalUjian = new jadwalController();
				$jadwalUjian->setSemester();
				echo $jadwalUjian->viewJadwalUjianAdminUTS();
				break;

			case $baseURL.'/jadwalUjianUserUAS':
				require_once "controller/jadwalController.php";
				$jadwalUjian = new jadwalController();
				$jadwalUjian->setSemester();
				echo $jadwalUjian->viewJadwalUjianUserUAS();
				break;
	
			case $baseURL.'/jadwalUjianAdminUAS':
				require_once "controller/jadwalController.php";
				$jadwalUjian = new jadwalController();
				$jadwalUjian->setSemester();
				echo $jadwalUjian->viewJadwalUjianAdminUAS();
				break;
			
			case $baseURL.'/ubahJadwal':
				require_once "controller/jadwalController.php";
				$change = new jadwalController();
				$change->ambilJadwal();
				echo $change->viewChange();
				break;

			case $baseURL.'/hapusJadwal':
				require_once "controller/jadwalController.php";
				$change = new jadwalController();
				$change->ambilJadwal();
				$change->hapusJadwal();
				break;
			
			default:
				echo '404 Not Found';
				break;
		}
	}else if($_SERVER["REQUEST_METHOD"] == "POST"){
		switch ($url) {
			case $baseURL.'/register':
                require_once "controller/userController.php";
                $userRegis = new userController();
                $userRegis->register();
				break;
				
			case $baseURL.'/editProfile':
				require_once "controller/userController.php";
				$edit = new userController();
				echo $edit->viewEdit();
				break;

			case $baseURL.'/ubahPassword':
				require_once "controller/userController.php";
				$pass = new userController();
				echo $pass->ubahPassword();
				break;

			case $baseURL.'/login':
				require_once "controller/userController.php";
				$userLogin = new userController();
				$userLogin->login();
				break;

			case $baseURL.'/tambahJadwal':
				require_once "controller/jadwalController.php";
				$lihat = new jadwalController();
				echo $lihat->viewTambahJadwal();
				break;

			case $baseURL.'/tambahUjian':
				require_once "controller/jadwalController.php";
				$tambah = new jadwalController();
				$tambah->insertJadwal();
				break;


			case $baseURL.'/editUjian':
				require_once "controller/jadwalController.php";
				$change = new jadwalController();
				$change->editJadwal();
				break;
			
			default:
				echo '404 Not Found';
				break;
		}
	}
		
?>