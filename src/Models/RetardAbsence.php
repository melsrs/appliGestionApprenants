<?php

//TABLE INT 

namespace src\Models;

use src\Services\Hydratation;

class RetardAbsence
{
    private $id_cours;
    private $id_user;
    private $retard;
    private $absence;
    private $date_retard_absence;

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
     * Get the value of retard
     */
    public function getRetard()
    {
        return $this->retard;
    }

    /**
     * Set the value of retard
     */
    public function setRetard($retard): self
    {
        $this->retard = $retard;

        return $this;
    }

    /**
     * Get the value of absence
     */
    public function getAbsence()
    {
        return $this->absence;
    }

    /**
     * Set the value of absence
     */
    public function setAbsence($absence): self
    {
        $this->absence = $absence;

        return $this;
    }

    /**
     * Get the value of date_retard_absence
     */
    public function getDateRetardAbsence()
    {
        return $this->date_retard_absence;
    }

    /**
     * Set the value of date_retard_absence
     */
    public function setDateRetardAbsence($date_retard_absence): self
    {
        $this->date_retard_absence = $date_retard_absence;

        return $this;
    }
}