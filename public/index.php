<?php
require_once "../vendor/autoload.php";
require_once "../src/App/Wcs/Hello.php";

use App\Wcs as Hello;

$hello = new Hello;

echo $hello->talk();