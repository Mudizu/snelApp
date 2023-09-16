<?php
class compteur
{
    private $id;
    private $IdCompteur;
    private $Status;

    public function __construct($id, $IdCompteur, $Status)
    
    {
        $this->id = $id;
        $this->IdCompteur = $IdCompteur;        
        $this->Status = $Status;
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
     * Get the value of Status
     */ 
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Set the value of Status
     *
     * @return  self
     */ 
    public function setStatus($Status)
    {
        $this->Status = $Status;

        return $this;
    }
}