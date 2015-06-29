angular.module('user', []).controller('student', function ($scope) {
    $scope.list = [];
    $scope.teachers = [];
    $scope.text = 'Put students name here';
    $scope.names = [
        {name: 'student1', country: 'Bangladesh'},
        {name: 'student2', country: 'India'},
        {name: 'student3', country: 'Pakistan'}
    ];
    
    $scope.submit = function () {
        if ($scope.text) {
            $scope.list.push(this.text);
            $scope.text = '';
        }
    };
    $scope.userInit = function(t){
        $scope.teachers = t;
        console.log(t);
    };
});
