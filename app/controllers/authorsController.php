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

function showAction(PDO $connexion, int $id) {
  include_once '../app/models/authorsModel.php';
  $author = \App\Models\AuthorsModel\findOneById($connexion, $id);


  global $content, $title;
  $title = $author['firstname']. ' ' .$author['lastname'];
  ob_start();
  include '../app/views/authors/show.php';
  $content = ob_get_clean();
}