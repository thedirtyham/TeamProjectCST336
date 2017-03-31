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
      <form>
          Order by ID: <input type="radio" name="orderby" value ="id"/>
          Order by Last Name: <input type="radio" name="orderby" value ="name"/>
          Order by Dept Name: <input type="radio" name="orderby" value ="dept_name"/>
          </br>
          <input class="btn btn-primary" type="submit" name = "SearchValues" value="GO!"/>
      </form>
    </div>
  <?php
   if (isset($_GET['SearchValues'])){
     $orderBY = $_GET["orderby"]; 
    //   if (!$orderBY = "id"||!$orderBY = "name"|| !!$orderBY = "dept_name")
    //   {
          $nothing = true;
          echo $orderBY;
    //  }
    }
        // if ($nothing):
  ?>
  <table  class="table table-hover">
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
     </table>
     <? elseif ($orderBY = "name"): ?> 
     <table  class="table table-hover", "clickable-row">
         
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
    </table>
         <table  class="table table-hover", "clickable-row">
         
    <?php
        $sql = "select ID, name, dept_name from instructor order by dept_name";
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
    </table>
     <?//php endif; ?>
     

</div>
        
</body>
</html>