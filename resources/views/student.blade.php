<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Students</title>
        <script type="text/javascript" src="{{ URL::asset('resources/js/angular.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('resources/js/user.js') }}"></script>
    </head>
    <body ng-app="user">
       
        <div ng-app="user" ng-controller="student" ng-init="setStudents(<?php echo htmlspecialchars(json_encode($result)); ?>)" >
            <ul>
                <li ng-repeat="student in students">
                    @{{ student.firstName + ', ' + student.lastName}}
                </li>
            </ul>

            <form ng-submit="submitStudentInfo()">
                Enter text and hit enter:<br/>
                First Name:<input type="text" ng-model="student.firstName" name="firstName" /><br/>
                Last Name: <input type="text" ng-model="student.lastName" name="lastName" /><br/>
                Blood Group:<input type="text" ng-model="student.bloodGroup" name="text" /><br/>
                Current Address:<input type="text" ng-model="student.currentAddress" name="text" /><br/>
                Email:<input type="text" ng-model="student.email" name="text" /><br/>
                Father Name:<input type="text" ng-model="student.fatherName" name="text" /><br/>
                Mother Name:<input type="text" ng-model="student.motherName" name="text" /><br/>
                Phone:<input type="text" ng-model="student.phone" name="text" /><br/>
                <input type="submit" id="submit" value="Submit" />
                
            </form>
        </div>
        
    </body>
</html>
