angular.module('user', []).controller('student', function ($scope, simpleFactory) {
    $scope.students = [];
    
//    $scope.submitStudentInfo = simpleFactory.postStudentInfo($scope.student);
    $scope.student = {};
    $scope.submitStudentInfo = function () {
//        var studentInfo = JSON.stringify($scope.student);
//        $http.post("http://localhost/school/public/add_student", studentInfo);
          simpleFactory.postStudentInfo($scope.student);
    };
    $scope.setStudents = function(t){
        $scope.students = JSON.parse(t);
    };
}).factory('simpleFactory',['$http',function ($http) {

    var factory = {};
    factory.postStudentInfo = function (student) {
        $http.post('add_student', {
           studentInfo: student
        }).success(function(data, status, headers, config) {
             console.log(data);
        });
    };
    return factory;
}]);
