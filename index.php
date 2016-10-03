<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $age = 19;
    $wantedGoods = "mugs";
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

    switch($wantedGoods) {
        case "specs":
            echo "You need to be 16 to buy specs.";
            break;
        case "mugs":
            echo "You need to be 18 to buy mugs.";
            break;
        case "sausage rolls":
            echo "You need to be 21 to buy sausage rolls.";
            break;
        default:
            echo "That isn't an option!!!!";
    }
    ?>
</p>
</body>
</html>