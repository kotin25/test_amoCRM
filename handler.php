<?php

header('Content-Type: text/html; charset=utf-8');

$root = __DIR__.DIRECTORY_SEPARATOR;

require $root . 'errors.php';
require $root . 'auth.php';
require $root . 'lead_list.php';
require $root . 'lead_id.php';
require $root . 'task.php';
require $root . 'task_set.php';
