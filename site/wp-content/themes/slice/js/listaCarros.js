$("#lista").click(function () {
    jQuery("#informacao_lista").html("aguarde, carregando");
    $("#listaCarros").children("li").remove();
    $.ajax({
        type: "get",
        url: listaCarros,
        data:{"tipo":"lista"},
        success: function (retorno) {
            console.log(listaCarros);
            console.log(retorno);
            var retorno = JSON.parse(retorno);
            retorno.forEach(function (o, index) {
                console.log(o.titulo);
                console.log(o.id);
                console.log("\n");
                $("#listaCarros").prepend("<li class='list-group-item '><span>"+o.id+"</span><a class='carrosListados' href='#descricao'>" + o.titulo + "</a></li>");
            });
            console.log(retorno);
        }
    })
    jQuery("#informacao_lista").html("");
});



jQuery("#listaCarros").delegate(".carrosListados","click",function(){
    var codigo= jQuery(this).siblings('span').text();
    window.localStorage.setItem("carro_escolhido",codigo);
    EntregaModelo();
    return true;
});