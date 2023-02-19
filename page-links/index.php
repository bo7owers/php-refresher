<?php
$heading = 'Home';

// Create function dump and die
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

require "./views/index.view.php";