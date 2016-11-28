<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\App as Application;
use Mvc5\Service\Context;
use Mvc5\Service\Facade;
use Mvc5\Service\Service as _Service;

trait Service
{
    /**
     *
     */
    use Facade
    {
        call as public;
        param as public;
        plugin as public;
        shared as public;
        service as public;
        trigger as public;
    }

    /**
     * @param _Service $service
     * @return _Service
     */
    static function bind(_Service $service)
    {
        return Context::bind($service);
    }

    /**
     * @param $config
     * @param callable|null $provider
     * @param bool $scope
     * @return _Service
     */
    static function context($config, callable $provider = null, $scope = true)
    {
        return static::bind(new Application($config, $provider, $scope));
    }
}
