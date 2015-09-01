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
        <script type="text/javascript" src="{{ URL::asset('resources/js/jquery-1.11.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('resources/js/bootstrap.min.js') }}"></script>
        <link href="{{ URL::asset('resources/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet"/>
        <link href="{{ URL::asset('resources/css/student.css') }}" type="text/css" rel="stylesheet"/>
    </head>
    <body ng-controller="studentController" ng-init="setStudents(<?php echo htmlspecialchars(json_encode($result)); ?>)">
        <div class="container">
            <div class="row form-group"></div>
            <div class="row form-group"></div>
            <div class="row form-group"></div>

            <!--student information table start-->
            <div class="row form-group">
                <div class="col-xs-10 col-sm-8 col-md-8 col-lg-8">
                    <h3 class="student_info_table_title">Student Information:</h3>
                </div>
                <div class="col-xs-2 col-sm-4 col-md-4 col-lg-4">
                    <h3 id="studentInfoAdd" class="pull-right glyphicon glyphicon-plus student_info_glyphicon student_info_holder"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <table class="table table-bordered table-responsive table_hover">
                        <tr class="student_info_table_header">
                            <td>Serial</td>
                            <td>Name</td>
                            <td>Class</td>
                            <td>Roll</td>
                            <td>Blood Group</td>
                            <td>Photo</td>
                            <td>Mark Sheet</td>
                            <td>Details</td>
                            <td>Update</td>
                            <td>Delete</td>
                        </tr>

                        <tr id="studentInfoRowDelete1" class="student_info_row_hover" ng-repeat="student in students">
                            <td>1.</td>
                            <td ng-bind="student.firstName + ' ' + student.lastName" ></td>
                            <td ng-bind="student.className"></td>
                            <td ng-bind="student.rollNumber"></td>
                            <td ng-bind="student.bloodGroup"></td>
                            <td><img src="{{ URL::asset('resources/images/student/student1.jpg')}}"></td>
                            <td><a id="studentInfoMarks1" class="student_info_holder">View</a><br><div style="padding-top: 40%;"></div><a id="studentInfoMarksEdit1" class="student_info_holder">Edit</a></td>
                            <td><a id="studentInfoShow1" class="student_info_holder">Show</a></td>
                            <td><a id="studentInfoEdit1" class="student_info_holder">Edit</a></td>
                            <td><a id="studentInfoDelete1" class="student_info_holder">Delete</a></td>
                        </tr>
                    </table>
                </div>
            </div><!--student information table end-->
            <!--student add modal-->
            <div id="studentInfoAddModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!--modal header start-->
                        <div class="modal-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="modal-title student_info_update_modal_title" id="myModalLabel">Add a Student Info</h4>
                                </div>
                            </div>
                        </div><!--modal header end-->

                        <!--modal body start-->
                        <div class="modal-body">
                            <div class="row form-group">
                                <div class="col-md-offset-1 col-md-10">
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">First Name:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" ng-model="student.firstName" name="firstName" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Last Name:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" ng-model="student.lastName" name="lastName" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Class:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <select name="className" ng-model="student.className" class="form-control">
                                                <option value="">Choose a Class</option>
                                                <option value="one">Class One</option>
                                                <option value="two">Class Two</option>
                                                <option value="three">Class Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Roll:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" ng-model="student.rollNumber" name="rollNumber" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Gender:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <select name="gender" ng-model="student.gender" class="form-control">
                                                <option value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Email Address:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" ng-model="student.email" name="emailAddress" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">User Name:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" ng-model="student.userName" name="userName" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Password:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="password" ng-model="student.password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Confirm Password:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="password" ng-model="student.rePassword" name="rePassword" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--modal body end--> 

                        <!--modal footer start-->
                        <div class="modal-footer">
                            <input class="btn student_info_update_modal_footer_btn" type="button" value="Save" aria-hidden="true" data-dismiss="modal" ng-click="addStudent()">
                        </div> <!--modal footer end-->
                    </div>
                </div>
            </div>
            <!--<end add student modal>-->
            <!--<Edit  student modal>-->

            <div id="studentInfoEditModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!--modal header start-->
                        <div class="modal-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="modal-title student_info_update_modal_title" id="myModalLabel">Student Information Update</h4>
                                </div>
                            </div>
                        </div><!--modal header end-->

                        <!--modal body start-->
                        <div class="modal-body">
                            <div class="row form-group">
                                <div class="col-md-offset-1 col-md-10">
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">First Name:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control student_info_update_modal_input" ng-model="dumyStudentInfo.firstName">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Last Name:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control student_info_update_modal_input" placeholder="Islam" ng-model="dumyStudentInfo.lastName">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Class:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control student_info_update_modal_input" placeholder="Eight">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Roll:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control student_info_update_modal_input" placeholder="01">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Father Name:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control student_info_update_modal_input" placeholder="A.K.M. Nazrul Islam">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Mother Name:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control student_info_update_modal_input" placeholder="Rabeya Khatun Ruby">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Gender:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control student_info_update_modal_input" placeholder="Male">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Blood Group:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control student_info_update_modal_input" placeholder="B+">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Mobile No:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control student_info_update_modal_input" placeholder="01912314466">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Email Address:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control student_info_update_modal_input" placeholder="nazmulislamredoy@gmail.com">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Present Address:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <textarea type="text" class="form-control student_info_update_modal_textarea" placeholder="House: 32, Block: B, Road: 7, Banashree Project, Rampura, Dhaka-1219."></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Permanent Address:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <textarea type="text" class="form-control student_info_update_modal_textarea" placeholder="Village: Kanakdia, Post: Kanakdia; Upzilla: Bauphal, District: Patuakhali, Division: Barisal."></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Description:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <textarea type="text" class="form-control student_info_update_modal_textarea" placeholder="I want to be a pure muslim both inside and outside of mind."></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <div class="student_info_update_modal_input_title">Photo:</div>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--modal body end--> 

                        <!--modal footer start-->
                        <div class="modal-footer">
                            <input class="btn student_info_update_modal_footer_btn" type="button" value="Save" aria-hidden="true" data-dismiss="modal">
                        </div> <!--modal footer end-->
                    </div>
                </div>
            </div>
            <!--<End add student modal>-->

        </div>

        <!--        <div class="container-fluid">
                    <div  >
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
                    </div>
                </div>-->
    </body>
</html>
<script>
    $(function () {
        $("#studentInfoAdd").on("click", function () {
            $('#studentInfoAddModal').modal("show");
        });
        $("#studentInfoEdit1").on("click", function () {
            $('#studentInfoEditModal1').modal("show");
        });
    });

</script>

