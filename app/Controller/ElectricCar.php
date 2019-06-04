<?php
declare(strict_types=1);

namespace App\Controller;


class ElectricCar implements Car
{
    public function start()
    {
        echo sprintf('%s エンジンスタートしました！', $this->onElectric());
    }

    /**
     * 電気でモーターを始動させます
     * @return string
     */
    private function onElectric(): string
    {
        return '電気ビリビリー！';
    }
}