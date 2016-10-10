

<!DOCTYPE html>
<html>
<head>
    <title>DB7</title>
</head>
<body>
//navigation
<h1> <a href="dbconnect.php"> DB PHP! </a>  </h1>
<?php

define('DB_SERVER', 'eu-cdbr-azure-west-a.cloudapp.net');
define('DB_USERNAME', 'bc35ba43396f27');
define('DB_PASSWORD', '6fab8060');
define('DB_DATABASE', 'db_7' );

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


    ?>
</body>
</html>