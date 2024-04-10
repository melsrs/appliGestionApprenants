<?php

namespace src\Models;

use src\Services\Hydratation;

class User
{
    private $id_user;
    private $nom;
    private $prenom;
    private $email;
    private $mdp;
    private $compte_actif;
    private $id_role;

    use Hydratation;

    
    /**
     * Get the value of id_user
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     */
    public function setIdUser($id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     */
    public function setPrenom($prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of mdp
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     */
    public function setMdp($mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get the value of compte_actif
     */
    public function getCompteActif()
    {
        return $this->compte_actif;
    }

    /**
     * Set the value of compte_actif
     */
    public function setCompteActif($compte_actif): self
    {
        $this->compte_actif = $compte_actif;

        return $this;
    }

    /**
     * Get the value of id_role
     */
    public function getIdRole()
    {
        return $this->id_role;
    }

    /**
     * Set the value of id_role
     */
    public function setIdRole($id_role): self
    {
        $this->id_role = $id_role;

        return $this;
    }
}
