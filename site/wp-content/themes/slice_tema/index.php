<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script> 
        <script >
       var app = angular.module("App",["ngRoute"]);
app.config(function($routeProvider){
    $routeProvider
            .when("/xx",{
                templateUrl:"http://localhost/blog_corretora/site/carros"
            })
            .when("/teste",{
                templateUrl:"http://localhost/blog_corretora/site/carros"
            })
                  
});
 
        </script>
    </head>
    <body ng-app="App">
        <h1>home</h1>
        <a href="#/">home</a>
        <a href="#/teste">teste</a>
        <div ng-view></div>
    </body>
</html>
