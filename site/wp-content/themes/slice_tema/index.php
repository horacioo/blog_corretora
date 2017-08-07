<?php $url_tema = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script> 
        <script>
       var app = angular.module("App",["ngRoute"]);
app.config(function($routeProvider){
    $routeProvider
    
            .when("/lista_de_carro",{
                templateUrl:"http://localhost/blog_corretora/site/lista_de_carros"
            })
            
            .when("/cadastro",{
                templateUrl:"http://localhost/blog_corretora/site/cadastro-carros"
            })     
});
 
        </script>
        
        <?php wp_head(); ?>
    </head>
    <body ng-app="App">
        <h1>home</h1>
        
        <a href="#/lista_de_carro">lista de carros</a>
        <a href="#/cadastro">cadastro</a>
        
        <div ng-view></div>
        <?php wp_footer();?>
    </body>
</html>
