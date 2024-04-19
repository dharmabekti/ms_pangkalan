<?php

if (! function_exists('idr')) {
    function idr($nominal, $dec = 0)
    {
        if($nominal != "") {
            if($dec == 0) {
                return "Rp " . number_format($nominal, $dec, ',', '.').',-';
            } elseif($dec == 2) {
                return "Rp " . number_format($nominal, 2, ',', '.');
            }
            return "-";
        } return "-";
    }
}


if (! function_exists('decimal')) {
    function decimal($nominal)
    {
        if($nominal != "") {
            return number_format($nominal, 0, ',', '.');
        } return "-";
    }
}
