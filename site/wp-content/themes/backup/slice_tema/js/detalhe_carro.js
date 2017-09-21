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
    /************************************************/
    $scope.requisicao = function () {
        var config = { headers: {'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'} }
        $http.post($scope.update, {nome: $scope.tituloCarro,descricao: $scope.descricao},config)
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
    /************************************************/
}

   