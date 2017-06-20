<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" rel="stylesheet" type="text/css">
    </head>
    <body ng-app="myApp" ng-controller="tasksController">
        <div class="col-lg-12"><h1 style="color: #269abc">TODO LIST</h1></div>
        <div class="col-lg-6">
            <input type="text" class="form-control" ng-model="taskInput">
        </div>
        <div class="col-lg-3">
            <button class="btn btn-primary" ng-click="addTask(taskInput)">ADD</button>
        </div>

        <div class="col-lg-6">
            <table class="table">
                <thead>
                <th>Task</th>
                <th>Mark</th>
                <th></th>
                </thead>
                <tbody>
                    <tr ng-repeat="task in tasks">
                        <td>{{task.TASK}}</td>
                        <td><input type="checkbox" ng-checked="task.STATUS == 2" ng-click="toggleStatus(task.ID, task.STATUS, task.TASK)"></td>
                        <td><a ng-click="deleteTask(task.ID)" class="pull-right"><i class="glyphicon glyphicon-trash"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>


        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
        <script src="app/app.js" type="text/javascript"></script>
    </body>
</html>
