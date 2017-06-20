var app = angular.module('myApp', []);

app.controller('tasksController', function ($scope, $http) {

    $scope.addTask = function (task) {
        $http.post("ajax/addTask.php?task=" + task)
                .success(function (data) {
                    $scope.init();
                    $scope.taskInput = "";
                });
    };
    $scope.deleteTask = function (task) {
        if (confirm("Are you sure to delete this line?")) {
            $http.post("ajax/deleteTask.php?taskID=" + task).success(function (data) {
                $scope.init();
            });
        }
    };

    $scope.toggleStatus = function (item, status, task) {
        if (status === '2') {
            status = '0';
        } else {
            status = '2';
        }
        $http.post("ajax/updateTask.php?taskID=" + item + "&status=" + status).success(function (data) {
            $scope.init();
        });
    };

    $scope.init = function () {
        $http.post("ajax/getTask.php").success(function (data) {
            console.log(data)
            $scope.tasks = data;
        });
    };

    $scope.init();

});