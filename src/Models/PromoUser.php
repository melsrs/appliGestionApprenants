<?php

//TABLE INT 

namespace src\Models;

use src\Services\Hydratation;

class PromoUser
{
    private $id_user;
    private $id_promo;

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
     * Get the value of id_promo
     */
    public function getIdPromo()
    {
        return $this->id_promo;
    }

    /**
     * Set the value of id_promo
     */
    public function setIdPromo($id_promo): self
    {
        $this->id_promo = $id_promo;

        return $this;
    }
}