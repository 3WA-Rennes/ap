
<?php
require_once "utilities/config.php";
require_once "utilities/Database.php";
require_once "utilities/AbstractController.php";
require_once "controllers/DefaultController.php";
require_once "controllers/UserController.php";

require_once "modeles/User.php";
require_once "modeles/Article.php";
/*


require_once "utilities/Tools.php";




require_once "modeles/Category.php";
require_once "modeles/Person.php";
require_once "modeles/Contribution.php";
require_once "modeles/Jnct_person_contribution.php";
require_once "modeles/Risk_taken.php";
require_once "modeles/Jnct_person_risk.php";

*/


// monsite.fr/index.php?class=uSer&action=detailsUser2 MODELE DE LA FONCTION RENDERVIEW



if(isset($_GET["class"]) && isset($_GET["action"]))
{
    $class = ucfirst(strtolower($_GET["class"]))."Controller" ;
    $methode = htmlentities($_GET["action"]); 
    


    if(method_exists($class, $methode))  // method_exists() plus rapide que is_callable()
    {
            $controller = new $class();     
            $controller->$methode();
    } else {
        (new DefaultController())->index();
    }




}else
{
    (new DefaultController())->index();

}

