<?php

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

const BASE_PATH = __DIR__ . "/../";

