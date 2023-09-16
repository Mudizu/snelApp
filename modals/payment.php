<?php
class payement
{
    private $id;
    private $IdAbonne;
    private $montant;
    private $mois;
    private $Ref;
    private $Date_;

    public function __construct($id, $IdAbonne, $montant, $mois, $Ref, $Date_)
    {
        $this->id = $id;
        $this->IdAbonne = $IdAbonne;
        $this->montant = $montant;
        $this->mois = $mois;
        $this->Ref = $Ref;
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
     * Get the value of IdAbonne
     */ 
    public function getIdAbonne()
    {
        return $this->IdAbonne;
    }

    /**
     * Set the value of IdAbonne
     *
     * @return  self
     */ 
    public function setIdAbonne($IdAbonne)
    {
        $this->IdAbonne = $IdAbonne;

        return $this;
    }

    /**
     * Get the value of montant
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @return  self
     */ 
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get the value of mois
     */ 
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set the value of mois
     *
     * @return  self
     */ 
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get the value of Ref
     */ 
    public function getRef()
    {
        return $this->Ref;
    }

    /**
     * Set the value of Ref
     *
     * @return  self
     */ 
    public function setRef($Ref)
    {
        $this->Ref = $Ref;

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