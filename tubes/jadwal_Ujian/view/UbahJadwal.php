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
                        <img id="avatImg" src="img/avatar.png">
                        <div class="container">
                            <p>Username</p>
                        </div>
                    </div>

                    <div id="userOption" onclick="optionsMenu()" style="display: none">
                        <div class="card" style="width: 5.5vw; padding: 10px; background-color: white">
                            <input id="userOptionButtonEdit" class="card" type="button" value="Edit"> <br>
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
                <td id="td1"><a id="linkHeader" href="index.php">Home</a> <span>></span><a id="linkHeader" href="JadwalUjian.php">Lihat Jadwal</a> <span>></span><a id="linkHeader" href="">Tambah Jadwal</a></td>
            </tr>
        </table>
    </div>
        <h2 style="text-align: center">Ubah Jadwal Ujian Informatika</h2>
    <div style="margin-top: 7vh">
        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px; ">
            <div style="width: 150px"><label>Mata Kuliah</label></div>
            <div><input type="text" name="mataKuliah" style="width: 150px"></div>
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Tanggal Ujian</label></div>
            <div><input type="date" name="tanggalUjian" style="width: 150px"></div>
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Peserta Ujian</label></div>
            <div><input type="number" name="tanggalUjian" style="width: 150px"></div>
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Durasi</label></div>
            <div><input type="text" name="tanggalUjian" style="width: 150px"></div>
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Ruangan</label></div>
            <div>
                <select style="width: 150px"  name="Ruangan" id="">
                    <option  value="10316">10316</option>
                    <option value="10317">10317</option>
                </select>
            </div>
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Kapasitas</label></div>
            <div><input type="text" name="tanggalUjian" style="width: 150px"></div>
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Tipe</label></div>
            <div>
                <select style="width: 150px" name="Tipe" id="">
                    <option value="UTS">UTS</option>
                    <option value="UAS">UAS</option>
                </select>    
            </div>
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Tata Cara Ujian</label></div>
            <div>
                <select style="width: 150px" name="TataCara" id="">
                    <option value="KelasOB">Kelas-Open Book</option>
                    <option value="KelasCB">Kelas-Close Book</option>
                    <option value="LabOB">Lab-Open Book</option>
                    <option value="LabCB">Lab-Close Book</option>
                </select>    
            </div>
        </div>

        <br>
        <div style="display: flex; flex-direction:row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Shift</label></div>
            <div>
                <select style="width: 150px" name="Shift" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>
        </div>
        
        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Dosen Pengawas</label></div>
            <div>
                <select style="width: 150px" name="DosenPengawas" id="">
                    <option value="Elisati">Elisati Hulu, M.T.</option>
                    <option value="Al">Alfaza Ranggana</option>
                </select>
            </div>
        </div>
        
        <br>

        <div style="display: flex; flex-direction: row; justify-content: center; width:1900px;">
            <div style="width: 150px"><label>Kebutuhan Pengawas</label></div>
                <div><textarea name="" id="" cols="16" rows="5"></textarea></div>
        </div>

        <br>

        <div style="display: flex; flex-direction: row; justify-content: space-around">
            <input type="submit" value="Ubah Jadwal">
        </div>
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