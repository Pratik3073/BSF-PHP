
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Casting</title>
</head>
<body>
   <?php 
        $var1 = "2 brown foxes";
        $var2 = $var1 + 3;
        echo $var1 ;
   ?>
<br />
   <?php 
        echo gettype($var1); echo"<br />";
        echo gettype($var2); echo"<br />";


        settype($var2,"string");
        echo gettype($var2); echo"<br />";

        $var3 = (int) $var1; // use this var and make int
        echo gettype($var3);
   ?>
    <?php echo is_array($var1)?><br />
    <?php echo is_bool($var1)?><br />
    <?php echo is_float($var1)?><br />
    <?php echo is_int($var1)?><br />
    <?php echo is_null($var1)?><br />
    <?php echo is_numeric($var1)?><br />
    <?php echo is_string($var1)?><br />

</body>
</html>