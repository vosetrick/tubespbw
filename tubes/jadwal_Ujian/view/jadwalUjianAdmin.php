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
                            <p><?php echo $user?></p>
                            <p><?php echo $status?></p>
                        </div>
                    </div>

                    <div id="userOption" onclick="optionsMenu()" style="display: none">
                        <div class="card" style="width: 5.5vw; padding: 10px; background-color: white">
                        <form action="editProfile" method="POST">
                            <input id="userOptionButtonEdit" class="card" type="submit" value="Edit"> <br>
                        </form>
                            <input id="userOptionButtonLogout" class="card" type="button" value="Logout">
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
                <td id="td1"><a id="linkHeader" href="index">Home>Lihat Jadwal</a></td>
            </tr>
        </table>
    </div>
    <!-- ------------------------------------------------------ -->
    <div style="margin: 5px">
        <h1 style=" display: inline-block; margin-left: 40.5%">Jadwal Ujian Informatika</h1>
        <select name="Semester" id="" style="display: inline-block; float: right; margin:3vh">
            <option value="Semester 1">Semester 1</option>
            <option value="Semester 2">Semester 2</option>
        </select>
    </div>
    <br>
    <div style="margin-left: 47.2%;">
        <h2 style="display: inline-block"><a id="" href="<?php
                session_start();
                $status = $_SESSION['status'];
                if($status=="admin"){
                    echo "jadwalUjianAdminUTS";
                }
                else{
                    echo "jadwalUjianUserUTS";
                }
                session_write_close();
                ?>">UTS</a>
        </h2> <h2 style="display: inline-block">|</h2> 
        <h2 style="display: inline-block"><a id="" href="<?php
                session_start();
                $status = $_SESSION['status'];
                if($status=="admin"){
                    echo "jadwalUjianAdminUAS";
                }
                else{
                    echo "jadwalUjianUserUAS";
                }
                session_write_close();
                ?>">UAS</a></h2>
        <form action="tambahJadwal" method="POST">
            <input type="submit" name="tambahJadwal" value="Tambah Jadwal">
        </form>
    </div>
    <br>
    <div style="display: block; ">
        <table style="border: 1px solid black; margin-left: 50%; margin: auto; border-collapse: collapse">

            <tr>
                
                <th id="tableJadwal" >Kode Matakuliah</th>
                <th id="tableJadwal" >Nama MataKuliah</th>
                <th id="tableJadwal" >Tanggal Ujian</th>
                <th id="tableJadwal" >Ruangan</th>
                <th id="tableJadwal" >Tipe Ujian</th>
                <!-- <th id="tableJadwal" >Kebutuhan Pengawas</th> -->
                <th id="tableJadwal" >Dosen Pengawas</th>
                <th id="tableJadwal">Kapasitas</th>
                
            </tr>
            <?php
                foreach ($result as $key => $value) {
                    echo "<tr>
                    <td id=\"tableJadwal\" >".$value->getKodeMK()."</td>
                    <td id=\"tableJadwal\" >".$value->getNamaMK()."</td>
                    <td id=\"tableJadwal\" >".$value->getTanggal()."</td>
                    <td id=\"tableJadwal\" >".$value->getRuangan()."</td>
                    <td id=\"tableJadwal\" >".$value->getTipe()."</td>
                    <td id=\"tableJadwal\" >".$value->getDosen()."</td>
                    <td id=\"tableJadwal\" >".$value->getKapasitas()."</td>
                    </tr>";
                }
            ?>
        </table>
    </div>
</body>
<script>
    var buttonUser = false; //button untuk optionsMenu


    // Hide show tombol logout dan edit di user 
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