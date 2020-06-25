<?php 
//déclaration de variables
    //liens vers les pages
        $form='site/form/'; //formulaires
        $sql='site/php/sql/'; //requetes
    //extension de fichiers
        $phtml='.form.php'; //formulaires
        $xsql='.sql.php';   //requetes

/* neutralisé en attendant la création de la db
// connexion à la db
$db;

//récupération des article
require('./site/php/class/article.class.php');
$article=new Article();
$article->getArticle($db);

*/
session_start();
require('index.phtml');


// pour les tests
$_SESSION['article']=
                        [
                            [
                                'titre'=>'blabla1',
                                'date'=>'01/01/2012',
                                'auteur'=>'auteur 1',
                                'texte'=>'lorem'
                            ],
                            [
                                'titre'=>'blabla2',
                                'date'=>'01/01/2012',
                                'auteur'=>'auteur 1',
                                'texte'=>'lorem '
                            ],
                            [
                                'titre'=>'blabla3',
                                'date'=>'01/01/2012',
                                'auteur'=>'auteur 1',
                                'texte'=>'lorem'
                            ],
                            [
                                'titre'=>'blabla4',
                                'date'=>'01/01/2012',
                                'auteur'=>'auteur 1',
                                'texte'=>'lorem '
                            ],
                            [
                                'titre'=>'blabla5',
                                'date'=>'01/01/2012',
                                'auteur'=>'auteur 1',
                                'texte'=>'lorem'
                            ],
                            [
                                'titre'=>'blabla6',
                                'date'=>'01/01/2012',
                                'auteur'=>'auteur 1',
                                'texte'=>'lorem '
                            ],
                            [
                                'titre'=>'blabla7',
                                'date'=>'01/01/2012',
                                'auteur'=>'auteur 1',
                                'texte'=>'lorem'
                            ],
                            [
                                'titre'=>'blabla8',
                                'date'=>'01/01/2012',
                                'auteur'=>'auteur 1',
                                'texte'=>'lorem '
                            ],
                            [
                                'titre'=>'blabla9',
                                'date'=>'01/01/2012',
                                'auteur'=>'auteur 1',
                                'texte'=>'lorem'
                            ],
                            [
                                'titre'=>'blabla10',
                                'date'=>'01/01/2012',
                                'auteur'=>'auteur 1',
                                'texte'=>'lorem '
                            ],
                            [
                                'titre'=>'blabla11',
                                'date'=>'01/01/2012',
                                'auteur'=>'auteur 1',
                                'texte'=>'lorem'
                            ],
                            [
                                'titre'=>'blabla12',
                                'date'=>'01/01/2012',
                                'auteur'=>'auteur 1',
                                'texte'=>'lorem '
                            ],
                            [
                                'titre'=>'blabla13',
                                'date'=>'01/01/2012',
                                'auteur'=>'auteur 1',
                                'texte'=>'lorem'
                            ],
                            [
                                'titre'=>'blabla14',
                                'date'=>'01/01/2012',
                                'auteur'=>'auteur 1',
                                'texte'=>'lorem '
                            ],
                            [
                                'titre'=>'blabla15',
                                'date'=>'01/01/2012',
                                'auteur'=>'auteur 1',
                                'texte'=>'lorem'
                            ],
                            [
                                'titre'=>'blabla16',
                                'date'=>'01/01/2012',
                                'auteur'=>'auteur 1',
                                'texte'=>'lorem '
                            ]
                        ];
$_SESSION['ID']=42;
$_SESSION['statut']='admin';   //statut possible : null (à valider), user (basique), admin(administrateur), reject (rejeté)
$_SESSION['user']=
                        ['ID'=>42,
                         'statut'=>'admin',
                         'refcode'=>'314159',
                         'mail'=>'douglas.adams@h2g2.uni',
                         'name'=>'adams',
                         'firstname'=>'douglas',
                         'street'=>'le dernier restaurant',
                         'zipcode'=>'00000',
                         'city'=>'end of the universe',
                         'phone'=>'0607080910'
                        ];
$_SESSION['unchecked']=[
                            [   'ID'=>43,
                                'statut'=>'null',
                                'refcode'=>'314160',
                                'mail'=>'zaphod.biblebox@h2g2.uni',
                                'name'=>'null',
                                'firstname'=>'null',
                                'street'=>'null',
                                'zipcode'=>'null',
                                'city'=>'null',
                                'phone'=>'null'
                            ],
                            [   'ID'=>44,
                                'statut'=>'null',
                                'refcode'=>'314160',
                                'mail'=>'ford.perfect@h2g2.uni',
                                'name'=>'null',
                                'firstname'=>'null',
                                'street'=>'null',
                                'zipcode'=>'null',
                                'city'=>'null',
                                'phone'=>'null'
                            ]
                        ];