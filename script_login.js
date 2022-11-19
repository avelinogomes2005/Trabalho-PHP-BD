email = document.getElementById("email")
senha = document.getElementById("senha")

emailPraEntrar = "email@email.com"
senhaPraEntrar = "1234"

function entrar() {
    if(email.value == "" &&
        senha.value == ""){
            alert("Preencha os campos")
    }
    else {
        if(email.value === emailPraEntrar &&
            senha.value === senhaPraEntrar){
                window.location.href = "funcionario_dividas.php";
        } else {
            alert("senha ou email inválido")
            email.value = ""
            senha.value = ""
        }
    }
}
