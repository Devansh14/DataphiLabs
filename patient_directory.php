<!DOCTYPE html>
  <html>
    <head>
        
        <title>Patient Details</title>
        
      <!--Import Google Icon Font-->
<!--      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
      <!--Import materialize.css-->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <link rel="stylesheet" href="fonts/font-awesome-4.6.3/css/font-awesome.min.css">
        
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        
        <link href="css/fusion_style.min.css" type="text/css" rel="stylesheet">
        
        <link href="css/style.css" type="text/css" rel="stylesheet">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
      <body>
          <?php
                 //Connect to mysql server  
                 $link = mysqli_connect('localhost', 'root', '');  
                 //Check link to the mysql server
                 if(!$link){                 
                 die('Failed to connect to server: ' . mysql_error());             
                 }                        
                 //Select database            
                 $db = mysqli_select_db($link,'patient_details');     
                 if(!$db){            
                 die("Unable to select database");     
                 } 
                 //Create query     
                 $qry = 'SELECT * FROM patient_details';          
                 //Execute query     
                 $result = mysqli_query($link,$qry); 
                 
          ?>
          <div class="row">
            <div class="border2 col s12">
                
                    <div class="col s8 offset-s2">
                        <div class="borderdashed col s6 offset-s3 section">
                        <span class="flow-text">Patient Details</span>
                        </div>
                    
                    </div>
          
          
  <div class="container" ng-app="sortApp" ng-controller="mainController">
  
  
  <form>
    <div class="form-group">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search the Name" ng-model="searchName">
      </div>      
    </div>
  </form>
  
  <table class="bordered highlight" text-align="center">
    
    <thead>
      <tr>
        <th>
          <a href="#" ng-click="sortType = 'firstname'; sortReverse = !sortReverse">
            First Name
            <span ng-show="sortType == 'firstname' && !sortReverse"></span>
            <span ng-show="sortType == 'firstname' && sortReverse"></span>
          </a>
        </th>
        <th>
          <a href="#" ng-click="sortType = 'lastname'; sortReverse = !sortReverse">
          Last Name 
            <span ng-show="sortType == 'lastname' && !sortReverse"></span>
            <span ng-show="sortType == 'lastname' && sortReverse"></span>
          </a>
        </th>
        <th>
          <a href="#" ng-click="sortType = 'age'; sortReverse = !sortReverse">
          Age 
            <span ng-show="sortType == 'age' && !sortReverse"></span>
            <span ng-show="sortType == 'age' && sortReverse"></span>
          </a>
        </th>
        <th>
          <a href="#" ng-click="sortType = 'dob'; sortReverse = !sortReverse">
          DOB
            <span ng-show="sortType == 'dob' && !sortReverse"></span>
            <span ng-show="sortType == 'dob' && sortReverse"></span>
          </a>
        </th>
        <th>
          <a href="#" ng-click="sortType = 'gender'; sortReverse = !sortReverse">
          Gender
            <span ng-show="sortType == 'gender' && !sortReverse"></span>
            <span ng-show="sortType == 'gender' && sortReverse"></span>
          </a>
        </th>
        <th>
          <a href="#" ng-click="sortType = 'phoneno'; sortReverse = !sortReverse">
          Contact No 
            <span ng-show="sortType == 'phoneno' && !sortReverse"></span>
            <span ng-show="sortType == 'phoneno' && sortReverse"></span>
          </a>
        </th>
        <th>
          <a href="#" ng-click="sortType = 'description'; sortReverse = !sortReverse">
          Description 
            <span ng-show="sortType == 'description' && !sortReverse"></span>
            <span ng-show="sortType == 'description' && sortReverse"></span>
          </a>
        </th>  
      </tr>
    </thead>
          
    <tbody>
      <tr ng-repeat="roll in patient | orderBy:sortType:sortReverse | filter:searchName">
        <td>{{ roll.firstname }}</td>
        <td>{{ roll.lastname }}</td>
        <td>{{ roll.age }}</td>
        <td>{{ roll.dob }}</td>
        <td>{{ roll.gender }}</td>
        <td>{{ roll.phoneno }}</td>
        <td>{{ roll.description }}</td>
      </tr>
    </tbody>
    
  </table>
            <div class="row">
                    <a class="waves-effect btn col s2 offset-s5" href="index.html">Back</a>
                </div>    
            
      </div>
              </div>
          </div>
          
          <script>
              $(document).ready(function() {
              $('select').material_select();
            });
         </script>                
                
          <script src="js/jquery-3.1.1.min.js"></script>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="js/materialize.min.js"></script>

          <script>
          angular.module('sortApp', [])

.controller('mainController', function($scope) {
  $scope.sortType     = 'firstname'; // set the default sort type
  $scope.sortReverse  = false;  // set the default sort order
  $scope.searchName   = '';     // set the default search/filter term
  
  // create the list of patient 
  $scope.patient = [
      <?php 
      while ($row = mysqli_fetch_assoc($result))
            echo'{ firstname: '.'"'.$row['first_name'].'"'.', lastname: '.'"'.$row['last_name'].'"'.', age: '.'"'.$row['age'].'"'.', dob: '.'"'.$row['dob'].'"'.', gender: '.'"'.$row['gender'].'"'.', phoneno: '.'"'.$row['phone_no'].'"'.', description: '.'"'.$row['description'].'"'.'},';
       ?>
    ];
                   
      
});
          </script>
          
      </body>
</html>