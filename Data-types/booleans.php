
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booleans and Null</title>
</head>
<body>
   <?php 
        $bool1 = true;
        $bool2 = false;
   ?>
   bool1:<?php echo $bool1; ?><br />
   bool2:<?php echo $bool2; ?><br />
<br />

    <?php
      $var1 = 3;
      $var2 = "cat";
      $var4 = null;
    ?>
    $var1 is set :<?php  echo isset($var1);// set check value is set or not ?><br />
    $var2 is set :<?php  echo isset($var2);?><br />
    $var3 is set :<?php  echo isset($var3);?><br />

    <?php unset($var1); // in this value of var 1 is erase?>

    $var1 is set :<?php  echo isset($var1);// set check value is set or not ?><br />
    $var2 is set :<?php  echo isset($var2);?><br />
    $var3 is set :<?php  echo isset($var3);?><br />

    <br />
    $var1 empty :<?php echo empty($var1);?><br />
    $var4 empty :<?php echo empty($var4);?><br />

</body>
</html>