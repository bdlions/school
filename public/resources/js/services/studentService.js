angular.module('services.Student', []).
    factory('studentService', function($http){
        var studentService = {};

        studentService.getStudents = function(){
            console.log("getStudents");
        };
        studentService.getStudentById = function(){
            console.log("dsjfksdf");
        };
        studentService.getStudentsByName = function(){
            console.log("getStudentsByName");
        };
        studentService.addStudent = function(student){
            return $http.post('add_student', {
                studentInfo: student
            });
        };

        return studentService;
    });