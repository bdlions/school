<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script type="text/javascript" src="http://localhost/school/public/resources/js/angular.js"></script>

    </head>
    <body ng-app="user">
       
        <div ng-app="user" ng-controller="student" >

            <ul>
                <li ng-repeat="x in names">
                    {{ x.name + ', ' + x.country}}
                </li>
            </ul>

            <form ng-submit="submit()">
                Enter text and hit enter:
                <input type="text" ng-model="text" name="text" />
                <input type="submit" id="submit" value="Submit" />
                <pre>Students are ={{list}}</pre>
            </form>
        </div>
        <script type="text/javascript" src="http://localhost/school/public/resources/js/user.js"></script>
    </body>
</html>
