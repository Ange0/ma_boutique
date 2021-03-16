<?php

use Gloudemans\Shoppingcart\Facades\Cart;

if (!function_exists('getFomatterPrice')) {
    function getFomatterPrice($price, $qty = 1)
    {
        $price = $price * $qty;

        return number_format($price, 0, '', ' ');
    }
}



