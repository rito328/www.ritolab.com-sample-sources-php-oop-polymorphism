<?php
declare(strict_types=1);

namespace App\Controller;


class driver
{
    /**
     * 車のエンジンをかけます
     * @param Car $car
     */
    public function on(Car $car)
    {
        $car->start();
    }
}