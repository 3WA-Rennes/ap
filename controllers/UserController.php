<?php

class UserController extends AbstractController{
    /*
    public function index()
    {
        $this->renderView("user/dashboard");
    }
    */

    public function index()
    {
        $this->renderView("user/dashboard");
    }

    public function goConnexion()
    {
        $this->renderView("connexion");
    }

    public function logout()
    {
        $session = new Session();
        $session->logout();

        $this->redirectTo("index.php");
    }

    public function showList()
    {
        $this->renderView("list_persons_view", [
            "persons" => Person::listBasic(300)
        ]);
    }


    public function showPerson()
    {
        $this->renderView("person_view", [
            "person" => Person::getById($_GET["person"])
        ]);
    }


    public function showAddView()
    {
        $this->renderView("add_person_view");
    }



/************************************* */
    public function addPersonAndJunction()
    {
        if(isset($_POST["name"]))
        {
            var_dump($_POST);
            echo "<br>";
            var_dump($_FILES);
        $person = new Person();
        

            foreach($_POST['contribution'] as $values)
            {
                echo 'Contributions => '.$values.'<br>';
            }

            foreach($_POST['risk_taken'] as $values)
            {
                echo 'Risques pris => '.$values.'<br>';
            }

            $id_temp = $person->addFromForm(); // la fonction addFromForm() retourne un id_temp

            echo '<h1>MON  ID TEMP'.$id_temp.' SUCCESS</h1>';

            echo '<h1>ID dernière personne ajoutée :<br>';
                    $id_person_added = Person::getByIdTemp($id_temp);
                    echo $id_person_added;
            
            echo '</h1>';

            Person::putContrib($id_person_added);
            Person::putRisk($id_person_added);


            //renderView("add_person_view");
            $this->renderView("add_person_view", [
                "person" => Person::getById($id_person_added)
            ]);
            

        } // $_POST

        $this->renderView("add_person_view");

    }








 /******************************************* */   
    public function register()
    {

        $message = null;
        if(isset($_POST['email'])
            && isset($_POST["password"])
            && isset($_POST["firstName"])
            && isset($_POST["lastName"])
            && isset($_POST["address"]))
        {
            if(User::getByEmail($_POST['email']) instanceof User)
            {
                $message = " tu as déjà un compte";
            }else{
                $user = new User();
                $user->setPassword(htmlentities($_POST["password"]));
                $user->setAddress(htmlentities($_POST["address"]));
                $user->setFirstName(htmlentities($_POST["firstName"]));
                $user->setLastName(htmlentities($_POST["lastName"]));
                $user->setEmail(htmlentities($_POST["email"]));

                $id_user = $user->add();

                if($id_user !=0 )
                {
                    // Create the Transport
                    $transport = (new Swift_SmtpTransport('buzzyouf.com', 465))
                        ->setUsername('no_reply@buzzyouf.com')
                        ->setPassword('Forticas_18')
                    ;

                    // Create the Mailer using your created Transport
                    $mailer = new Swift_Mailer($transport);

                    // Create a message
                    $message = (new Swift_Message('Valider votre compte'))
                        ->setFrom(['admin@nous.com' => 'Admin'])
                        ->setTo([$user->getEmail()])
                        ->setBody(
                            'valide ton compte <a href="https://pa-151.sites.3wa.io/PHP/Boutique/"'.
                            'index.php?class=user&action=validate&id='.$id_user.'&key='.md5($user->getEmail()).'>Click ici </a>'
                        )
                    ;

                    // Send the message
                    $result = $mailer->send($message);
                }
            }



        }

        $this->renderView("user/register");
    } // function register()

















    public function login()
    {
        $message = null;
        if(isset($_POST['email']) && isset($_POST["password"]))
        {
            $u = User::getByEmail(htmlentities($_POST['mail']));
            if ($u instanceof User)
            {
                if(password_verify(htmlentities($_POST['password']), $u->getPassword())){
                    $session = new Session();
                    $session->login($u);

                    $this->redirectTo("index.php?class=user&action=index");
                }else{
                    $message = "Mot de passe incorrect";
                }
            }else{
                $message = "Email inconnu";
            }
        }

        $this->renderView('user/login', [
            "message" => $message
        ]);
    }

  

}





class ProductController extends AbstractController
{

    public function getbycategory()
    {
        $this->renderView('product_by_category_view', [
            "products" => Product::getByCategory($_GET['id'])
        ]);
    }
    public function show()
    {
        $this->renderView('product_view', [
            'product' => Product::getById($_GET['id']),
            'images' => Image::getByProduct($_GET['id'])
        ]);
    }

    public function cart()
    {
        $session = new Session();
        $cart = [];
        foreach ($_SESSION['cart'] as $id_product =>$quantity){
            $cart[]= [Product::getById($id_product), $quantity];
        }

        $this->renderView("cart", ["cart" => $cart]);
    }

    public function addcart()
    {
        //dd($_POST);
        $session = new Session();
        $session->addToCart($_POST['id_product'], $_POST['quantity']);
    }
}