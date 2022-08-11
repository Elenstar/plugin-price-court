<?php

Route::get('prices', function () {
    $prices = \ElenStar\plugin-price-court\Models\Price::all();
    return $prices;
});