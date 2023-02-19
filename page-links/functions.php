<?php

// Create function dump and die
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

// Find server request uri
function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}