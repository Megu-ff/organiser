var taskModule = angular.module("taskApp", []);
taskModule.controller("taskCtrl", function($scope) {
  $scope.taskList = [{
      'subject': 'Team Project',
      'task': 'Task A',
      'date': '21/07/2018'
    },
    {
      'subject': 'Team Project',
      'task': 'Task B',
      'date': '22/07/2018'
    },
    {
      'subject': 'Team Project',
      'task': 'Task C',
      'date': '23/07/2018'
    },
    {
      'subject': 'Team Project',
      'task': 'Task D',
      'date': '24/07/2018'
    },
    {
      'subject': 'Team Project',
      'task': 'Task E',
      'date': '25/07/2018'
    },
    {
      'subject': 'Team Project',
      'task': 'Task F',
      'date': '26/07/2018'
    },
    {
      'subject': 'Team Project',
      'task': 'Task G',
      'date': '27/07/2018'
    },
    {
      'subject': 'Team Project',
      'task': 'Task H',
      'date': '28/07/2018'
    },
    {
      'subject': 'Team Project',
      'task': 'Task I',
      'date': '29/07/2018'
    },
    {
      'subject': 'Team Project',
      'task': 'Task J',
      'date': '30/07/2018'
    }
  ];

  $scope.addRow = function() {
    $scope.taskList.push({
      'subject': $scope.subject,
      'task': $scope.task,
      'date': $scope.date
    });
    $scope.subject = '';
    $scope.task = '';
    $scope.date = '';
  };

  $scope.remove = function() {
    var newDataList = [];
    angular.forEach($scope.taskList, function(v) {
      if (!v.isDelete) {
        newDataList.push(v);
      }
    });
    $scope.taskList = newDataList;
  };
});