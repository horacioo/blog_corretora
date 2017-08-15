app.controller('detalhe_carro', ProcessaAlteracao);

ProcessaAlteracao.$inject = ['$http', '$scope'];

function ProcessaAlteracao($http, $scope) {
    $scope.titulo = 'detalhes do carro'
    $scope.tituloCarro = "";
    $scope.descricao = "";
    $scope.ano_carro = "";
    $scope.marca = "";
    $scope.mensagem = "";
    $scope.update = "";

    $scope.requisicao = function () {
        $scope.mensagem = "carregando";
        var url = $scope.update;
        $http({"method": "GET", "url": $scope.update, "data":{ "nome": "TreinaWeb"} })
                .then(function (response)
                {
                    $scope.retorno = response.data
                    console.log(response);
                }
                , function (response)
                {
                    console.log(response);
                });
    }

}

   