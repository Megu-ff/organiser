<?php 
session_start();
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}

if (!isset($_SESSION['username'])){
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <!-- AngularJS -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script src="js/angular.ng-modules.js"></script>
  <!-- Custom CSS and Javascript -->
  <link href="css/styles.css" rel="stylesheet">
  <!-- Angular Controllers -->
  <script src="js/taskController.js"></script>
  <script src="js/scheduleController.js"></script>
  <script src="js/mailAuth.js"></script>

  <title>Dashboard</title>
</head>

<body>
  <?php include 'header.php';?>
  <section id='dashboard'>
    <div class='container-fluid'>
      <div class='row'>
        <div class='cardContainer bg-secondary text-white col-xl-5' id='calendarContainer'>
          <div class='cardCaption' id='tasklistCaption'>
            <p>
              <!-- https://www.fourfront.us/blog/store-html-table-data-to-javascript-array -->
              Tasks
            </p>
          </div>
          <div ng-module='taskApp' ng-controller='taskCtrl' class='cardContent col-xl-12' id='tasklistContent'>
            <table class='table table-dark' id='taskTable'>
              <thead>
                <tr>
                  <th style='width: 5%'></th>
                  <th style='width: 25%'>Subject</th>
                  <th style='width: 50%'>Task</th>
                  <th style='width: 20%'>Due Date</th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="details in taskList">
                  <td><input type="checkbox" ng-model="data.isDelete" /></td>
                  <td contenteditable>{{details.subject}}</td>
                  <td contenteditable>{{details.task}}</td>
                  <td contenteditable>{{details.date}}</td>
                </tr>
              </tbody>
            </table>
            <form ng-submit="addRow()">
              <div class='row'>
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" ng-model="subject" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="task" ng-model="task" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="date" ng-model="date" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div>
                  <input type="submit" value="Submit" class="btn" />
                </div>
            </form>
            </div>
            <button id='convert-table' class='btn'>Update</button>
            <button ng-click='remove()' class='btn'>Remove</button>
          </div>
        </div>
        <div class='cardContainer middle bg-secondary text-white col-xl-7' id='scheduleContainer'>
          <div class='cardCaption' id='scheduleCaption'>
            <p>
              Schedule
            </p>
          </div>
          <div ng-module='scheduleApp' ng-controller='scheduleCtrl' class='cardContent col-xl-12' id='scheduleContent'>
            <table class='table table-dark'>
              <thead>
                <tr>
                  <th style='width: 9%'></th>
                  <th style='width: 13%'>Monday</th>
                  <th style='width: 13%'>Tuesday</th>
                  <th style='width: 13%'>Wednesday</th>
                  <th style='width: 13%'>Thursday</th>
                  <th style='width: 13%'>Friday</th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="details in scheduleList" contenteditable>
                  <td>{{details.time}}</td>
                  <td>{{details.monday}}</td>
                  <td>{{details.tuesday}}</td>
                  <td>{{details.wednesday}}</td>
                  <td>{{details.thursday}}</td>
                  <td>{{details.friday}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id='dashboard top'>
    <div class='container-fluid'>
      <div class='row'>
        <div class='cardContainer bg-secondary text-white col-xl-8' id='emailContainer'>
          <div class='cardCaption' id='emailCaption'>
            <p>
              Gmail
            </p>
          </div>
          <div class='cardContent' id='emailContent'>
            <button id="authorize-button" class="btn btn-primary hidden">Authorize</button>
            <table class="table table-dark table-inbox hidden">
              <thead>
                <tr>
                  <th>From</th>
                  <th>Subject</th>
                  <th>Date/Time</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
        <div class='cardContainer bg-secondary text-white col-xl-4' id='weatherContainer'>
          <div class='cardCaption' id='weatherCaption'>
            <p>
              Weather
            </p>
          </div>
          <div class='cardContent' id='weatherContent'>
            <a href="https://www.accuweather.com/en/ie/dublin/207931/weather-forecast/207931" class="aw-widget-legal">
              <!-- By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at
              https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.-->
            </a>
            <div id="awcc1533059611385" class="aw-widget-current" data-locationkey="207931" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1533059611385"></div>
            <script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  <!-- Google’s JavaScript client library -->
  <script src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>
  <!-- Javascript -->
  <script src="js/jquery.tabletojson.min.js"></script>
  <script src="js/taskUpdate.js"></script>
</body>

</html>