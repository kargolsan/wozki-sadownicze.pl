<?php
/**
 * Created by PhpStorm.
 * User: Karol Golec
 * Date: 20.08.2016
 * Time: 23:03
 */

namespace App\Services;
use Monolog;


class LogService
{
    public static function warning($message) {
        $log = new Monolog\Logger('logger');
        $log->pushHandler(new Monolog\Handler\StreamHandler(__DIR__ . '/../../storage/logs/app.log', Monolog\Logger::WARNING));
        $log->addWarning($message);
    }
}