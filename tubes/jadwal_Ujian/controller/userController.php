<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/user.php";

class userController{
	protected $db;

	public function __construct(){
		$this->db = new MySQLDB("localhost","root","","ftis_akademik_a");
	}

	public function viewLogin() {
		$result = [];
        return View::createView('login.php', $result);
	}

	public function viewRegister() {
		$result = [];
        return View::createView('register.php', $result);
	}
	
	public function viewEdit() {
		$result = [];
		return View::createView('editProfile.php', $result);
	}

	public function wrongLogin()
    {
		echo "Wrong Username / Password";
		$message = "salah username atau passnya gimana sih";
                                echo "<script type='text/javascript'>
                                alert('$message');
                                </script>";
        header("Refresh: 0,URL=login");
    }

	public function login()
    {
		$username = $_POST['usernameLogin'];
		$password = $_POST['passwordLogin'];
        if ($username != "" && $password != "" && isset($username) && isset($password)) {
            $username = $this->db->escapeString($username);
			$password = $this->db->escapeString($password);
			// $hashPass = md5($password);
			$query = "SELECT * FROM user WHERE username LIKE '$username' AND password LIKE '$password'";
			$queryRes = $this->db->executeSelectQuery($query);
			$id = "";
			$status = "";
			foreach ($queryRes as $key => $value) {
				$id = $queryRes[0]['pengawas_id'];
				$status = $queryRes[0]['role'];
			}
			if (count($queryRes) == 0) {
				// echo count($queryRes);
				$this->wrongLogin();
			} else {
				session_start();
				$_SESSION['currUsername'] = $username;
				$_SESSION['status'] = $status;
				$_SESSION['idMember'] = $id;
				session_write_close();
				if ($status == 'admin') {
					header('Location: index');
				}
				else {
					header('Location: index');
				}
			}
        }
    }

	public function ubahPassword() {
		session_start();
		$username = $_SESSION['currUsername'];
		$oldPassword = $_POST['oldPass'];
		$newPassword = $_POST['newPass'];
		if (isset($oldPassword) && isset($newPassword) && $newPassword != "" && $oldPassword != "") {
			$query = "UPDATE user SET password = '$newPassword' WHERE username = '$username'";
			$this->db->executeNonSelectQuery($query);
			header('Location: index');
		}
		session_write_close();
	}

	public function register()
    {
		$username = $_POST['usernameRegis'];
		$password = $_POST['passwordRegis'];
        if (isset($username) && isset($password) && $username != "" && $password != "") {
            $username = $this->db->escapeString($username);
			$password = $this->db->escapeString($password);
			// $hashPass = md5($password);
			$query = "INSERT INTO user (username,password,role) VALUES ('$username','$password','mahasiswa')";
			$this->db->executeNonSelectQuery($query);
			header('Location: login');
        }
    }
}


?>