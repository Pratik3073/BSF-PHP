
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each</title>

</head>
<body>
    only work with arrays
    <br />
   <?php
        $ages = array(4,8,15,16,23,42);
   ?>

   <?php
    foreach ($ages as $age) {
        echo $age . ",";
    }
   ?>
    <?php
        // using each kay => valuee pair
        foreach ($ages as $position => $age) {
            echo $position . ":".$age . "<br />";
        }
    ?>

    <?php
     $prices = array("Beand New Computer" =>2000,"1 month in lynda.com training library" =>25,"Learning PHP" => "priceless");
     foreach($prices as $key => $value){
        if(is_int($value)){
            echo $key . ":$" . $value . "<br />";
        }else{
            echo $key . ":" .$value . "<br / >";
        }
     }
    ?>

</body>
</html>