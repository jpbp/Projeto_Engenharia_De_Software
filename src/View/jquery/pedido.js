$(document).ready(function() {
    $('.js-example-basic-single').select2();
    $(":radio").bind("click", function() {
        if ($(this).val() == "enderecoCliente") {
            $("#inputCep,#inputCep, #inputLogradouro,#inputNumero,#inputCidade,#inputEstado,#inputComplemento").attr({ readonly: true }); // Desabilita a edição
        } else {
            $("#inputCep, #inputLogradouro,#inputNumero,#inputCidade,#inputEstado,#inputComplemento").attr({ readonly: false }); // Habilita a edição
        }
    });
    $(".btnExcluir").click(function() {
        $(this).parents('tr').remove();
    });
});