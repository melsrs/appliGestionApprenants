<?php

namespace src\Controllers;

use src\Models\User;

use src\Repositories\UserRepository;
use src\Services\Reponse;

class UserController
{
    private $UserRepo;
    private $ReservationRepo;

    use Reponse;

    public function __construct()
    {
        // Instanciez les 3 propriétés avec les repositories concernés.
        $this->UserRepo = new UserRepository();
        // $this->ReservationRepo = new ReservationRepository();
    }

    public function login($email, $mdp)
    {
        $userRepo = new UserRepository();
        $reponse = $userRepo->login($email, $mdp);
        echo json_encode($reponse);
    }
}