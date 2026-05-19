<?php
require_once '../app/core/App.php';
require_once '../app/Middleware.php';
$middleware = new Middleware();
$middleware->isAuthenticated();
$app = new App();
?>