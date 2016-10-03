<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $mugsAvailable = 0;
    $specsAvailable = 0;
    $rollsAvailable = 0;
    for ($i = 1; $i < 31; $i++)
    {
        $mugsAvailable = $mugsAvailable % $i;
        $specsAvailable = $specsAvailable % $i;
        $rollsAvailable = $rollsAvailable % $i;

        if ($mugsAvailable == 0 && $specsAvailable == 0 && $rollsAvailable == 0) {
            print "On day " . $i . " of the month specs, mugs and sausage rolls are all available.";
        }
        elseif ($mugsAvailable == 0 && $specsAvailable == 0) {
            print "On day " . $i . " of the month specs and mugs are available.";
        }
        elseif ($mugsAvailable == 0 && $rollsAvailable == 0) {
            print "On day " . $i . " of the month mugs and rolls are available.";
        }
        elseif ($specsAvailable == 0 && $rollsAvailable == 0) {
                print "On day " . $i . " of the month mugs and rolls are available.";
        }
        else {
            print "On day " . $i . " of the month no products are available.";
        }
    }
    ?>
</p>
</body>
</html>