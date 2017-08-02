function EntregaModelo() {
    var endereco = DetalheCarro
    var modelo_carro = window.localStorage.getItem("carro_escolhido");
    var mensagem = "";
    jQuery("#sinal").html("aguarde, carregando");

    /*****************/
    jQuery("#descricaoUp").html("");
    /****************/
    $.ajax({
        type: "get",
        url: endereco,
        data: {modelo: modelo_carro, tipo: "modelo"},
        success: function (retorno)
        {
            var x = JSON.parse(retorno);
            console.log(x);
            var ano = x.ano;
            var marca = x.marca;
            var modelo = x.modelo;
            var descricao = x.descricao;
            var marcaInt = x.marcaInt;
            
            
            console.log("descricao "+descricao);
            jQuery("#modeloCarro").children("#ano").html(ano);
            jQuery("#modeloCarro").children("#marca").html(marca);
            jQuery("#modeloCarro").children("#descricao").html(""+descricao+"");
            jQuery("#modeloCarro").children("#modelo").html(modelo);
            /*******************************************************/
            jQuery("#modeloUp").val(modelo);
            jQuery("#marcaUp option[value=" + marcaInt + "]").prop("selected", "selected");
            jQuery("#anoUp").val(ano);
            jQuery("#descricaoUp").html(descricao);
            jQuery("#hiddenUp").val(modelo_carro);

        }

    })
}
 
jQuery("#sinal").html("");