<?php
declare(strict_types=1);

use Psr\Container\ContainerInterface;
use function DI\factory;

return [
    'index' => factory(function (ContainerInterface $c) {
        return new App\Controller\index();
    }),
];
