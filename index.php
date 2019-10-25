<?php
include 'vendor/autoload.php';

use Gregwar\Captcha\CaptchaBuilder;

$builder = new CaptchaBuilder;
$builder->build();
header('Content-type: image/jpeg');
$builder->output();
