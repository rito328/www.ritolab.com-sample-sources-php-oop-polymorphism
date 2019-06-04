<?php
declare(strict_types=1);

namespace App\Controller;


class index
{
    public function index()
    {
        $driver = new driver();


        $driver->on(new GasolineCar());
        // => ガソリンばーん！ エンジンスタートしました！

        $driver->on(new DieselCar());
        // => 軽油ボーン！ エンジンスタートしました！

        $driver->on(new ElectricCar());
        // => 電気ビリビリー！ エンジンスタートしました！
    }
}