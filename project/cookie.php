
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
  <?php
    setcookie('test',45,time()+(60*60*24*7));
  ?>
</body>
</html>