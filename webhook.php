<?php

$mode = $_GET["hub_mode"];
$challenge = $_GET["hub_challenge"];
$token = $_GET["hub_verify_token"];

echo $challenge;

$json = file_get_contents('php://input');

$myfile = fopen("text.txt", "a") or die("Unable to open file!");
fwrite($myfile, print_r($_GET, true));
fwrite($myfile, print_r($_POST, true));
fwrite($myfile, $json);

fclose($myfile);