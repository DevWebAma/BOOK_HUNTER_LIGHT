<?php

namespace App\Controllers\AuthorsController;

use \PDO;

function indexAction(PDO $connexion) {
  include_once '../app/models/authorsModel.php';
  $authors = \App\Models\AuthorsModel\findAll($connexion);


  global $content, $title;
  $title = "catalogue";
  ob_start();
  include '../app/views/authors/index.php';
  $content = ob_get_clean();
}