<?php
sesson_start();
include("function.php");
require_once'JustInsta/vendor/autoload.php';
$data = NEW bootstrap([
	'domain'=>'www.instagram.com',
	'token'=>'1164463571:AAFXwL8MfGxFT_zn0ehg0FVpg3Oa000P61s'
]);
echo $data->run();
