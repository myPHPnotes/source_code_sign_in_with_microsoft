<?php

session_start();
require "vendor/autoload.php";

use myPHPnotes\Microsoft\Auth;

$tenant = "common";
$client_id = "6b152c50-4225-48f8-b824-c833a2a6bfb7";
$client_secret = "jXcajMv~P068wV~GBbvNPM7_Q0v5j02_p.";
$callback = "http://localhost:8080/callback.php";
$scopes = [
    'User.Read'
];


$microsoft = new Auth($tenant, $client_id,  $client_secret, $callback, $scopes);
header("location: ". $microsoft->getAuthUrl());