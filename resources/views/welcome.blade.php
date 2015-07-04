<!DOCTYPE html>
<html ng-app="app.Student">
    <head>

    </head>
    <body>
        
        <div ng-controller="studentController"></div>
        
        <script type="text/javascript" src="{{ URL::asset('resources/js/angular.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('resources/js/controllers/studentController.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('resources/js/services/studentService.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('resources/js/app/studentApp.js') }}"></script>
    </body>
</html>
