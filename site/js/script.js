'use strict';
//déclaration de variable
let message="Notre site utilise les cookies à fin d'identification. Veuillez les accepter pour continuer. dans le cas contraire, vous serez redirigé vers ";
let refus='https://www.google.fr';           //destination de rediection en cas de refus des cookies
window.onload=cookies(message,refus);     //cookies ne se lance qu'une fois la page chargée

//fonction pour valider l'utilisation des cookies    
function cookies($message,$lienrefus)
{
    if (localStorage.cookieAP==='oui')
    {}
    else 
    {
        $message=$message+$lienrefus;
        let confirmation=window.confirm($message);
        if(confirmation)
        {
            window.alert('merci');
            localStorage.setItem('cookieAP','oui')
        }
         else
        {
            window.alert('Dommage. Vous allez être redirigé vers '+$lienrefus);
            window.location.href=$lienrefus;
        }
    }
}