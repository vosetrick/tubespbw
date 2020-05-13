var username = document.getElementById("usernameRegis");
var auth = document.getElementById("auth");

username.addEventListener('keyup', function(){
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status == 200){
            auth.innerHTML = xhr.responseText;
            if(username.value.length>=8 && auth.textContent == "Username Bisa Digunakan"){
                auth.style.color = 'green';
            }else{
                auth.style.color='red';
            }
            if(username.value == "" || username.value.length<8){
                auth.textContent="";
            }
        }
    }

    xhr.open("GET",'controller/services/checkUsername.php?usr='+ username.value, true);
    xhr.send();
})