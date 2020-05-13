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
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    <!-- Header -->
    <div class="atasan">    
        <table style="width: 100%">
            <tr>
                <td id="td1"> </td>
                <td id="tdTengah"><h1 id="tulisanJadwal">SI Jadwal Ujian Informatika</h1></td>
                <td id="td2">
                    <div onclick="optionsMenu()" class = "card" style="float:right; padding-right:2.2vw; box-shadow:none;">
                        <div class="container">
                            <p><?php echo $user?></p>
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
                    <div class="modal" id="modalLogout" >
                        <div style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.9)">
                            <span class="close">&times;</span>
                            <div class="modal-content">
                                <div class="card" id="isiModalLogout"style="background-color: white; width: 100%; height: 20vh; text-align: center; margin-top: 30vh;">
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
                <td id="td1"><a id="linkHeader" href="index">Home</a></td>
            </tr>
        </table>
    </div>
        <!-- Navigation di kanan -->
        <table id="rightNav">
            <!-- Angka mungkin akan berubah ketika ujian ditambah -->
            <tr>
                <td><h1 style="text-align:center;">5 Ujian Terdekat</h1> </td>
            </tr>
            <!-- Ujian-ujian yang terdekat -->
            <?php
                foreach ($result as $key => $value) {
                    echo "
                    <tr id=tr1>
                        <td>
                            <button style=background-color: white; border: none;>
                                <div class=card id=cardUjian>
                                <span>".$value->getMulai()." - ".$value->getSelesai()."</span> 
                                    <div class=container>
                                        <span>".$value->getKodeMK()." - ".$value->getNamaMK()."</span>
                                        <br><p> Ruangan : ".$value->getRuangan()."</p>
                                        </div>
                                </div>
                            </button>
                        </td>
                    </tr>
                    ";
                }
            ?>
        </table>
    </div>
    <!-- lihat jadwal -->
    
    <div>
        <h1 style="text-align: center">SELAMAT DATANG DI WEBSITE SISTEM INFORMASI UJIAN INFORMATIKA</h1>
        <table style="width: 70%">
            <tr id="tr2" style="text-align: center">
                <td id="td3"> </td>
                    <div class="card">
                        <td id="tdTengah" style="border: 1px solid black">
                            <div class="container">
                                <?php
                                    session_start();
                                    $status = $_SESSION['status'];
                                    $semester = $_SESSION['semester'];
                                    if($status=="admin"){
                                        echo "<button onclick=\"window.location.href='jadwalUjianAdminUTS?semester=".$semester."'\">";
                                    }
                                    else{
                                        echo "<button onclick=\"window.location.href='jadwalUjianUserUTS?semester=".$semester."'\">";
                                    }
                                    session_write_close();
                                ?>
                                <span>Lihat Jadwal Lengkap</span></button>
                            </div>
                        </td>
                </div>
            </tr>
        </table>

    </div>
    
</body>

<script>
    var buttonUser = false;//button untuk optionsMenu


    // Hide show tombol logout dan edit di user 
    function optionsMenu(){
        if(buttonUser == false ){
            document.getElementById("userOption").style.display = "block";
            buttonUser = true;
        }
        else{
            document.getElementById("userOption").style.display = "none";
            buttonUser = false;
        }
    }
    var modalLogout = document.getElementById("modalLogout");
    var btnLogout   = document.getElementById("userOptionButtonLogout");

    btnLogout.onclick = function(){
        modalLogout.style.display = "block"
    }
    // Close Button modal
    var btnClose = document.getElementsByClassName("close")[0];
    btnClose.onclick = function(){
        modalLogout.style.display = "none";
    }
//----------------------------------------------------------------------------- HEADER
</script>
</html>