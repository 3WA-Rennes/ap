<?php

class Person{
    private $id;
    private $name;
    private $firstname;
    private $nickname;
    private $gender;
    private $birth;
    private $profession;
    private $created_at;
    private $votes;
    private $points;
    private $description;
    private $death;
    private $edited_at;
    private $activated; // par défaut false; seuls admin et user spécifique peuvent activer.
    private $forbidden; // indique si une personne est prohibée
    private $claims; // comptabilise le nb de réclamations
    private $link;  
    private $image;
    private $id_temp;
    private $user_id;



   /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
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

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of nickname
     */ 
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set the value of nickname
     *
     * @return  self
     */ 
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }





    /**
     * Get the value of birth
     */ 
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set the value of birth
     *
     * @return  self
     */ 
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }


    /**
     * Get the value of profession
     */ 
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set the value of profession
     *
     * @return  self
     */ 
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }





    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of votes
     */ 
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * Set the value of votes
     *
     * @return  self
     */ 
    public function setVotes($votes)
    {
        $this->votes = $votes;

        return $this;
    }

    /**
     * Get the value of points
     */ 
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set the value of points
     *
     * @return  self
     */ 
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
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

    /**
     * Get the value of death
     */ 
    public function getDeath()
    {
        return $this->death;
    }

    /**
     * Set the value of death
     *
     * @return  self
     */ 
    public function setDeath($death)
    {
        $this->death = $death;

        return $this;
    }

    /**
     * Get the value of edited_at
     */ 
    public function getEdited_at()
    {
        return $this->edited_at;
    }

    /**
     * Set the value of edited_at
     *
     * @return  self
     */ 
    public function setEdited_at($edited_at)
    {
        $this->edited_at = $edited_at;

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
     * Get the value of forbidden
     */ 
    public function getForbidden()
    {
        return $this->forbidden;
    }

    /**
     * Set the value of forbidden
     *
     * @return  self
     */ 
    public function setForbidden($forbidden)
    {
        $this->forbidden = $forbidden;

        return $this;
    }

    /**
     * Get the value of claims
     */ 
    public function getClaims()
    {
        return $this->claims;
    }

    /**
     * Set the value of claims
     *
     * @return  self
     */ 
    public function setClaims($claims)
    {
        $this->claims = $claims;

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
    }

    /**
     * Get the value of id_temp
     */ 
    public function getId_temp()
    {
        return $this->id_temp;
    }

    /**
     * Set the value of id_temp
     *
     * @return  self
     */ 
    public function setId_temp($id_temp)
    {
        $this->id_temp = $id_temp;        
    }





    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }



     /**
     * Set the value of image
     *
     * @return  string
     */ 
    public static function putImage() :?string
    {
            if($_FILES['image']['size'] <= 10000000)
            {                
                echo "ok l image est plus que petite que 1 000 000";
                $infos_file = pathinfo($_FILES['image']['name']);
                $name = $_FILES['image']['name'];

                var_dump($infos_file);
                $extension_upload = $infos_file['extension'];

                $extensions_allowed = array('jpg', 'jpeg', 'jtif', 'tiff', 'gif', 'png', 'webm');
            
                if(in_array($extension_upload, $extensions_allowed))
                {
                    echo 'ok l\'image est au bon format';
                    //On peut valider le fichier et le stocker définitivement
                    move_uploaded_file($_FILES['image']['tmp_name'], 'assets/img/persons/'.basename($_FILES['image']['name']));
                    //if(move_uploaded_file($_FILES['image']['tmp_name'], '../img/upload/'.basename($_FILES['image']['name'])))
                    if(move_uploaded_file($_FILES['image']['tmp_name'], 'assets/img/persons/'.basename($_FILES['image']['name'])));
                    { 
                        $path = 'assets/img/persons/'.basename($_FILES['image']['name']);
                        echo '<br><h1><strong>IMAGE  : '.$path.'<br>';
                        echo '</strong></h1>';
                        return $path;
                    }
                }
            }
    }// putImage()



    /**
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Select a number of persons
     * @return array
     */
    public static function list($nb) : array
    {
        if(!isset($nb) || !is_int($nb))
        $nb = 1000;
        $db= new Database();
        $result = $db->selectMany("Person", "SELECT * FROM person ORDER BY `points` DESC, `birth` ASC LIMIT $nb ");
        return $result;
    }

    /**
     * Select a number of persons with basic info
     * @return array
     */
    public static function listBasic($nb) : array
    {
        if(!isset($nb) || !is_int($nb))
        $nb = 1000;
        $db= new Database();
        $result = $db->selectMany("Person", "SELECT `id`, `name`, `firstname`, `nickname`, `gender`, `birth`, `profession`, `points`, `description`,`image` FROM person ORDER BY `points` DESC, `birth` ASC LIMIT $nb ");
        return $result;
    }


    /**
     * add a person in the db
     * @return bool
     */
    public function add() : bool
    {
        $db = new Database();
        $result = $db->insert(
            "INSERT INTO person (`name`, `firstname`, `nickname`, `gender`, `birth`, `profession`, `votes`, `points`, `description`, `death`, `activated`, `forbidden`, `claims`, `link`, `id_temp`, `image`, `user_id`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
            [$this->name, $this->firstname, $this->nickname, $this->gender, $this->birth, $this->profession, $this->votes, $this->points, $this->description, $this->death, $this->activated, $this->forbidden, $this->claims, $this->link, $this->id_temp, $this->image, $this->user_id]
        );

        return $result;
    }

public function createContrib()
{
    if(isset($_POST['new_contrib']))
    {/*
        $db = new Database();
            foreach($_POST['contribution'] as $values)
            {
                $result = $db->insert(
                    "INSERT INTO jnct_person_risk_2 (`person_id`, `risk_id`) VALUES (?,?)",
                    [$id_person, $values]
                );
            }
        return $result;*/
    }
}



/**
* Récupération d'une personne par l id (juste après l'insertion dans la base)
* @param int $id_person
* @return ?Person
*/
public static function getById($id_person): ?Person
{
        $db= new Database();
        $result = $db->selectOne("Person", "SELECT * FROM person WHERE id=?", [$id_person]);
 
        if ($result == false)
        return null;
    return $result;
}


/**
 * renvoie lui ou elle en fonction du sexe
 * @param string $gender
 * @return string
 */
public static function showPronoun($gender)
{
    if(isset($gender) && is_string($gender))
    {
        if($gender == "f" || $gender == "F")
        {
            $gender = "elle"; 
            return $gender;           
        }
        else if($gender == "h" || $gender == "H")
        {
            $gender = "lui"; 
            return $gender;
        }
    }
}


/**
* Récupération d'une personne par l id_temp (juste après l'insertion dans la base)
* @param int $id_temp
* @return int
*/
public static function getByIdtemp($id_temp): ?int
{
        $db= new Database();
        $result = $db->selectOne("Person", "SELECT id FROM person WHERE id_temp=?", [$id_temp]);
        
        if($result == true)
        {
            $result = $result->getId();
        }
        if ($result == false)
        return null;
    return $result;
}

/* banned

 public function setBan($b)
 {
            $this->ban[] .= $b;
 }

*/

public function getContribution(){
    echo 'Utilisateurs bannis par '.$this->user_name. ' : ';
    foreach($this->contribution as $value){
        echo $value .', ';
    }
}





/**
 * Insère pour une personnalité les contributions (envoyées par POST)
 * 
 * @param int $id_temp
 * @return bool
 */
public static function putContrib($id_person) : bool
{
    if(isset($_POST['contribution']))
    {
        $db = new Database();
            foreach($_POST['contribution'] as $values)
            {
                $values = htmlentities($values);
                $result = $db->insert(
                    "INSERT INTO jnct_person_contribution_2 (`person_id`, `contribution_id`) VALUES (?,?)",
                    [$id_person, $values]
                );
            }
        return $result;
    }
}


/**
 * Insère pour une personnalité les risques qu'elle a encouru (envoyées par POST)
 * 
 * @param int $id_person
 * @return bool
 */
public static function putRisk($id_person) : bool
{
    if(isset($_POST['risk_taken']))
    {
        $db = new Database();
            foreach($_POST['risk_taken'] as $values)
            {
                $values = htmlentities($values);
                $result = $db->insert(
                    "INSERT INTO jnct_person_risk_2 (`person_id`, `risk_id`) VALUES (?,?)",
                    [$id_person, $values]
                );
            }
        return $result;
    }
}


public function addContribAndRisk($id_temp) : bool
{
        Person::addContrib($id_temp);
        Person::addRisk($id_temp);
}

/**
 * Ajoute personnalité ds BDD d'un formulaire, renvoie un id_temp pour identifier la dernière insertion (plus fiable que SELECT LAST_INSERT_ID() FROM table)
 * 
 * @return int
 */
public function addFromForm() : int
{
    $message = null;
    if(isset($_POST["name"])
        && isset($_POST["firstname"])
       // && isset($_POST["birth"])
    )            
    {
        if($_POST['name'] != "" && $_POST['firstname'] != "")
        {
            $id_temp = Person::randomizeId();
            $path = Person::putImage();
            $message = "Personne ajouté à la liste des propositions";
            $person = new Person();
            $person->setName(trim(htmlentities($_POST["name"])));
            $person->setFirstname(htmlentities($_POST["firstname"]));
            $person->setNickname(htmlentities($_POST["nickname"]));
            $person->setGender(htmlentities($_POST["gender"]));
            $person->setBirth(htmlentities($_POST["birth"]));
            $person->setProfession(htmlentities($_POST["profession"]));
            $person->setVotes(1);
            $person->setPoints(100);
            $person->setDescription(trim(htmlentities($_POST["description"])));
            $person->setDeath(htmlentities($_POST["death"]));
            $person->setActivated(1);
            $person->setForbidden(0);
            $person->setClaims(0);
            $person->setLink(htmlentities($_POST["link"]));
            $person->setId_temp($id_temp);
            $person->setImage($path);
            $person->setUser_id(1);

            $person->add(); // ajoute une personne mais sans les contributions et les risques
            var_dump($id_temp);
            return $id_temp;

        }

    }// addfromForm





   // $this->renderView("person/register");


} // addFromForm(){


  /************************************************************************** */  
    public static function searchPersons()
    {
        if(isset($_POST['name']) || isset($_POST['firstname']) || isset($_POST['nickname']))
        {                      
           $person_seeked = 'SELECT * FROM `person` WHERE ';
             
            //"SELECT * FROM `person` WHERE `name` LIKE `$name%` AND `firstname` LIKE `$firstname%` AND `nickname` LIKE `$nickname%` LIMIT 20"
            if($_POST['name'] != "" || $_POST['firstname'] !="" || $_POST['nickname'] !="")  
            {      
               
                    if(isset($_POST['name']))
                    {
                        $name = htmlspecialchars($_POST['name']);
                    }
                    else {$name = "";}

                    if(isset($_POST['firstname']))
                    {
                        $firstname = htmlspecialchars($_POST['firstname']);
                    }
                    else {$firstname = "";}

                    if(isset($_POST['nickname']))
                    {
                        $nickname = htmlspecialchars($_POST['nickname']);
                    }
                    else {$nickname = "";}
                    

                      $search = array(
                        'name' => $name,
                        'firstname' => $firstname,
                        'nickname' => $nickname
                    );

                   
                    $cumul = "";
                        /******************* Exemple de MDN
                            $data['one'] = 1;
                            $data += [ "two" => 2 ];
                            $data += [ "three" => 3 ];
                            $data += [ "four" => 4 ];
                        ****************************/

                        foreach($search as $key => $value)
                        {
                            $person_seeked .=$cumul.' `'.$key.'` LIKE \'%'.$value.'%\' '; 
                            $cumul = ' AND ';
                            //$person_seeked .= $seek_name;                           
                        } 

                        /*


                        if(isset($_POST['name']) && $_POST['name'] != "")
                        {
                            $name = htmlentities($_POST['name']);
                            $key = array_keys($_POST, $name);
                            $key = $key[0];
                            $search += [$key => $name];
                            $person_seeked .=$cumul.' `'.$key.'` LIKE `%'.$name.'%` '; 
                            $cumul = ' AND ';
                            //$person_seeked .= $seek_name;                           
                        }  

                        if(isset($_POST['firstname']) && $_POST['firstname'] != "")
                        {
                            $firstname = htmlentities($_POST['firstname']);
                            $key = array_keys($_POST, $firstname);
                            $key = $key[0];
                            $search += [$key => $firstname]; 
                            $person_seeked .=$cumul.' `'.$key.'` LIKE \'%'.$firstname.'%\' ';  
                            $cumul = ' AND ';                           
                        }

                        if(isset($_POST['nickname']) && $_POST['nickname'] != "")
                        {
                            $nickname = htmlentities($_POST['nickname']);
                            $key = array_keys($_POST, $_POST['nickname']);
                            $key = $key[0];
                            $search += [$key => $nickname]; 
                            $person_seeked .=$cumul.' `'.$key.'` LIKE \'%'.$nickname.'%\' '; 
                            $cumul = ' AND ';
                        }
                    


                   foreach($search as $key => $value)
                   {
                        echo '<div><h2>';
                                echo $key.' => '.$value;
                        echo '</h2></div>';
                   }

                   */

                   
                    $name = $_POST['name'];
                    $firstname = $_POST['firstname'];
                    $nickname = $_POST['nickname'];

                   // "SELECT * FROM `person` WHERE `name` LIKE '$name' AND `firstname` LIKE '$firstname' AND `nickname` LIKE '$nickname' LIMIT 20"

                    $db = new Database();
                    $result = $db->search(
                        "Person",
                        "$person_seeked LIMIT 20"                     
                    );
                    if($result == null)
                    {
                        echo '<strong>Pas de résultat</strong>';
                        return null;                        
                    }
                   else
                    {
                        return $result;
                    } 
                  
            }
        }
    }

/***********************************************************************************/

    /*
    public static function searchPerson() : array
    {
        if(isset($_POST['name']))
            $name = $_POST['name'];
        else
            $name="";

        if(isset($_POST['firstname']))
            $firstname = $_POST['firstname'];
        else
            $firstname="";

        if(isset($_POST['nickname']))
            $nickname = $_POST['nickname'];
        else
            $nickname="";

        if($name !="" || $nickname !="")
        {
            if($name !="")
            { 
                $db = new Database();
                $result = $db->selectMany(
                    "Person",
                    "SELECT * FROM `person` WHERE `name` LIKE "
                );
            }
        }
        return $result;
    }*/


    public function getVotesById($id_person) 
    {
        $db= new Database();
        $result = $db->selectOne("Person", "SELECT votes FROM person WHERE id=?", [$id_person]);
        return $result;
    }




    public static function randomizeId()
    {
        $id_temp = new Datetime();
        $id_temp = $id_temp->getTimestamp();
        $id_temp = substr($id_temp, 5);
        $id_temp = $id_temp.(rand(1,10000)); // génération d un id temporaire plus fiable que lastInsertId()
        return $id_temp;
    }


    /**
 * Auto-generated Migration: Please modify to your needs!
 */
/*
final class Version20200325093304 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE post_category (post_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_B9A190604B89032C (post_id), INDEX IDX_B9A1906012469DE2 (category_id), PRIMARY KEY(post_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE post_category ADD CONSTRAINT FK_B9A190604B89032C FOREIGN KEY (post_id) REFERENCES post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post_category ADD CONSTRAINT FK_B9A1906012469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment CHANGE username username VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE contact CHANGE subject subject VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE post CHANGE edited_at edited_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE post_category');
        $this->addSql('ALTER TABLE comment CHANGE username username VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE contact CHANGE subject subject VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE post CHANGE edited_at edited_at DATETIME DEFAULT \'NULL\' COMMENT \'(DC2Type:datetime_immutable)\'');
    }
}
*/




   
} // END CLASS PERSON








