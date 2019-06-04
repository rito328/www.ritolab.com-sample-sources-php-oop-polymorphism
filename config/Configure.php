<?php
declare(strict_types=1);

namespace Configure;

class Configure
{
    private static $instance;

    private static $Config;

    private function __construct()
    {
        self::$Config['app'] = include "app.php";
    }

    public static function Instance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Configure();
        }
        return self::$instance;
    }

    /**
     * @param string $keys
     * @return mixed
     * @throws \Exception
     * // Configure::read('app.sample.env')
     */
    public static function read(string $keys)
    {
        if ($keys === '') throw new \Exception('Argument 1 passed to Configure\Configure::read() must be Not Blank.');

        $keys = explode('.', $keys);
        $result = self::$Config;
        foreach ($keys as $key => $val) {
            $result = $result[$val];
        }
        return $result;
    }

    /**
     * @throws \Exception
     */
    public final function __clone()
    {
        throw new \Exception('This Instance is Not Clone');
    }

    /**
     * @throws \Exception
     */
    public final function __wakeup()
    {
        throw new \Exception('This Instance is Not unserialize');
    }
}