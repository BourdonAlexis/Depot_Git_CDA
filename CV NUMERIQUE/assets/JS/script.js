document.getElementById("Inscription").addEventListener("submit", function(e) {

    var erreur;
     var sujet = document.getElementById("sujet");
    var email = document.getElementById("email");
    var question = document.getElementById("question");
    
    
    
                          //*******************  sujet  *****************************
    var error_sujet = document.getElementById("error_sujet");
    var filtre_sujet = new RegExp("^[a-zA-Z]+$");
    
    console.log("sujet :" + sujet.value);
    var resultat = filtre_sujet.test( sujet.value);
    console.log(resultat);
    
    if (sujet.value==""){
    
        error_sujet.innerHTML="Veuillez renseigner votre sujet !!!!" .fontcolor("red"); 
        e.preventDefault();
    }
    else{
        if (resultat ==false) {
            error_sujet.innerHTML="format incorrect" .fontcolor("red"); 
            e.preventDefault();
        }
        else{
    
        error_sujet.innerHTML="";
        }
    }
    
    


    
    
                        //********************* email ********************************
    
    var error_email = document.getElementById("error_email");
    var filtre_email = new RegExp("^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,4}$");
    
    console.log("email :" + email.value);
    var resultat = filtre_email.test(email.value);
    console.log(resultat);
    
    
    if (email.value==""){
    
        error_email.innerHTML="Veuillez renseigner votre email !!!!" .fontcolor("red"); 
        e.preventDefault();
    }
    else{
        if (resultat ==false) {
            error_email.innerHTML="Email incorrect" .fontcolor("red"); 
            e.preventDefault();
        }
        else{
    
        error_email.innerHTML="";
        }
    }
    
      //************************* votre question ******************************

var error_question = document.getElementById("error_question");
var filtre_question = new RegExp("^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$");

console.log("question :" + question.value);
var resultat = filtre_question.test(question.value);
console.log(resultat);

if (question.value==""){

    error_question.innerHTML="Veuillez poser votre question !!!!" .fontcolor("red"); 
    e.preventDefault();
    
}


    
    //*******************************confirmation d'envoie*******************
    
    var error_formulaire = document.getElementById("error_formulaire");
    console.log("formulaire :" + formulaire.checked);
    console.log(resultat);
    
    if (formulaire.checked==""){
    
        error_formulaire.innerHTML="Veuillez poser votre question svp !!!!" .fontcolor("red"); 
        e.preventDefault();
        
    }
    
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    