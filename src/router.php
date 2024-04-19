<?php

// var_dump($_SERVER);

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

    // case '/' . 'accueil':
    //   {
    //     $HomeController->connexion();
    //   }
  
      break;
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


// case BASE_URL . "/simplon":
//   if ($methode == 'GET') {
//       $simplonController->homepage();
//   } else if ($methode == 'POST') {
//       $simplonController->create();
//   }
//   break;

// $reservationController = new ReservationController();
// $simplonController = new SimplonController();

// switch ($uri) {
//     case HOME_URL . "/":
//         $homeController->index();
//         break;
//     case HOME_URL . "/connexion":
//         if ($methode == 'GET') {
//             $reservationController->index();
//         } else if ($methode == 'POST') {
//             $reservationController->handleFormSubmission();
//         }
//         break;
        
    // case HOME_URL . "/simplon":
    //     if ($methode == 'GET') {
    //         $simplonController->homepage();
    //     } else if ($methode == 'POST') {
    //         $simplonController->create();
    //     }
    //     break;
    // default:
    //     $homeController->pageNotFound();
    //     break;
// }