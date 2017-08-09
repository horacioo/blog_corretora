<?php $url_tema = get_template_directory_uri(); ?>
<?php
require_once 'class/carro.php';
$carro = new carro();
$lista = $carro->ListaCarros();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script> 
        <script>
            var app = angular.module("App", ["ngRoute"]);
        </script>    
        <script src="<?php echo $url_tema; ?>/js/lista_carros.js"></script>
        <script>
            app.config(function ($routeProvider) {
                $routeProvider
                        .when("/lista_de_carro", {
                            controller: "Lista_Carros",
                            templateUrl: "<?php echo link_Pagina("lista_de_carros"); ?>"
                        })
                        .when("/cadastro", {
                            templateUrl: "<?php echo link_Pagina("cadastro-carros"); ?>"
                        })


<?php foreach ($lista as $l): ?>
                    .when("/carro/<?php echo $l["id"] ?>", {
                        templateUrl: "<?php echo $l["link"]; ?>"
                    })
                    
                    .when("/editar/<?php echo $l["id"] ?>", {
                        templateUrl: "<?php echo link_Pagina("editar_carro"); ?>?id=<?php echo $l["id"] ?>"
                    })
<?php endforeach; ?>


            });
        </script>
        <script src="<?php echo $url_tema; ?>/js/menu.js"></script>


        <?php wp_head(); ?>
    </head>
    <body ng-app="App">
        <h1>home</h1>

        <a href="#/lista_de_carro">lista de carros</a>
        <a href="#/cadastro">cadastro</a>


        <div ng-view></div>
        <?php wp_footer(); ?>
    </body>
</html>
