<?php

class consommation
{
    private $id;
    private $IdCompteur;
    private $energie;
    private $Mois;
    private $Date_;

    public function __construct($id, $IdCompteur, $energie, $Mois, $Date_)
    {
        $this->id = $id;
        $this->IdCompteur = $IdCompteur;
        $this->energie = $energie;
        $this->Mois = $Mois;
        $this->Date_ = $Date_;
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of IdCompteur
     */ 
    public function getIdCompteur()
    {
        return $this->IdCompteur;
    }

    /**
     * Set the value of IdCompteur
     *
     * @return  self
     */ 
    public function setIdCompteur($IdCompteur)
    {
        $this->IdCompteur = $IdCompteur;

        return $this;
    }

    /**
     * Get the value of energie
     */ 
    public function getEnergie()
    {
        return $this->energie;
    }

    /**
     * Set the value of energie
     *
     * @return  self
     */ 
    public function setEnergie($energie)
    {
        $this->energie = $energie;

        return $this;
    }

    /**
     * Get the value of Mois
     */ 
    public function getMois()
    {
        return $this->Mois;
    }

    /**
     * Set the value of Mois
     *
     * @return  self
     */ 
    public function setMois($Mois)
    {
        $this->Mois = $Mois;

        return $this;
    }

    /**
     * Get the value of Date_
     */ 
    public function getDate_()
    {
        return $this->Date_;
    }

    /**
     * Set the value of Date_
     *
     * @return  self
     */ 
    public function setDate_($Date_)
    {
        $this->Date_ = $Date_;

        return $this;
    }
}