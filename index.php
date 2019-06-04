<?php
declare(strict_types=1);

const __PROJECT_ROOT__ = __DIR__;

require_once "bootstrap/bootstrap.php";

$controller = $container->get('index');
$controller->index();