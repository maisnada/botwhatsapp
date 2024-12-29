<?php

$mode = $_GET["hub_mode"];
$challenge = $_GET["hub_challenge"];
$token = $_GET["hub_verify_token"];

echo $challenge;

//print_r($_GET);