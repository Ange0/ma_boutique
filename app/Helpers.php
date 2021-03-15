<?php

function getFomatterPrice($price, $qty = 1)
{
    
    
    $price = $price * $qty;
    
    return number_format($price,0,'', ' ');
}