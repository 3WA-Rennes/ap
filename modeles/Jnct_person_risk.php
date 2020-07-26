<?php

class Jnct_person_risk{
    private $id;
    private $person_id;    
    private $risk_id;


    

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
     * Get the value of risk_id
     */ 
    public function getRisk_id()
    {
        return $this->risk_id;
    }

    /**
     * Set the value of risk_id
     *
     * @return  self
     */ 
    public function setRisk_id($risk_id)
    {
        $this->risk_id = $risk_id;

        return $this;
    }

    public static function list() : array
    {
        $db= new Database();
        $result = $db->selectMany("Jnct_person_risk", "SELECT * FROM jnct_person_risk");
        return $result;
    }


    public static function list_by_id_person($id_person) : array
    {
        $db= new Database();
        $result = $db->selectMany("Jnct_person_risk", "SELECT * FROM jnct_person_risk WHERE person_id =$id_person");
        return $result;
    }



}

?>