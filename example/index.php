<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once __DIR__ .'/../vendor/autoload.php';

use Dotenv\Dotenv;
use Xmhafiz\FbFeed\Request;


// load envirionment variable
// add this package in your composer.json if want to use dotenv "vlucas/phpdotenv"
$env = new Dotenv(__DIR__ . '/../');
$env->load();

// set page
$fbSecretKey =  getenv('FB_SECRET_KEY');
$fbAppId = getenv('FB_APP_ID');
$fbPageName = getenv('FB_PAGENAME');

$response = Request::getPageFeed($fbPageName, $fbSecretKey, $fbAppId);

header('Content-type: application/json');
echo json_encode($response);
        
        