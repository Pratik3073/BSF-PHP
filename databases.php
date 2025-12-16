<?php
    //1. Create a database connection
    $connection = mysqli_connect("localhost","root","");
    if(!$connection){
        die("database connection failed:". mysqli_connect_error());
    }

    //2. select a database to use
    $db_select = mysqli_select_db($connection, "widget_corp");
    if(!$db_select){
        die("database selection failed". mysqli_connect_error());
    }

  


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    <?php
      //3.perfrom database qurey
      $result = mysqli_query($connection, "SELECT * FROM subjects");
      if(!$result){
        die("Database query failed". mysqli_connect_error());
      }
      //4.use returnd data
      while($row = mysqli_fetch_array($result)){
        echo $row["menu_name"]." ".$row["position"]."<br />";
      }
    ?>
</body>
</html>

<?php
//5. close connection
mysqli_close($connection);
?>