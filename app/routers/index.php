<?php
// ROUTER PRINCIPALE


// route par défaut
// pattern: /
// CTRL: pagesController
// Action: homeAction
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);