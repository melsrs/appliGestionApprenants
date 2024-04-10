<?php

namespace src\Models;

use src\Services\Hydratation;

class Role
{
    private $id_role;
    private $nom;

    use Hydratation;


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