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

    $provisionedActivities[1] = "Hugs"; // modifies position 1 (Mugs)
    foreach($provisionedActivities as $x) {
        print "<p>$x</p>";
    }

    unset($provisionedActivities[2]); // removes the array in position 2 (Sausage Rolls
    foreach($provisionedActivities as $x) {
        print "<p>$x</p>";
    }
    ?>
</p>
</body>
</html>