<?php
// ROUTER PRINCIPALE

// route des books
//pattern: /?books
if(isset($_GET['books'])) : 
  include_once '../app/routers/books.php';


// route des authors
//pattern: /?authors
elseif(isset($_GET['authors'])) : 
  include_once '../app/routers/authors.php';



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