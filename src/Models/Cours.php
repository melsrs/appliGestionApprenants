<?php

namespace src\Models;

use src\Services\Hydratation;

class Cours
{
    private $id_cours;
    private $debut_cours;
    private $fin_cours;
    private $code;
    private $id_promo;

    use Hydratation;

    
    /**
     * Get the value of id_cours
     */
    public function getIdCours()
    {
        return $this->id_cours;
    }

    /**
     * Set the value of id_cours
     */
    public function setIdCours($id_cours): self
    {
        $this->id_cours = $id_cours;

        return $this;
    }

    /**
     * Get the value of debut_cours
     */
    public function getDebutCours()
    {
        return $this->debut_cours;
    }

    /**
     * Set the value of debut_cours
     */
    public function setDebutCours($debut_cours): self
    {
        $this->debut_cours = $debut_cours;

        return $this;
    }

    /**
     * Get the value of fin_cours
     */
    public function getFinCours()
    {
        return $this->fin_cours;
    }

    /**
     * Set the value of fin_cours
     */
    public function setFinCours($fin_cours): self
    {
        $this->fin_cours = $fin_cours;

        return $this;
    }

    /**
     * Get the value of code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     */
    public function setCode($code): self
    {
        $this->code = $code;

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