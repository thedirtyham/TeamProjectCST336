<?php
include 'DataBaseCalls.php';
 if (isset($_GET['shoppingCart'])){
$class1 = $_GET["class1"]; 
$class2 = $_GET["class2"];
$class3 = $_GET["class3"];
}
?>
<html>
<head>
    <style>
    </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="TeamProject.css">
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
  <h1>Shopping Cat</h1>
  <p>Thank you for choosing the classes you would like to enroll in Please press checkout to contuine. </p>
   <table  class="table table-hover">
  <div>
    <?php
    $sql = "select * from course where course_id in ('$class1','$class2','$class3')";
    $result = getQuery($sql);
    if ($result->num_rows > 0) {
    echo "<tr class='clickable-row'><th> Course_id </th><th> Title </th>
    <th> dept_name </th><th> credits </th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["course_id"]."</td><td>".$row["title"]."</td>
        <td>".$row["dept_name"]."</td><td>".$row["credits"]."</td></tr>";
    }
    echo ""  . "</br>";
} else {
    echo "0 results" . "</br>";
}
     ?>
</div>
</div>
<div>
    
<button class="btn btn-primary">Check Out!</button>
</div>
    
    </body>
    </html>