<?php
    session_start();
    $user = $_SESSION['currUsername'];
    $status = $_SESSION['status'];
    if($status=="admin"){
        $status = "Admin";
    }
    else{
        $status = "Mahasiswa";
    }
    session_write_close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <script src="view/js/ajaxEditPassword.js"defer></script>
</head>
<body>
    <div class="atasan">
        <table style="width: 100%">
            <tr>
                <td id="td1"> </td>
                <td id="tdTengah">
                    <h1 id="tulisanJadwal">SI Jadwal Ujian Informatika</h1>
                </td>
                <td id="td2">
                    <div onclick="optionsMenu()" class="card" style="float:right; padding-right:2.2vw; box-shadow:none;">
                        <div class="container">
                            <p id="username"><?php echo $user?></p>
                            <p><?php echo $status?></p>
                        </div>
                    </div>

                    <div id="userOption" onclick="optionsMenu()" style="display: none">
                        <div class="card" style="width: 5.5vw; padding: 10px; background-color: white">
                        <form action="editProfile" method="POST">
                            <input id="userOptionButtonEdit" class="card" type="submit" value="Edit"> <br>
                        </form>   
                        <form action="login" method="GET">
                        <input id="userOptionButtonLogout" class="card" type="submit" value="Logout">
                        </form>
                        </div>
                    </div>

                    <!-- Modal Logout -->
                    <div class="modal" id="modalLogout">
                        <div style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.9)">
                            <span class="close">&times;</span>
                            <div class="modal-content">
                                <div class="card" id="isiModalLogout" style="background-color: white; width: 100%; height: 20vh; text-align: center; margin-top: 30vh;">
                                    <span style="margin-top:100px">Attention</span>
                                    <div class="container" style="margin:3%">
                                        <span>Are you sure you want to logout?</span>
                                    </div>
                                    <div>
                                        <div style="width:50%; height:100%; border: 1px solid black; text-align: center; display: inline-block; overflow: hidden;">
                                            <input type="button" value="No" style="height: 100%; width: 50%">
                                        </div>
                                        <div style="width:49.5%; height:20%; border: 1px solid black; text-align: center; display: inline-block; overflow: visible; float: inline-end">
                                            <input type="button" value="Yes" style="height: 100%; width: 50%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td id="td1"><a id="linkHeader" href="index">Home</a><span></span>
                <span>></span><a id="linkHeader" href="#">Edit Profile</a></td>
            </tr>
        </table>
    </div>
    <form action="ubahPassword" method="POST">
        <h2 style="text-align: center">Edit Profile</h2>
    <div style="margin-top: 7vh">

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Username</label></div>
            <div><span><?php
                session_start();
                $uname = $_SESSION['currUsername'];
                echo $uname;
                session_write_close();
            ?></span></div>
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Old Password</label></div>
            <div><input id="oldPas" type="password" name="oldPass" style="width: 150px"></div>
            <span id="auth"></span>
        </div>
        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>New Password</label></div>
            <div><input type="password" name="newPass" style="width: 150px"></div>
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: space-around">
            <input id="ConfirmEdit" type="submit" name="EditUser" value="Confirm Edit">
        </div>

        <br>
</div>
    </form>
    <div style="display: flex; flex-direction: row; justify-content: space-around">
            <button onclick="window.location.href = 'index'">BACK</button>
        </div>
</body>

<script>
    var buttonUser = false; //button untuk optionsMenu


    // function test () {
    //     var iseng = document.getElementById("tanggal").value;
    //     var iseng2 = document.getElementById("waktu").value;
    //     var $datetime = iseng.' '.
    //     $datetime = date("Y-m-d H:i:s",strtotime($datetime));
    //     console.log(iseng);
    //     console.log(iseng2);     
    // }


    // Hide show tombol logout dan edit di user 
    function cariRuangan() {
        document.getElementById("listDosen").innerHTML = "<" + "?php" + " $arr = []; arr[]=$resultMK->getRuangan(); foreach($arr as $key => $value){ echo '$value'; } ?>";
    }

    function optionsMenu() {
        if (buttonUser == false) {
            document.getElementById("userOption").style.display = "block";
            buttonUser = true;
        } else {
            document.getElementById("userOption").style.display = "none";
            buttonUser = false;
        }
    }
    var modalLogout = document.getElementById("modalLogout");
    var btnLogout = document.getElementById("userOptionButtonLogout");

    btnLogout.onclick = function() {
        modalLogout.style.display = "block"
    }
    // Close Button modal
    var btnClose = document.getElementsByClassName("close")[0];
    btnClose.onclick = function() {
        modalLogout.style.display = "none";
    }
    // --------------------------------------------------------------------------------------------
</script>

</html>