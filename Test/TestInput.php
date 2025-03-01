<?php

require_once './Helper/Input.php';

$name = input("Name");
$channel = input("Channel");
echo "Hello $name" . PHP_EOL;
echo "$channel" . PHP_EOL;
