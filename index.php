<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $provisionedActivities = array("Specs", "Mugs", "Sausage Rolls"); // declares the array
    foreach($provisionedActivities as $x) {
        print "<p>$x</p>";
    }

    ?>
</p>
</body>
</html>