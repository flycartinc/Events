<?php
namespace Flycartinc\Events;

use Flycartinc\Events\Platforms\Wordpress;
use Flycartinc\Events\Platforms\Joomla;

class Event
{
    public static $platform;

    public static function __callStatic($name, $arguments)
    {
        switch ($name) {

            case 'wordpress':
                return new Wordpress();
                break;

            case 'joomla':
                return new Joomla();
                break;

            default:
                return new Wordpress();
                break;

        }
    }

}