
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numbers</title>
</head>
<body>
   <?php
        $var1 = 3;
        $var2 = 4;
   ?>
   basic Math: <?php echo ((1+2+$var1)*$var2)/2-5;?><br />
   <br />
   += : <?php $var2 += 4;echo $var2 ?><br />
   -= : <?php $var2 -= 4;echo $var2 ?><br />
   *= : <?php $var2 *= 3;echo $var2 ?><br />
   /= : <?php $var2 /= 4;echo $var2 ?><br />
   <br />

   incrment : <?php $var2++; echo $var2 ?><br />
   decrement : <?php $var2--; echo $var2 ?><br />
</body>
</html>