<?php

class abonne
{
    private $Id;
    private $nom;
    private $phone;
    private $adresse;
    private $IdAbonne;
    private $IdCompteur;
    private $Categorie;
    private $Statut;
    private $Mdp;
    private $Date_;

    public function __construct($Id, $nom, $phone, $adresse, $IdAbonne, $IdCompteur, $Categorie, $Statut, $Mdp, $Date_)

    {
        $this->Id = $Id;
        $this->nom = $nom;
        $this->phone = $phone;
        $this->adresse = $adresse;
        $this->IdAbonne = $IdAbonne;
        $this->IdCompteur = $IdCompteur;
        $this->Categorie = $Categorie;
        $this->Statut = $Statut;
        $this->Mdp = $Mdp;
        $this->Date_ = $Date_;
    }
    

    /**
     * Get the value of Id
     */ 
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set the value of Id
     *
     * @return  self
     */ 
    public function setId($Id)
    {
        $this->Id = $Id;

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
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

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
     * Get the value of Categorie
     */ 
    public function getCategorie()
    {
        return $this->Categorie;
    }

    /**
     * Set the value of Categorie
     *
     * @return  self
     */ 
    public function setCategorie($Categorie)
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    /**
     * Get the value of Status
     */ 
    public function getStatut()
    {
        return $this->Statut;
    }

    /**
     * Set the value of Status
     *
     * @return  self
     */ 
    public function setStatut($Statut)
    {
        $this->Statut = $Statut;

        return $this;
    }

    /**
     * Get the value of Mdp
     */ 
    public function getMdp()
    {
        return $this->Mdp;
    }

    /**
     * Set the value of Mdp
     *
     * @return  self
     */ 
    public function setMdp($Mdp)
    {
        $this->Mdp = $Mdp;

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