<?php

require '../src/Wcs/Hello.php';
use App\Wcs\Hello;

$hello = new Hello();

echo $hello->talk();