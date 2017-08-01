jQuery(document).ready(function () {

    jQuery("#Formulario_Cadastro").submit(
            function ()
            {

                var endereco = caminho;
                var dados = jQuery('#Formulario_Cadastro').serialize();
                var retorno = 1;
                //endereco = endereco;//endereco = endereco + "?dados=" + dados
                console.log(endereco);
                $.ajax({
                    type: "POST",
                    url: caminho,
                    data: {
                        dados: dados,
                        modelo: $('#modelo').val(),
                        ano: $("#ano").val(),
                        descricao: $("#descricao").val(),
                        marca: $("#marca").val(),
                        tipo:"salva"
                    },
                    success: function (retorno) {
                        console.log("info recebido "+retorno);
                        var retorno = jQuery.parseJSON(retorno);
                        var resposta = retorno.retorno;
                        console.log("x " + retorno.retorno);
                        if (retorno.retorno.acerto == "1")
                        {
                            jQuery(".submeteDados").val("salvo com sucesso");
                        } else
                        {
                            jQuery(".submeteDados").val("problemas para salvar");
                        }
                    }
                });
                return false;
            }
    );
});
