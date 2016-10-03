<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $age = 19;
    if ($age < 16) {
        print "You can't buy anything.";
    }
    elseif ($age >= 21) {
        print "You can buy specs, mugs and sausage rolls!";
    }
    elseif ($age < 18) {
        print "You can buy specs.";
    }
    else {
        print "You can buy specs and mugs";
    }
    ?>
</p>
</body>
</html>