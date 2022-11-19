function mascaraCPF(mascaraInput) {
    const tamanhoInput = document.getElementById('cpf').maxLength
    let valorInput = document.getElementById('cpf').value
    //console.log('tamanho máximo:', tamanhoInput, 'valor input', valorInput)
    const mascara = {
        cpf: valorInput.replace(/[^\d]/g, "").replace(/^(\d{3})(\d{3})(\d{3})(\d{2}).*/, '$1.$2.$3-$4')
    };

    if (valorInput.length == tamanhoInput) {
        document.getElementById('cpf').value = mascara[mascaraInput]
    }
}

function mascaraTel(mascaraInput) {
    const tamanhoInput = document.getElementById('tel').maxLength
    let valorInput = document.getElementById('tel').value
    //console.log('tamanho máximo:', tamanhoInput, 'valor input', valorInput)
    const mascara = {
        tel: valorInput.replace(/[^\d]/g, "").replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3')
    };

    if (valorInput.length == tamanhoInput) {
        document.getElementById('tel').value = mascara[mascaraInput]
    }
}

function mascaraUni(id){
    const tamanhoInput = document.getElementById(id).maxLength
    let valorInput = document.getElementById(id).value
    
    //console.log('tamanho máximo:', tamanhoInput, 'valor input', valorInput)
    const mascara = {
        tel: valorInput.replace(/[^\d]/g, ""),
        cpf: valorInput.replace(/[^\d]/g, "").replace(/^(\d{3})(\d{3})(\d{3})(\d{2}).*/, '$1.$2.$3-$4'),
        tel: valorInput.replace(/[^\d]/g, "").replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3'),
        dinheiro: valorInput.replace(/[^\d]/g, "").replace(/[',\.]/g, "")
    };


    if (valorInput.length == tamanhoInput) {
        document.getElementById(id).value = mascara[id]
    }
}

function cancelarCadastro(){
    document.getElementById("nome").value = ""  
    document.getElementById("tel").value = ""
    document.getElementById("email").value = ""
    document.getElementById("senha").value = ""
    document.getElementById("endereco").value = ""
    document.getElementById("cpf").value = ""
    window.location.href = "cliente_login.php"
}




$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

/*
$(document).ready(function() {

    $("tbody tr").click(function(){
        console.log("Clicakdo")
    })

});*/
