angular.module("MeuApp", []).controller('Menu', ['$scope', function($scope) {
        $scope.links = ["cadastrar_veiculo","lista_de_carros"];
        $scope.teste = "informacao";
    }]);