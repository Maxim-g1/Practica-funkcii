<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //----------------------------------------------------1
    function getMin(float $x, float $y, float $n)
    {
        if ($x < $y && $x < $n) {
            return $x;
        } elseif ($y < $x && $y < $n) {
            return $y;
        } elseif ($n < $x && $n < $y) {
            return $n;
        }
    }
    echo getMin(1.5, 4.5, 6.2);
    echo "<br>";
    //----------------------------------------------------2
    function getRes(&$x)
    {
        $x = $x * 2;
    }


    //----------------------------------------------------3
    function factorial($n)
    {
        if ($n === 1) {
            return 1;
        } elseif ($n === 0) {
            return 0;
        } elseif ($n < 0) {
            return $n * factorial($n + 1);
        }
        return $n * factorial($n - 1);
    }
    echo factorial(5);
    //----------------------------------------------------4
    echo "<br>";
    function res($n) {}
    echo factorial(5)
    ?>
</body>

</html>