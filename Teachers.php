<?php
include 'DataBaseCalls.php'
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
  <h1>Professors</h1>
  <p>Here is the list of professors </p>      
  <a onclick= "orderByName()" type="button" class="btn btn-primary">Order By Name</a>
  <?php
        if (!$inOrder):
  ?>
  <table  class="table table-hover", "clickable-row">
  <div>
    <?php
    $sql = "select ID, name, dept_name from instructor";
    $result = getQuery($sql);
    if ($result->num_rows > 0) {
    echo "<tr class='clickable-row'><th> ID </th><th> name </th>
    <th> dept_name </th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["ID"]."</td><td>".$row["name"]."</td>
        <td>".$row["dept_name"]."</td></tr>";
    }
    echo ""  . "</br>";
} else {
    echo "0 results" . "</br>";
}
     ?>
     <?php else: ?> 
     <table  class="table table-hover", "clickable-row">
         <div>
         <?php
    $sql = "select ID, name, dept_name from instructor order by name";
    $result = getQuery($sql);
    if ($result->num_rows > 0) {
    echo "<tr class='clickable-row'><th> ID </th><th> name </th>
    <th> dept_name </th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["ID"]."</td><td>".$row["name"]."</td>
        <td>".$row["dept_name"]."</td></tr>";
    }
    echo ""  . "</br>";
} else {
    echo "0 results" . "</br>";
}
     ?>
     <?php endif; ?>
</div>
</div>
        
</body>
</html>