angular.module('controllers.Student', ['services.Student']).
        controller('studentController', function ($scope, studentService) {
            $scope.students = [];
            $scope.student = {};
            $scope.studentInfo = {};
            $scope.dumyStudentInfo = {
                "firstName": "Keya",
                "lastName": "moni"
            };

            $scope.submitStudentInfo = function () {
                studentService.addStudent($scope.student).
                        success(function (data, status, headers, config) {
                            $scope.studentInfo = data;
                            $scope.students.push($scope.studentInfo);
                        });
            };
            $scope.addStudent = function () {
                studentService.addStudent($scope.student).
                        success(function (data, status, headers, config) {
                            $scope.studentInfo = data;
                            $scope.students.push($scope.studentInfo);
                        });
            };
            $scope.editStudent = function () {
             

            };

            $scope.setStudents = function (t) {
                var students = JSON.parse(t);
                if (students instanceof Array) {
                    $scope.students = students;
                } else {
                    alert("Response is not in proper format");
                }
            };
        });