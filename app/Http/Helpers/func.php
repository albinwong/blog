<?php
function cyrptoPriceFormat($price, $flag = '$')
{
    $res = null;
    if ($price >= 10) {
        $res = number_format($price, 2);
    } else if ($price < 10 && $price >= 0.1) {
        $res = number_format($price, 4);
    } else if ($price < 0.1 && $price >= 0.001) {
        $res = number_format($price, 6);
    } else {
        $res = number_format($price, 8);
    }
    return $flag.$res;
}

function CryptoVolumnFormat($num, $flag = '', $locale = 'cn')
{
    $res = null;
    if (empty($num)) {
        $res = '0.00';
    } elseif ($num >= 10000 && $num < 1000000) {
        $res = round($num/1000, 2).'K';//千
    } elseif ($num >= 1000000 && $num < 100000000000) {
        $res = number_format($num/1000000, 2).'M';//百万
    } elseif ($num >= 100000000000) {
        $res = round($num/100000000000, 2).'B';//十亿
    } else {
        $res = number_format($num, 2, ".", ',');
    }
    return $flag.$res;
}
