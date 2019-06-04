<?php
declare(strict_types=1);

namespace App\Controller;


class DieselCar implements Car
{
    public function start()
    {
        echo sprintf('%s エンジンスタートしました！', $this->DieselIgnition());
    }

    /**
     * 軽油に点火します
     * @return string
     */
    private function DieselIgnition(): string
    {
        return '軽油ボーン！';
    }
}