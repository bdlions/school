<!DOCTYPE html>
<html ng-app="app.Student">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Students</title>
        <script type="text/javascript" src="{{ URL::asset('resources/js/angular/angular.js')}}"></script>
        <script type="text/javascript" src="{{ URL::asset('resources/js/angular-bootstrap/ui-bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{ URL::asset('resources/js/controllers/studentController.js')}}"></script>
        <script type="text/javascript" src="{{ URL::asset('resources/js/services/studentService.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('resources/js/app/studentApp.js') }}"></script>
        <link href="{{ URL::asset('resources/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <div class="container-fluid">
            <div ng-controller="studentController" ng-init="setStudents(<?php echo htmlspecialchars(json_encode($result)); ?>)" >
                <form class="form-horizontal col-sm-6" ng-submit="submitStudentInfo()">
                    <div class="form-group">
                        <label for="addStudent" class="col-sm-3 control-label">Add a student</label>
                    </div>

                    <div class="form-group">
                        <label for="firstName" class="col-sm-3 control-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.firstName" name="firstName" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.lastName" name="lastName" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="bloodGroup" class="col-sm-3 control-label">Blood group</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.bloodGroup" name="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="currentAddress" class="col-sm-3 control-label">Current Address</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.currentAddress" name="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.email" name="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fatherName" class="col-sm-3 control-label">Father Name</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.fatherName" name="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="motherName" class="col-sm-3 control-label">Mother Name</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.motherName" name="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-3 control-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.phone" name="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="submitButton" class="col-sm-3 control-label"></label>
                        <div class="col-sm-4 pull-right">
                            <input type="submit" id="submit" value="Submit" class="form-control btn-primary">
                        </div>
                    </div>

                </form>

                <div class="col-sm-2">
                    <b>All students are:</b>
                    <ul class="list-unstyled">
                        <li ng-repeat="student in students">
                            @{{ student.firstName + ', ' + student.lastName}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
