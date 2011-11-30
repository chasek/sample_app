<!DOCTYPE html>

<head>
</head>
<body>

<p>Hello World!</p>


<?php
    $link = mysql_connect('132.241.49.7:3306', 'root', 'root');
    if(!$link) {
        die('Could not connect: ' . mysql_error());
    }
    echo 'Connected successfully';
?>


</body>
</html>