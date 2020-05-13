class Login{
    constructor(){
        this.button = document.getElementById("buttonLogin");
        this.button.addEventListener("click",this.clicked.bind(this));
        this.form = document.querySelectorAll("form input");
        this.check = new input(this.form[0],this.form[1]);
    }

    clicked(event){
        if(!this.check.user && !this.check.pass){
            alert("Username / Password ada yang salah");
            event.preventDefault();
        }
    }
}