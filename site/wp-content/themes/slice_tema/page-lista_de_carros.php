<?php $url_tema = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="<?php echo $url_tema; ?>/js/angular.min.js"></script>
        <script>angular.module("MyApp", []);</script>
        <script src="<?php echo $url_tema ?>/js/lista_carros.js"></script>
    </head>
    
    <body ng-app="MyApp">
        <h2>lista de carros</h2>
        <div ng-controller="Lista_Carros">
            {{teste}}
            <ul ng-repeat="item in carros">
                <li>{{item}}</li>
            </ul>
        </div>
    </body>
    
</html>
