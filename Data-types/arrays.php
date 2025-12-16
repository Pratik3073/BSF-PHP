
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
   <?php $array1 = array(4,8,15,16,23,42);?>
   <?php echo $array1[1]; ?>
   <?php $array2 = array( 6,"fox","dog",array("X","Y","Z"));?>
   <?php echo $array2[3][1]; //for 2d arrays?>
   <?php $array2[3]="cat"; ?>
   <br/>
   <?php echo $array2[3];?>
   <br/>
   <?php $array3 = array("first_name" => "pratik","last_name"=> "kadam","lang" => ["english","marathi"]);///(key–value pair)This is an associative array in PHP
   var_dump($array3);
   // ?>
  var_dump($array3);
   <?php echo $array3["first_name"]." ".$array3["last_name"];?><br />
   <?php $array3["first_name"]="pradeep";?>
   <?php echo $array3["first_name"]." ".$array3["last_name"];?>
   <br />

   
  <pre> <?php print_r($array2);?></pre>
</body>
</html>