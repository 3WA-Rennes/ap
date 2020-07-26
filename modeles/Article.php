<?php


class Article{

    private $id;
    private $title;
    private $content;
    private $createdAt;
    private $editedAt;
    private $activated;    
    private $idUser;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of createdAt
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Get the value of editedAt
     */ 
    public function getEditedAt()
    {
        return $this->editedAt;
    }

    /**
     * Set the value of editedAt
     *
     * @return  self
     */ 
    public function setEditedAt($editedAt)
    {
        $this->editedAt = $editedAt;

        return $this;
    }


    /**
     * Get the value of activated
     */ 
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * Set the value of activated
     *
     * @return  self
     */ 
    public function setActivated($activated)
    {
        $this->activated = $activated;

        return $this;
    }


    /**
    * Get the value of idUser
    */ 
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set the value of idUser
     *
     * @return  self
     */ 
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }



    public function add() : bool
    {
        # code...
    }

    public function edit() : bool
    {
        $db = new Database();
        $result = $db->edit(
            "UPDATE article SET title = ? , content = ? , idCategory = ?, `image` = ? WHERE id = ?",
            [$this->title, $this->content, $this->idCategory, $this->image, $this->id]
        );
        return $result;
    }

    public static function delete(int $id_article) : bool
    {
        # code...
    }
    /**
     * 
     * 
     */
    public static function show(int $id_article) : ?Article
    {
        $db = new Database();
    
        $result = $db->selectOne(
            "Article",
            "SELECT * FROM article  WHERE id = ?",
            [$id_article]
        );
        return $result;
    }

    public static function list(bool $limit= false) : array
    {
        $limit_request = "";
        $db = new Database();
        if($limit)
        {
            $limit_request = "LIMIT 9";
        }
        $result = $db->selectMany(
            "Article",
            "SELECT * FROM article WHERE activated = 1 ORDER BY createdAt DESC $limit_request"
        );
        return $result;
    }

    public static function listByCategory(int $id_category) : array
    {
       
        $db = new Database();
    
        $result = $db->selectMany(
            "Article",
            "SELECT * FROM article  WHERE idCategory = ? ORDER BY createdAt DESC",
            [$id_category]
        );
        return $result;
    }

    public function listByUser(int $id_user) : array
    {
        $db = new Database();
    
        $result = $db->selectMany(
            "Article",
            "SELECT * FROM article  WHERE idUser = ? ORDER BY createdAt DESC",
            [$id_user]
        );
        return $result;
    }


    public static function deleteArticleById(int $id_article) : bool
    {
        # code...
    }




}