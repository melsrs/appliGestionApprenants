<?php

namespace src\Models;

use src\Services\Hydratation;

class Promo
{
    private $id_promo;
    private $nom;
    private $date_debut;
    private $date_fin;
    private $places;

    use Hydratation;

    
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
     * Get the value of date_debut
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * Set the value of date_debut
     */
    public function setDateDebut($date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    /**
     * Get the value of date_fin
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * Set the value of date_fin
     */
    public function setDateFin($date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    /**
     * Get the value of places
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * Set the value of places
     */
    public function setPlaces($places): self
    {
        $this->places = $places;

        return $this;
    }
}