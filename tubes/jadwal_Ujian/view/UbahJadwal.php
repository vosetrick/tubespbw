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
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
                        <form action="login" method="GET">
                        <input id="userOptionButtonLogout" class="card" type="submit" value="Logout">
                        </form>                        </div>
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
                <td id="td1"><a id="linkHeader" href="index.php">Home</a> <span>></span><a id="linkHeader" href="jadwalUjianAdminUTS">Lihat Jadwal</a> <span>></span><a id="linkHeader" href="">Tambah Jadwal</a></td>
            </tr>
        </table>
    </div>
        <h2 style="text-align: center">Ubah Jadwal Ujian Informatika</h2>
    <div style="margin-top: 7vh">
    <form action="editUjian" method="POST">
    <div style="margin-top: 7vh">
        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px; ">
            <div style="width: 150px"><label>Mata Kuliah</label></div>
            <span name="matakuliah" id="">
                <?php
                session_start();
                $kodeMK = $_SESSION['kodeMK'];
                $namaMK = $_SESSION['namaMK'];
                echo $kodeMK." - ".$namaMK;
                session_write_close();
                ?>
            </span>
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 75px"><label>Tanggal Ujian</label></div>
            <div>
                <input id="tanggal" type="date" name="tanggalUjian" style="width: 125px">
                <input id="waktu" type="time" name="waktuUjian" style="width: 90px">
            </div>
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Ruangan</label></div>
            <div>
                <select style="width: 150px"  name="ruangan" id="">
                    <?php foreach($resultR as $key => $valueR) {?>
                    <option value="<?php echo $valueR->getKodeRuangan(); ?>"> <?php echo $valueR->getKodeRuangan(); } ?> </option>
                </select>
            </div>
        </div>
        <br>
        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Peserta Ujian</label></div>
            <div><input type="number" name="peserta" style="width: 150px"></div>
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Durasi</label></div>
            <div><input type="text" name="durasi" style="width: 150px"></div>
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Tipe</label></div>
            <div>
                <select style="width: 150px" name="tipe" id="">
                    <option value="uts">UTS</option>
                    <option value="uas">UAS</option>
                </select>    
            </div>
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Tata Cara Ujian</label></div>
            <div>
                <select style="width: 150px" name="tataCara" id="">
                    <option value="Kelas - Open Book">Kelas - Open Book</option>
                    <option value="Kelas - Close Book">Kelas - Close Book</option>
                    <option value="Praktikum - Open File">Praktikum - Open File</option>
                    <option value="Praktikum - Close File">Praktikum - Close File</option>
                    <option value="Praktikum - Thrid Party">Praktikum - Thrid Party</option>
                    <option value="Tidak ada">Tidak ada</option>
                    <option value="Lainnya">Lainnya</option>
                </select>    
            </div>
        </div>

        <br>
        <div style="display: flex; flex-direction:row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Shift</label></div>
            <div>
                <select style="width: 150px" name="shift" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Dosen Pengawas</label></div>
            <div>
                <select style='width:150px' name='dosen'>
                <?php 
                foreach ($resultD as $key => $valueD) { ?>
                    <option value="<?php echo $valueD->getId(); ?>"> <?php echo $valueD->getId() ; ?> - <?php $arr = []; $arr = $valueD->getMK(); foreach($arr as $keyz => $valuez) { if (count($valuez) > 0){echo $valuez['kode']." , ";} else { echo $valuez['kode']; } };
                    } ?>
                </option>
                </select>
                
            </div>
        </div>
        
        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Kebutuhan Pengawas</label></div>
                <input name="kebutuhan" style="width: 150px" type="number">
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: space-around">
            <input id="tambahUjian" type="submit" name="tambahUjian" value="Ubah Jadwal">
        </div>
    </div>
    </form>
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