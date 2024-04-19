<?php

use src\Controllers\HomeController;

$uri = $_SERVER['REQUEST_URI'];
$methode = $_SERVER['REQUEST_METHOD'];

$HomeController = new HomeController();


switch ($uri) {
  case '/':
    if ($methode == "POST"){
      $HomeController-> connexion();
    }else {
      $HomeController-> index();
    }
      break;
  case '/accueil':
      $HomeController-> accueil();
      break;
    case '/accueilFormateur':
      $HomeController-> accueilFormateur();
      break;

  default:
      # code...
      break;
}