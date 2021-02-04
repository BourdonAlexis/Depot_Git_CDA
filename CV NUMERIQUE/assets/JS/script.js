function checkForm(f) 
{
    formulaire=true;

    //nom 
    if (form1.nom.value=="")
    {
        nom.setCustomValidity("Veuillez saisir votre nom !");
        return false;

    }


    //prénom
    if (form1.prénom.value=="")
    {
        prénom.setCustomValidity("Veuillez saisir votre prénom !");   
        return false;
    }

    //selection du sexe
    if (form1.selectionsexe.value==false)
    {
        neutre.setCustomValidity("Veuillez saisir votre sexe !");
        return false;
    }
    //date naissance
    if (form1.date.value.charAt(7)=="")
    {
        date.setCustomValidity("Veuillez saisir une date de naissance valide !");
        return false;
    }
    //code postal 
    if (form1.codepostal.value.charAt(4)=="")
    {
        codepostal.setCustomValidity("Veuillez saisir votre code postal !");
        return false;
    }


    //email
    var email2 = document.getElementById('email').value;
    var H = "@";
    var cherche = email2.indexOf(H);
    if(cherche==-1)
    {
        email.setCustomValidity("Veuillez saisir un email valide !");
        return false;  
    }
    
    //sujet
   
    if (sujet.value == "Choisir un sujet") {
        sujet.setCustomValidity("Veuillez selectionner un sujet !");
        return false;
        }
        
    
    //question
    var question2 = document.getElementById('question').value;
    if(question2=="")
    {
        question.setCustomValidity("Veuillez saisir votre question !");
        return false;    
    }

    //accepte formulaire
    var validation = document.getElementById('traitementinformatique').checked;
    if(validation==false)
    {
        traitementinformatique.setCustomValidity("Veuillez valider le traitement informatique !");
        return false;        
    }
    

    //fin de check
    if (formulaire==true)
    {
        return true;
    }
    else 
    {
        alert("Le formulaire ne c'est pas envoyé correctement");
        return false;
    }
}
// Affiche selection sujet en dehors du checkform
sujet.addEventListener("change",function()
{
    if (sujet.value != "Choisir un sujet") 
    {
    question.value = sujet.value;
    }
});    