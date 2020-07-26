<?php

class Database
{
    

    private $cnx;
  

    public function __construct()
    {
        require_once "config.php";
        try {
            $this->cnx= new PDO("mysql:host=".DATABASE['host'].";dbname=".DATABASE['dbname'].";charset=utf8", DATABASE['username'], DATABASE['password']);
         } catch (PDOException $error) {
             echo $error->getMessage();
             exit;
         }
    }

    // $cnx= new PDO("mysql:host=".DATABASE['host'].";dbname=".DATABASE['dbname'].";charset=utf8", DATABASE['username'], DATABASE['password']);

    public function selectOne(string $class ,string $requete, array $params = [])
    {
        $stmt= $this->cnx->prepare($requete);
        $stmt->execute($params);
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        $result = $stmt->fetch();
        return $result;
    }

    public function selectMany(string $class, string $requete, array $params = [])
    {
        $stmt= $this->cnx->prepare($requete);
        $stmt->execute($params);
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        $result = $stmt->fetchAll();
        
        return $result;
    }

    public function search(string $class ,string $requete, array $params = [])
    {
        $stmt= $this->cnx->prepare($requete);
        $stmt->execute($params);
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        $result = $stmt->fetchAll();
        
        return $result;
    }


    public function insert(string $requete, array $params)
    {
        $stmt = $this->cnx->prepare($requete);
        $result= $stmt->execute($params);        
        return $result;
    }
    
    public function getLastId()
    {
        return $this->cnx->lastInsertId();
    }
   
    public function delete(string $requete, array $params)
    {
        $stmt= $this->cnx->prepare($requete);
        $result= $stmt->execute($params);
        return $result;
    }

    public function edit(string $requete, array $params)
    {
        $stmt= $this->cnx->prepare($requete);
        $result= $stmt->execute($params);
        return $result;
    }

    public function __destruct()
    {
        $this->cnx = null;
    }

}


