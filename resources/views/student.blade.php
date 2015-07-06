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
                        <div class="col-sm-9 col-sm-offset-3"><h2>Add a student</h2></div>
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
                        <label for="lastName" class="col-sm-3 control-label">Father's name</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.fathersName" name="fathersName" class="form-control" />
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Mother's name</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.mothersName" name="mothersName" class="form-control" />
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Gurdian's name</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.gurdiansName" name="gurdiansName" class="form-control" />
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Relation with Gurdian</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.gurdiansRelation" name="gurdiansRelation" class="form-control" />
                        </div>
                    </div>	
										
                    <div class="form-group">
                        <label for="bloodGroup" class="col-sm-3 control-label">Blood group</label>
                        <div class="col-sm-9">
                            <select name="bloodGroup" ng-model="student.bloodGroup" class="form-control">
								<option value="">Select a Blood Group</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B+">B-</option>
								<option value="B+">O+</option>
								<option value="B+">O-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
							</select>
                        </div>
                    </div>
										
                    <div class="form-group">
                        <label for="bloodGroup" class="col-sm-3 control-label">Gender</label>
                        <div class="col-sm-9">
                            <select name="gender" ng-model="student.gender" class="form-control">
								<option value="">Select Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Other">Other</option>
							</select>
                        </div>
                    </div>
										
                    <div class="form-group">
                        <label for="bloodGroup" class="col-sm-3 control-label">Class Name</label>
                        <div class="col-sm-9">
                            <select name="className" ng-model="student.className" class="form-control">
								<option value="">Choose a Class</option>
								<option value="one">Class One</option>
								<option value="two">Class Two</option>
								<option value="three">Class Three</option>
							</select>
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label for="currentAddress" class="col-sm-3 control-label">Photo</label>
                        <div class="col-sm-9">
                            <input type="file" name="photo" ng-model="student.photo" class="form-control">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="phone" class="col-sm-3 control-label">Mobile number</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.mobileNumber" name="mobileNumber" class="form-control">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email Address</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.emailAddress" name="emailAddress" class="form-control">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label for="presentAddress" class="col-sm-3 control-label">Present Address</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.presentAddress" name="presentAddress" class="form-control">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label for="permanentAddress" class="col-sm-3 control-label">Permanent Address</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.permanentAddress" name="permanentAddress" class="form-control">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label for="rollNumber" class="col-sm-3 control-label">Roll number</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.rollNumber" name="rollNumber" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" ng-model="student.description" name="description" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="submitButton" class="col-sm-3 control-label"></label>
                        <div class="col-sm-4 pull-right">
                            <input type="submit" id="submit" value="Submit" class="form-control btn-primary">
                        </div>
                    </div>

                </form>

                <div class="col-sm-2 tet">
                    <b>All students are:</b>
                    <ul class="list-unstyled">
                        <li ng-repeat="student in students">
                            @{{ student.firstName + ', ' + student.lastName +', '+ student.guardianName +', '+student.fatherName +', '+student.mother}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
