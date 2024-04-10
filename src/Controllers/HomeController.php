<?php

namespace src\Controllers;

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

        $this->render("accueil", ["erreur" => $erreur]);
    }

    public function connexion()
    {
        $this->render("accueil", ["section" => 'menu', 'action' => 'connexion']);
    }

    public function inscription()
    {
        $this->render("accueil", ["section" => 'menu', 'action' => 'inscription']);
    }

    public function formulaireResa()
    {
        $this->render("formulaireReservation", ["erreur" => '']);
    }

    public function quit()
    {
        session_destroy();
        header('location: ' . HOME_URL);
        die();
    }

    public function new()
    {
        $this->render("dashboard", ["section" => 'new', 'action' => 'inscription']);
    }

    public function page404(): void
    {
        header("HTTP/1.1 404 Not Found");
        $this->render('404');
    }
}
