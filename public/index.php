<?php

require '../vendor/autoload.php';

use HelloWorld\SayHello;
use App\Wcs\Hello;
echo SayHello::world();

$hi = new Hello();
echo $hi->talk();
