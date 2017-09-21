jQuery("body").delegate(".AtualizaDados", "click", function () {
    jQuery(".mensagem_retorno").hide();
jQuery("#sinal").html("aguarde, carregando");
    console.log("\n \b " + AtualizaDados);
    var form = jQuery("#Formulario_Update").serialize();
    $.ajax({
        type: "GET",
        url: AtualizaDados,
        data: {dados: form, tipo: "atualiza"},
        success: function (json) {
            var jsonx = JSON.parse(json);
            console.log(jsonx);
            if (jsonx.sucesso == 1) {
                
                jQuery(".mensagem_retorno").show(100);
                jQuery(".mensagem_retorno").html("alteração realizada com sucesso").delay("4000");
                jQuery(".mensagem_retorno").hide(300);
                jQuery("#sinal").html("aguarde, carregando");
            }
        }
    });
    return false;
});