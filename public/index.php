<?php
// DISPATCHER

//1_INITIALISATION
require_once '../core/init.php';

var_dump($connexion);

//2_ROUTER
require_once '../app/routers/index.php';

//3_TEMPLATE
require_once '../app/views/templates/index.php';