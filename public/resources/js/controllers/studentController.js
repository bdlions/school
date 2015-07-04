angular.module('controllers.Student', ['services.Student']).
    controller('studentController', function($scope, studentService){
        $scope.students = [];
        $scope.student = {};
        
        $scope.submitStudentInfo = function () {
            studentService.addStudent($scope.student).
                    success(function(data, status, headers, config) {
                        $scope.students.push(data);
                    });
        };
        $scope.setStudents = function(t){
            $scope.students = JSON.parse(t);
        };
    });
