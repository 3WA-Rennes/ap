
<?php
    //session_start();
    session_destroy();
    unset($_SESSION);
    //header('Location:index.php')
?>

<form action="" method="post" class='center'> 
    Vous avez été déconnecté.
    <button type="submit">Revenir à l'accueil</button>
</form>
