<?php

namespace src\Controllers;

use src\Repositories\UserRepository;
use src\Services\Reponse;

class HomeController
{

    use Reponse;

    public function index(): void
    {
        if (isset($_GET['erreur'])) {
            $erreur = htmlspecialchars($_GET['erreur']);
        } else {
            $erreur = '';
        }

        $this->render("connexion", ["erreur" => $erreur]);
    }

    public function accueil()
    {
        $this->render("accueil", ["section" => 'menu', 'action' => 'connexion']);
    }

    
    public function accueilFormateur()
    {
        $this->render("accueilFormateur", ["section" => 'menu', 'action' => 'connexion']);
    }

    public function connexion()
    {
        if (isset($_POST['Email']) && isset($_POST['Password'])) {
            $UserRepo = new UserRepository;

            $user = $UserRepo->checkEmailExists($_POST['Email']);

            if ($user && password_verify($_POST['_Password'], $user->getMdp())) {
                $_SESSION['connecté'] = true;

                echo json_encode(array("success" => true));
                exit();
            } else {
                echo json_encode(array("success" => false, "message" => "L'email ou le mot de passe est incorrect."));
                exit();
            }
        }
    }
}

if (!empty(file_get_contents('php://input'))) {
    $data = json_decode(file_get_contents('php://input'));

    if ($data) {
        $password = htmlspecialchars($data->password);
        $email = htmlspecialchars($data->email);
        $userRepo = new UserRepository;
        $user = $userRepo->checkEmailExists($email);
    }
}
