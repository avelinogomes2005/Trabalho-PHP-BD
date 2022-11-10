
let button = document.getElementById("btn-concluir-cadastro-cliente")

button.addEventListener('click', () => {

    let Cliente = {}
        let nome =$("#nome");
        let cpf = $("#cpf");
        let endereco = $("#endereco");
        let tel = $("#tel");
        let email = $("#email");
        let senha = $("#senha");

    if (nome.val() == "" ||
        cpf.val() == "" ||
        endereco.val() == "" ||
        tel.val() == "" ||
        email.val() == "" ||
        senha.val() == ""
    ) {
        alert("Por favor preencha todos os campos")
    }else if(
        tel.val().replace(/[^0-9]/g, "").length != 11 ||
        cpf.val().replace(/[^0-9]/g, "").length != 11 
    ){
        alert("Por favor preencha corretamente os dados do telefone ou do cpf");
    }
     else {
        Cliente.nome = nome.val();
        Cliente.cpf = cpf.val().replace(/[^0-9]/g, "");
        Cliente.endereco = endereco.val();
        Cliente.tel = tel.val().replace(/[^0-9]/g, "");
        Cliente.email = email.val();
        Cliente.senha = senha.val();



        var data = new FormData();
        data.append("data", JSON.stringify(Cliente));
        var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
        xhr.open('post', 'banco_de_dados.php', true);
        xhr.send(data);

        alert("Cadastro realizado! Agora você pode entrar na tela de login")
    }

}
)
