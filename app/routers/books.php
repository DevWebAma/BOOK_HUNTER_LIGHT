<?php

use App\Controllers\BooksController;


//CTRL: booksController
include '../app/controllers/booksController.php';

switch ($_GET['books']):
  case 'show':
    //Action: showAction
    BooksController\showAction($connexion, $_GET['id']);
    break;
  default:
    //ACTION: indexAction
    BooksController\indexAction($connexion);
    break;
  endswitch;