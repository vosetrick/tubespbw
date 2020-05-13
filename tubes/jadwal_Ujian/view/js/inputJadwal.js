class inputJadwal{
    constructor(){
        this.checkTanggal = false;
        this.checkWaktu = false;
        this.peserta = false;
        this.durasi = false;
        this.kebutuhan = false;
    }

    validateUsername(){
        let length = this.username.value.length;
        let checked = true;
        for(let i = 0 ; i<length;i++){
            if(this.username.value[i]==" "){
                checked = false;
                this.username.classList.add("backgroundCekInput");
            }
        }
        if(length>=8 && checked){
            this.username.classList.remove("backgroundCekInput");
            this.checkUser=true;
        }else{
            this.username.classList.add("backgroundCekInput");
            this.checkUser=false;
        }
        if(length==0){
            this.username.classList.remove("backgroundCekInput");
            this.checkUser=false;
        }
    }

    validatePassword(){
        if(this.password.value.length>=8){
            this.password.classList.remove("backgroundCekInput");
            this.checkPass = true;
        }else{
            this.password.classList.add("backgroundCekInput");
            this.checkPass = false;
        }
        if(this.password.value.length==0){
            this.password.classList.remove("backgroundCekInput");
            this.checkPass = false;
        }
    }
}