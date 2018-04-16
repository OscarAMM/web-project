var accept = document.getElementById('accept');
var cancel = document.getElementById('cancel');

accept.addEventListener("click", function () {
    var name = document.getElementById('name').value;
    var pass = document.getElementById('pass').value;
    if (name == "" && pass == ""){
        alert("¡Tienes que ingresar tus datos!")
    }else if(name == name.value && pass == ""){
        alert("¡Ingresa los datos completos!")
    } else if(name == "" && pass == pass.value){
        alert("¡Tientes que ingresar tus datos!");
    }
});

cancel.addEventListener("click", function(){
    window.location.href = "index.php";
});