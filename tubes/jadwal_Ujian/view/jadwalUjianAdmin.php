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
                <td id="td1"><a id="linkHeader" href="index">Home>Lihat Jadwal</a></td>
            </tr>
        </table>
    </div>
    <!-- ------------------------------------------------------ -->
    <div style="margin: 5px">
        <h1 style=" display: inline-block; margin-left: 40.5%">Jadwal Ujian Informatika</h1>
        <form id="formSemester" method="GET">
            <select name="semester" onchange=submit() id="" style="display: inline-block; float: right; margin:3vh">
                <?php
                    session_start();
                    $semester = $_SESSION['semester'];
                    if ($semester == 1) {
                        echo '
                        <option value="1" selected>Semester 1</option>
                        <option value="2">Semester 2</option>
                        ';
                    } else {
                        echo '
                        <option value="1">Semester 1</option>
                        <option value="2" selected>Semester 2</option>
                        ';
                    }
                    session_write_close();
                ?>
            </select>
        </form>
    </div>
    <br>
    <div style="margin-left: 47.2%;">
        <h2 style="display: inline-block"><a id="tombolUts" href="<?php
                session_start();
                $status = $_SESSION['status'];
                $semester = $_SESSION['semester'];
                if($status=="admin"){
                    echo "jadwalUjianAdminUTS?semester=".$semester;
                }
                else{
                    echo "jadwalUjianUserUTS?semester=".$semester;
                }
                session_write_close();
                ?>">UTS</a>
        </h2> <h2 style="display: inline-block">|</h2> 
        <h2 style="display: inline-block"><a id="tombolUas" href="<?php
                session_start();
                $status = $_SESSION['status'];
                $semester = $_SESSION['semester'];
                if($status=="admin"){
                    echo "jadwalUjianAdminUAS?semester=".$semester;
                }
                else{
                    echo "jadwalUjianUserUAS?semester=".$semester;
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
                <th id="tableJadwal">No</th>
                <th id="tableJadwal" >Kode Matakuliah</th>
                <th id="tableJadwal" >Nama MataKuliah</th>
                <th id="tableJadwal" >Tanggal Ujian</th>
                <th id="tableJadwal" >Ruangan</th>
                <th id="tableJadwal" >Tipe Ujian</th>
                <!-- <th id="tableJadwal" >Kebutuhan Pengawas</th> -->
                <th id="tableJadwal" >Dosen Pengawas</th>
                <th id="tableJadwal">Kapasitas</th>
                <th id="tableJadwal">Edit Jadwal</th>
                <th id="tableJadwal">Hapus Jadwal</th>
                
            </tr>
            <?php
                foreach ($result as $key => $value) {
                    echo "<tr>
                    <td id=\"tableJadwal\" >".($value->getId()-9)."</td>
                    <td id=\"tableJadwal\" >".$value->getKodeMK()."</td>
                    <td id=\"tableJadwal\" >".$value->getNamaMK()."</td>
                    <td id=\"tableJadwal\" >".$value->getTanggal()."</td>
                    <td id=\"tableJadwal\" >".$value->getRuangan()."</td>
                    <td id=\"tableJadwal\" >".$value->getTipe()."</td>
                    <td id=\"tableJadwal\" >".$value->getDosen()."</td>
                    <td id=\"tableJadwal\" >".$value->getKapasitas()."</td>
                    <td id=\"tableJadwal\" >"."
                    <form action=\"ubahJadwal\" method=\"GET\">
                    <input type=\"submit\"value=\"EDIT\">
                    <input type=\"hidden\" name=\"id\" value=".$value->getId()."></input>
                    <input type=\"hidden\" name=\"kode\" value='".$value->getKodeMK()."'></input>
                    <input type=\"hidden\" name=\"nama\" value='".$value->getNamaMK()."'></input>
                    </form></td>
                    <td id=\"tableJadwal\"><form action=\"hapusJadwal\" method=\"GET\">
                    <input type=\"submit\"value=\"HAPUS\">
                    <input type=\"hidden\" name=\"id\" value=".$value->getId()."></input>
                    <input type=\"hidden\" name=\"kode\" value='".$value->getKodeMK()."'></input>
                    <input type=\"hidden\" name=\"nama\" value='".$value->getNamaMK()."'></input>
                    </form></td></tr>";
                }
            ?>
        </table>
    </div>
</body>
<script>
    var buttonUser = false; //button untuk optionsMenu

    

    function submit(){
       document.getElementById("formSemester").submit();      
    }

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