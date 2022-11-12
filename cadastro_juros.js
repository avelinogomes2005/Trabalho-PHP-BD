
$("#pedidos").hide();
let montante = $("#total-montante")
let tempo = $("#tempo-dias")
let capital = $("#capital-reais")
let juros = $("#juros")

$("#solicitar").click(function () {
    $("#pedidos").show(1000, "swing");
    $("#pedidos").css("display", "flex");
});
$("#cancelar").click(function () {
    $("#pedidos").hide(1000, "swing");
})

function update() {
    console.log(juros.val())
    console.log(tempo.val())
    console.log(capital.val)
    if (juros.val() == "c") {
        montante.val(String(Number(capital.val()) * ((1 + 0.05) ^ Number(tempo.val())))).change();
    }
    else if (juros.val() == "s") {
        montante.val(String(Number(capital.val()) * Number(tempo.val()) * 0.09)).change();
    }
}

let button = document.getElementById("btn-concluir-cadastro-cliente")

button.addEventListener('click', () => {

    let emprestimo = {}

    if ( montante.val() == "" ||
        tempo.val() == "" ||
        capital.val() == "" ||
        juros.val() == ""
    ) {
        alert("Por favor preencha todos os campos")
    } else {
        emprestimo.nome = document.getElementById("nomi").innerHTML.replace(/\n/g, "");
        emprestimo.id = document.getElementById("idzinho").innerHTML.replace(/\n/g, "");
        emprestimo.montante = montante.val().replace(/^\d/g, "")
        emprestimo.tempo = tempo.val().replace(/^\d/g, "")
        emprestimo.capital = capital.val().replace(/^\d/g, "")
        emprestimo.juros = juros.val()

        var data = new FormData();
        data.append("data", JSON.stringify(emprestimo));
        var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
        xhr.open('post', 'banco_de_dividas.php', true);
        xhr.send(data);

        alert("Empréstimo solicitado")
    }

}
)
