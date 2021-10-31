<?php
require_once("functions.php");
session_start();

$authUrl = getAuthorizationUrl("", "");

header('location:'.$authUrl);

?>