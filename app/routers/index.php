<?php
// ROUTER PRINCIPALE

// route des books
//pattern: /?books
//CTRL: booksController
//Action: indexAction
if(isset($_GET['books'])) : 
  include_once '../app/controllers/booksController.php';
  \App\Controllers\BooksController\indexAction($connexion); 


// route home
//pattern: /?home
//CTRL: homeController
//Action: indexAction
elseif(isset($_GET['home'])) :
  include_once '../app/controllers/pagesController.php';
  \App\Controllers\PagesController\homeAction($connexion);



// route par défaut
// pattern: /
// CTRL: pagesController
// Action: homeAction
else:
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);
endif;