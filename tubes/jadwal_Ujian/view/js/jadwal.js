class Jadwal{
    constructor(){
        this.button = document.getElementById("tambahUjian");
        this.button.addEventListener("click",this.clicked.bind(this));
        this.form = document.querySelectorAll("form input");
        this.check = new inputRegister(this.form[0],this.form[1]);
    }

    clicked(event){
        if(!this.check.checkUser && !this.check.checkPass){
            alert("Salah satu field belum diisi!");
            event.preventDefault();
        }
    }
}