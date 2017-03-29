<?php

        include 'DataBaseCalls.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="TeamProject.css">
        <title> Swag Univeristy </title>
    </head>
    <body>
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="TeamProject.php">Swag University</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav">
                    <li><a href="Home.php">Home</a>
                    </li>                    
                    <li><a href="Classes.php">Classes</a>
                    </li>
                    <li><a href="Students.php">Students</a>
                    </li>
                    <li><a href="Teachers.php">Professors</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">


        <div class="row">

            <div class="col-lg-12">
                <h1>Welcome to Swag University</h1>
                <p>Come enjoy this school with us!</p>

              <!-- end div col-lg-12" -->
            </div>


        <!-- end "row" -->
        </div>

<div>
    <?php
//     $sql = "select * from takes where grade = 'A'";
//     $result = getQuery($sql);
//     if ($result->num_rows > 0) {
//     echo "<table><tr><th>ID</th><th> Course_id </th><th> Sec_id </th><th> semester </th>
//     <th> year </th><th> grade </th></tr>";
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "<tr><td>".$row["ID"]."</td><td>".$row["course_id"]."</td><td>".$row["sec_id"]."</td>
//         <td>".$row["semester"]."</td><td>".$row["year"]."</td>
//         <td>".$row["grade"]."</td></tr>";
//     }
//     echo "</table>"  . "</br>";
// } else {
//     echo "0 results" . "</br>";
// }
     ?>
</div>

<!-- Begin Mr. M.'s Rows --> 
  

            <div class="row">


            <div class="col-md-4">
              <h2>Classes</h2>
              <p>
                  Here at Swag school we have some of the best classes to offer, thank you for chosing our school.
                  Please take a look at some of the classes that we offer. 
              </p>
              <p><a class="btn btn-default" href="Classes.php" role="button">View details »</a></p>
            </div><!--/span-->



            <div class="col-md-4">
              <h2>Professors</h2>
              <p>
                    We have some of the best teachers from all the local aeras and even some of them are 
                    asked to come to the untied states from different countries. 
              </p>
              <p><a class="btn btn-default" href="Teachers.php" role="button">View details »</a></p>
            </div><!--/span-->



            <div class="col-md-4">
              <h2>Students</h2>
                <p>
                  With fresh air we have fresh minds here at Swag University. Some of the best students from around the world 
                  come to our school for our education. Please take a look at some of our students that study here. 
                </p>
              <p><a class="btn btn-default" href="Students.php" role="button">View details »</a></p>
            </div><!--/span-->



          </div><!--/row-->


  <!-- END Mr. M.'s Rows --> 



    <!-- /.container -->
    </div>
        
    </body>
</html>