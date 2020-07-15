<?php
//autoload classes 
session_start();
// array of different configs -
$GLOBALS['config'] = array (
    'mysql'=>array(
        'host' => '127.0.0.1:3308', // dfined port etc
        'username' =>'root',
        'password'=> '',
        'db'=>'dburs'
    ),
    'remember' =>array(
        'cookie_name'=>'hash',
        'cookie_expiry'=> 86400
    ),
    'session' =>array(
        'session_name'=>'user'
    )
);

//autoloading classes
spl_autoload_register(function($class){

    require_once 'classes/'. $class .'.php';

});

//including functions
require_once 'functions/sanitize.php';