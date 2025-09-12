<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timezone</title>
</head>
<body>
    <?php
    
    print date("D, d M Y H:i:s")."<br>";
    date_default_timezone_set("America/Bogota");
    print date("D, d M Y H:i:s")."<br>";
    
    ?>
</body>
</html>