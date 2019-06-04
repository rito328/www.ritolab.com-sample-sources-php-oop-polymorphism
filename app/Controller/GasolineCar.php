<?php
declare(strict_types=1);

namespace App\Controller;


class GasolineCar implements Car
{
    public function start()
    {
        echo sprintf('%s エンジンスタートしました！', $this->gasolineIgnition());
    }

    /**
     * ガソリンに点火します
     * @return string
     */
    private function gasolineIgnition(): string
    {
        return 'ガソリンばーん！';
    }
}