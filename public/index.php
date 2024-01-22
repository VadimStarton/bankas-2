<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');


use Bank\App\App;
use Bank\App\Message;
use Bank\App\Auth;
session_start();

 
require '../vendor/autoload.php';

define('ROOT', __DIR__ . '/../'); //rodo kur musu visi faila sudeti
define('URL', 'http://localhost/testbank/Bank/'); //rodo, koks adresiukas

Message::get();
Auth::get();


echo App::run();