<?php

use myPHPnotes\Microsoft\Auth;
use myPHPnotes\Microsoft\Handlers\Session;
use myPHPnotes\Microsoft\Models\User;

session_start();
require "vendor/autoload.php";

$auth = new Auth(Session::get("tenant_id"),Session::get("client_id"),  Session::get("client_secret"), Session::get("redirect_uri"), Session::get("scopes"));
$data = $auth->getToken($_REQUEST['code'], Session::get("state"));
$auth->setAccessToken($data->access_token);

$user = new User;
var_dump($user->data);

echo "<b>getGivenName :</b>"  .$user->data->getGivenName() . "<br>"; 
echo "<b>getDisplayName :</b>"  .$user->data->getDisplayName() . "<br>"; 
echo "<b>getSurname :</b>"  .$user->data->getSurname() . "<br>"; 
echo "<b>getUserPrincipalName :</b>"  .$user->data->getUserPrincipalName() . "<br>"; 
echo "<b>getGivenName :</b>"  .$user->data->getGivenName() . "<br>"; 
echo "<b>getCity :</b>"  .$user->data->getCity() . "<br>"; 
echo "<b>getCompanyName :</b>"  .$user->data->getCompanyName() . "<br>"; 
echo "<b>getCountry :</b>"  .$user->data->getCountry() . "<br>"; 
echo "<b>getJobTitle :</b>"  .$user->data->getJobTitle() . "<br>"; 
echo "<b>getMobilePhone :</b>"  .$user->data->getMobilePhone() . "<br>"; 
