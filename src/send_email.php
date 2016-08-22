<?php
/**
 * Created by PhpStorm.
 * User: Karol Golec
 * Date: 20.08.2016
 * Time: 22:58
 */

require __DIR__ . '/../backend/vendor/autoload.php';
use App\Services\MailService;

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../backend/', '.env');
$dotenv->load();

$mailService = new MailService();
$mailService->sendFromContact();