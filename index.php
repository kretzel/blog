<?php

// Project constants
define('PROJECT_NAME', 'halo');
define('DEFAULT_CONTROLLER', 'posts');
define('DEBUG', false);

// Load app
require 'system/classes/Application.php';
$app = new Application;
