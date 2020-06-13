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