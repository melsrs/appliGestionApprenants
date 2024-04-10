<?php

namespace src\Repositories;

use PDO;
use PDOException;
use src\Models\Database;
use src\Models\User;

class UserRepository
{
    private $DB;

    public function __construct()
    {
        $database = new Database;
        $this->DB = $database->getDB();

        require_once __DIR__ . '/../../config.php';
    }

    public function getAllUsers()
    {
        $sql = "SELECT * FROM " . PREFIXE . "user;";

        $retour = $this->DB->query($sql)->fetchAll(PDO::FETCH_CLASS, User::class);

        return $retour;
    }

    public function getThisUserById(int $id_user): User|bool
    {
        $sql = "SELECT * FROM " . PREFIXE . "user WHERE ID_USER = :ID_USER";

        $statement = $this->DB->prepare($sql);
        $statement->bindParam(':id_user', $id_user);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
        $retour = $statement->fetch();

        return $retour;
    }

    public function getThoseUsersByName(string $nom): array
    {
        $sql = "SELECT * FROM " . PREFIXE . "user WHERE NOM = :NOM";

        $statement = $this->DB->prepare($sql);

        $statement->bindParam(':nom', $nom);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, User::class);
    }

    public function CreateThisUser(User $User): bool
    {
        $sql = "INSERT INTO " . PREFIXE . "user (ID_USER, NOM, PRENOM, EMAIL, MDP, COMPTE_ACTIF, ID_ROLE) VALUES (:ID_USER, :NOM, :PRENOM, :EMAIL, :MDP, :COMPTE_ACTIF, :ID_ROLE)";

        $statement = $this->DB->prepare($sql);

        $retour = $statement->execute([
            ':ID_USER' => $User->getIdUser(),
            ':NOM' => $User->getNom(),
            ':PRENOM' => $User->getPrenom(),
            ':EMAIL' => $User->getEmail(),
            ':MDP' => $User->getMdp(),
            ':COMPTE_ACTIF' => $User->getCompteActif(),
            ':ID_ROLE' => $User->getIdRole()

        ]);

        return $retour;
    }

    public function UpdateThisUser(User $User): bool
    {
        $sql = "UPDATE " . PREFIXE . "user 
            SET
              NOM = :NOM,
              PRENOM =:PRENOM,
              EMAIL =:EMAIL,
              MDP =:MDP,
              COMPTE_ACTIF =:COMPTE_ACTIF,
              ID_ROLE =:ID_ROLE
            WHERE ID_USER = :ID_USER";

        $statement = $this->DB->prepare($sql);

        $retour = $statement->execute([
            ':ID_USER' => $User->getIdUser(),
            ':NOM' => $User->getNom(),
            ':PRENOM' => $User->getPrenom(),
            ':EMAIL' => $User->getEmail(),
            ':MDP' => $User->getMdp(),
            ':COMPTE_ACTIF' => $User->getCompteActif(),
            ':ID_ROLE' => $User->getIdRole()
        ]);

        return $retour;
    }

    public function deleteThisUser(int $id_user): bool
    {
        try {
            $sql = "DELETE FROM " . PREFIXE . "retard_absence WHERE ID_USER = :ID_USER;
                    DELETE FROM " . PREFIXE . "promo_user WHERE ID_USER = :ID_USER;
                    DELETE FROM " . PREFIXE . "user WHERE ID_USER = :ID_USER;";

            $statement = $this->DB->prepare($sql);

            return $statement->execute([':id_user' => $id_user]);
        } catch (PDOException $error) {
            echo "Erreur de suppression : " . $error->getMessage();
            return FALSE;
        }
    }
}
