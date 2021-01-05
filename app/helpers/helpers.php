<?php

function getFirstPrice($harga = '0.0'){
    $explode = explode('.', $harga);
    $first = reset($explode);
    return $first;
}

function getLastPrice($harga = '0.0'){
    $explode = explode('.', $harga);
    $last = end($explode);
    return $last;
}
