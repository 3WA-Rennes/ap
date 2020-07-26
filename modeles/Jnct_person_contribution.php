<?php

class Jnct_person_contribution{
    private $id;
    private $person_id;    
    private $contribution_id;


    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }


    

    /**
     * Get the value of person_id
     */ 
    public function getPerson_id()
    {
        return $this->person_id;
    }

    /**
     * Set the value of person_id
     *
     * @return  self
     */ 
    public function setPerson_id($person_id)
    {
        $this->person_id = $person_id;

        return $this;
    }

    /**
     * Get the value of contribution_id
     */ 
    public function getContribution_id()
    {
        return $this->contribution_id;
    }

    /**
     * Set the value of contribution_id
     *
     * @return  self
     */ 
    public function setContribution_id($contribution_id)
    {
        $this->contribution_id = $contribution_id;

        return $this;
    }

    public static function list() : array
    {
        $db= new Database();
        $result = $db->selectMany("Jnct_person_contribution", "SELECT * FROM jnct_person_contribution");
        return $result;
    }


    public static function list_by_id_person($id_person) : array
    {
        $db= new Database();
        $result = $db->selectMany("Jnct_person_contribution", "SELECT * FROM jnct_person_contribution WHERE person_id =$id_person");
        return $result;
    }



}

?>