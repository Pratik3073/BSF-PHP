
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading Cookies</title>
</head>
<body>

  <?php
  $var1 = 0;
  if(isset($_COOKIE["test"])){

      $var1= $_COOKIE["test"];
  }
   echo $var1;
  ?>

  <?php
  // this will delete cookie
      setcookie('test',0,time()-(60*60*24*7));
  ?>
  
</body>
</html>