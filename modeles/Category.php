<?php

class Category{

    private $id;
    private $name;
    private $description;
    private $method;
    private $link;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
       
        $this->name = $name;
        
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function add() : bool
    {
        $db = new Database();
        $result = $db->insert(
            "INSERT INTO category (`name`, `description`) VALUES (?,?)",
            [$this->name, $this->description]
        );

        return $result;
    }

    public function edit() : bool
    {
        $db = new Database();
        $result =$stmt = $db->edit("UPDATE category SET `description` = ?, `name`=? WHERE id=?", [ $this->description,$this->name, $this->id]);
        return $result;
    }

    public static function delete(int $id_cat) : bool
    {
        $db = new Database();

        $total = $db->selectOne("SELECT COUNT(id) AS total FROM post WHERE id_category = ?", [$id_cat]);

        if($total['total']> 0){
            Post::deleteByCategory($id_cat);
        }
        $result = $db->delete(
            "DELETE FROM category WHERE id= ?",
            [$id_cat]
        );

        return $result;
    }

    public static function list() : array
    {
        $db= new Database();
        $result = $db->selectMany("Category", "SELECT * FROM category");
        return $result;
    }

    public static function show($id_cat) : Category
    {
        $db= new Database();
        $result = $db->selectOne("Category", "SELECT * FROM category WHERE id=?", [$id_cat]);
        return $result;
    }

    /**
     * Get the value of method
     */ 
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set the value of method
     *
     * @return  self
     */ 
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get the value of link
     */ 
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     *
     * @return  self
     */ 
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }
}