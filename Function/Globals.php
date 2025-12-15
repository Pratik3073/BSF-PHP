<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Globals Functions</title>
</head>

<body>
    <?php
    //using globals
    $bar = "outside";
    function foo()
    {
        global $bar;     // <======= 
        $bar = "inside";
    }
    foo();
    echo $bar . "<br/ >";

    ?>
    <br />
    <?php
    $bar = "outside";
    // using local variables, arguments and return value
    function foo1($var)
    {
        $var = "inside";
        return $var;
    }
    $bar = foo1($bar);
    echo $bar . "<br/ >";

    ?>
</body>

</html>