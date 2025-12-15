
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Page</title>
</head>
<body>
   <?php
    print_r($_GET);               //super globale variable
    $id = $_GET["id"];
    $name = $_GET["name"];
    echo  "<br /><strong>" . $id .": {$name}</strong>";
   ?>
   <br />
   <?php
    $string="pratik kadam";
    /*
    | Function         | Space becomes | Use case              |
| ---------------- | ------------- | --------------------- |
| `urlencode()`    | `+`           | Query strings (forms) |
| `rawurlencode()` | `%20`         | URLs, path segments   |

    */
    echo urlencode($string);//Converts special characters into safe URL format
    echo "<br />";
    echo rawurlencode($string);//Converts a string into a URL-safe format

   ?>
</body>
</html>