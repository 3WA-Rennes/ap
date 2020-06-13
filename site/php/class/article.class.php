<?php

class Article
{
    public function getArticle($db)
    {
        $qlGet='SELECT * FROM ?';
        $query=$db->prepare($qlGet);
        $query->execute(['article']); 
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['article']=$result;

    }
};