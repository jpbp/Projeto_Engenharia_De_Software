// cria uma função home onde ao ser chamada pega a tag de id frame e altera o valor do atributo src
// "document" faz com que o javascript entre no DOM e getElementById procura o elemento com o id descrito dentro dos parentesses

function home() {
    document.getElementById("frame").src = "home.php";
}

function CadastrarBruxo() {
    document.getElementById("frame").src = "CadastrarCliente.php";
}

function BuscarBruxo() {
    document.getElementById("frame").src = "BuscarCliente.php";
}

function CadastrarProduto() {

    document.getElementById("frame").src = "CadastrarProduto.php";
}

function BuscarProduto() {
    document.getElementById("frame").src = "BuscarProduto.php";
}

function CadastrarPedido() {
    document.getElementById("frame").src = "CadastrarPedido.php";
}

function CadastrarFuncionario(){
    document.getElementById("frame").src = "CadastrarFuncionario.php";
}
function BuscarFuncionario(){
    document.getElementById("frame").src = "BuscarFuncionario.php";
}


$(document).ready(function() {
    $('li').click(function() {
        $('li.active').removeClass("active"); //aqui removemos a class do item anteriormente clicado para que possamos adicionar ao item clicado
        $(this).addClass("active"); //aqui adicionamos a class ao item clicado
    });
});