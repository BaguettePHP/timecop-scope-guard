<?php

/**
 * php-timecop helper using Scope Guard pattern
 *
 * @copyright 2015 pixiv inc.
 * @license   Apache-2.0
 */
class TimeFreezeScopeGuard
{
    public function __construct($datetime)
    {
        timecop_freeze(strtotime($datetime));
    }

    public function __destruct()
    {
        timecop_return();
    }
}
