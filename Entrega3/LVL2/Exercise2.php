<?php
define("XOCOPRICE", 1.00);
define("GUMPRICE", 0.50);
define("CANDYPRICE", 1.50);

echo priceXoco(2) + priceGum(1) + priceCandy(1);


function priceXoco($quantity){
    return XOCOPRICE * $quantity;
}
function priceGum($quantity){
    return GUMPRICE * $quantity;
}
function priceCandy($quantity){
    return CANDYPRICE * $quantity;
}