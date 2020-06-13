<?php 
    $S=$_SESSION['article'];
    $nombreArticle=count($S); //nombre d'article dans la session
    $affichageMaxArticle=5;
    $nombreDePage=ceil($nombreArticle/$affichageMaxArticle);
    $dernierePage=$nombreDePage-1;

    if (isset($_GET['page'])) 
    {
        $numeroDePage=$_GET['page'];
    }
    else
    {
        $numeroDePage=0;
    }

    echo '<p class="center" >page actuelle : '.$numeroDePage.'</p>';

    
    $premierArticlePage=($nombreArticle-1)-$affichageMaxArticle*$numeroDePage;

    if ($numeroDePage==$dernierePage) 
    {
        $i=0; 
        do 
        {
            echo '<article><h3>'.$S[$premierArticlePage-$i]['titre'].'</h3><p class="center">Date de publication : '.$S[$premierArticlePage-$i]['date'].' -  Auteur : '.$S[$premierArticlePage-$i]['auteur'].'</p><p>'.$S[$premierArticlePage-$i]['texte'].'</p></article>';
            $i++;
        } while ($i!=($premierArticlePage+1));
    }
    else
    {
        $i=0;
        do 
        {
            
            echo '<article><h3>'.$S[$premierArticlePage-$i]['titre'].'</h3><p class="center">Date de publication : '.$S[$premierArticlePage-$i]['date'].' -  Auteur : '.$S[$premierArticlePage-$i]['auteur'].'</p><p>'.$S[$premierArticlePage-$i]['texte'].'</p></article>';
            $i++;
        } while ($i!=$affichageMaxArticle);
    }
    echo '<p class="center" >page actuelle : '.$numeroDePage.'</p>';    
?>
    
<fieldset class="center">
    <legend class="lienPage">Pages</legend>
        <?php 
            for($j=0;$j<$nombreDePage;$j++)
            {
                echo '<a href="index.php?form=article&page='.$j.'">'.$j.'</a>';
            }  
        ?>
</fieldset>



