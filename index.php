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
        $mugsAvailable = $i % 3;
        $specsAvailable = $i % 2;
        $rollsAvailable = $i & 4;

        if ($mugsAvailable == 0 && $specsAvailable == 0 && $rollsAvailable == 0) {
            print "On day " . $i . " of the month specs, mugs and sausage rolls are all available." . "\r\n";
        }
        elseif ($mugsAvailable == 0 && $specsAvailable == 0) {
            print "On day " . $i . " of the month specs and mugs are available." . "\r\n";
        }
        elseif ($mugsAvailable == 0 && $rollsAvailable == 0) {
            print "On day " . $i . " of the month mugs and rolls are available." . "\r\n";
        }
        elseif ($specsAvailable == 0 && $rollsAvailable == 0) {
                print "On day " . $i . " of the month mugs and rolls are available." . "\r\n";
        }
        else {
            print "On day " . $i . " of the month no products are available." . "\r\n";
        }
    }
    ?>
</p>
</body>
</html>