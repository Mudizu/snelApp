<?php
class admins
{
    private $id;
    private $Nom;
    private $Mdp;
    private $IdAdmin;
    private $Rol;
    private $Date_;

    public function __construct($id, $Nom, $Mdp, $IdAdmin, $Rol, $Date_)
    
    {
        $this->id = $id;        
        $this->Nom = $Nom;
        $this->Mdp = $Mdp;
        $this->IdAdmin = $IdAdmin;
        $this->Rol = $Rol;
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
     * Get the value of Nom
     */ 
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set the value of Nom
     *
     * @return  self
     */ 
    public function setNom($Nom)
    {
        $this->Nom = $Nom;

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
     * Get the value of IdAdmin
     */ 
    public function getIdAdmin()
    {
        return $this->IdAdmin;
    }

    /**
     * Set the value of IdAdmin
     *
     * @return  self
     */ 
    public function setIdAdmin($IdAdmin)
    {
        $this->IdAdmin = $IdAdmin;

        return $this;
    }

    /**
     * Get the value of Role
     */ 
    public function getRol()
    {
        return $this->Rol;
    }

    /**
     * Set the value of Role
     *
     * @return  self
     */ 
    public function setRol($Rol)
    {
        $this->Rol = $Rol;

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