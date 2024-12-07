<?php

use Nais\Providers\GoIP;

require __DIR__ . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

$obj = new GoIP("https://172.16.0.12", "admin", "password");

