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
    echo $provisionedActivities[1] // outputs "Hugs"
    ?>
</p>
</body>
</html>