
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays Function</title>
</head>
<>
<?php $array1 = array(4,8,15,16,23,42);?>

Count:<?php echo count($array1);?><br />
Max value: <?php echo max($array1);?><br />
min value: <?php echo min($array1);?><br />

Sort: <?php sort($array1);print_r($array1);?><br />
Revers Sort:<?php rsort($array1);print_r($array1);?><br />
<br />
implode:<?php echo $srting1=implode("*",$array1);?><br />
Expode:<?php print_r(explode("*",$srting1));?><br />
<br />
in array: <?php echo in_array(15,$array1);//return T/F it return 1 if it available ?>
</body>
</html>