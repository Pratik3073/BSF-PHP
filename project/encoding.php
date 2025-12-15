<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encoding</title>
</head>

<body>
    <?php
        // Page path that will be encoded for safe URL usage
        $url_page = "php/created/page/url.php";

        // Parameters containing spaces and special characters
        $param1 = "this is a string";
        $param2 = '"bad"/<>character$';

        // Link text with HTML-sensitive characters
        $linktext = "<CLick> & you see";
    ?>

    <?php
        // Base URL
        $url = "http://localhost/";

        // Encode URL path using rawurlencode (safe for URLs)
        $url .= rawurlencode($url_page);

        // Encode query parameters using urlencode
        $url .= "?param1=" . urlencode($param1);
        $url .= "&param2=" . urlencode($param2);

        // htmlspecialchars prevents HTML injection in attributes
    ?>

    <!-- Escape URL and link text to prevent HTML issues -->
    <a href="<?php echo htmlspecialchars($url); ?>">
        <?php echo htmlspecialchars($linktext); ?>
    </a>
</body>
</html>
