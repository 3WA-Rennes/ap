'use strict';
//déclaration de variable
let $message="Notre site utilise les cookies à fin d'identification. Veuillez les accepter pour continuer. dans le cas contraire, vous serez redirigé vers le site de Google";

window.onload=cookies(message);     //cookies ne se lance qu'une fois la page chargée

//fonction pour valider l'utilisation des cookies    
function cookies($message)
{
    if (localStorage.cookie==='oui')
    {}
    else 
    {
        let confirmation=window.confirm($message);
        if(confirmation)
        {
            window.alert('merci');
            localStorage.setItem('cookie','oui')
        }
         else
        {
            window.alert('Dommage. Vous allez être redirigé vers la page d accueil de Google');
            window.location.href='https://www.google.fr';
        }
    }
}