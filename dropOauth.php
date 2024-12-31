<?php

$myfile = fopen("text.txt", "a") or die("Unable to open file!");
fwrite($myfile, print_r($_GET, true));
fwrite($myfile, print_r($_POST, true));
fclose($myfile);