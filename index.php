<?php
require_once __DIR__ . "/autoload.php";

use core\App;

$app = new App();
$app->configure();
$app->handleRequests();
