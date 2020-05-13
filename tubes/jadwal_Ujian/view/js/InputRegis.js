class inputRegister{
    constructor(username,password){
        this.username = username;
        this.username.addEventListener("keyup",this.validateUsername.bind(this));
        
        this.password = password;
        this.password.addEventListener("keyup",this.validatePassword.bind(this));

        // this.confirmPassword = confirmPassword;
        // this.nama.addEventListener("keyup",this.validateConfirmPassword.bind(this));

        this.checkUser = false;
        this.checkPass = false;
        // this.checkConPass = false;
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

    // validateConfirmPassword() {
    //     pass = this.password.value;
    //     confirmPass = this.confirmPassword.value;
    //     if(confirmPass.localeCompare(pass) == -1) {
    //         this.confirmPassword.classList.add("backgroundCekInput");
    //         this.checkConPass = false;
    //     }
    //     if(confirmPass.localeCompare(pass) == 0) {
    //         this.confirmPassword.classList.remove("backgroundCekInput");
    //         this.checkConPass = true;
    //     }
    // }
}