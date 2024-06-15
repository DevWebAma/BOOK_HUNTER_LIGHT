<?php

use App\Controllers\AuthorsController;


//CTRL: AuthorsController
include '../app/controllers/authorsController.php';

switch ($_GET['authors']):
  case 'show':
    //Action: showAction
    AuthorsController\showAction($connexion, $_GET['id']);
    break;
  default:
    //ACTION: indexAction
    AuthorsController\indexAction($connexion);
    break;
  endswitch;