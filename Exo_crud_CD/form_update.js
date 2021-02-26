document.getElementById("update").addEventListener("submit", function(e) {
    let erreur;
    const title = document.getElementById("title");
    const artist = document.getElementById("artist");
    const year = document.getElementById("year");
    const genre = document.getElementById("genre");
    const label = document.getElementById("label");
    const price = document.getElementById("price");

    //*******************  titre  *****************************
    const error_title = document.getElementById("error_title");
    const filtre_title = new RegExp("^[a-zA-Z]+$");

    console.log("title :" + title.value);
    var resultat = filtre_title.test(title.value);
    console.log(resultat);

    if (title.value===""){

        error_title.innerHTML="Veuillez renseigner le prix !!!!" .fontcolor("red");
        e.preventDefault();
    }
    else{
        if (resultat ===false) {
            error_title.innerHTML="format incorrect" .fontcolor("red");
            e.preventDefault();
        }
        else{

            error_title.innerHTML="";
        }
    }


    //*******************  ARTISTE *****************************
    const error_artist = document.getElementById("error_artist");
    const filtre_artist = new RegExp("^[a-zA-Z]+$");

    console.log("artist :" + artist.value);
    var resultat = filtre_artist.test(artist.value);
    console.log(resultat);

    if (artist.value===""){

        error_artist.innerHTML="Veuillez renseigner le nom d'artiste !!!!" .fontcolor("red");
        e.preventDefault();
    }
    else{
        if (resultat ===false) {
            error_artist.innerHTML="format incorrect" .fontcolor("red");
            e.preventDefault();
        }
        else{

            error_artist.innerHTML="";
        }
    }

    //*******************  Year *****************************
    const error_year = document.getElementById("error_year");
    const filtre_year = new RegExp("^([0-9][0-9][0-9][0-9])$");

    console.log("year :" + year.value);
    var resultat = filtre_year.test(year.value);
    console.log(resultat);

    if (year.value===""){

        error_year.innerHTML="Veuillez renseigner l'année !!!!" .fontcolor("red");
        e.preventDefault();
    }
    else{
        if (resultat === false) {
            error_year.innerHTML="format incorrect" .fontcolor("red");
            e.preventDefault();
        }
        else{

            error_year.innerHTML="";
        }
    }

    //*******************  GENRE *****************************
    const error_genre = document.getElementById("error_genre");
    const filtre_genre = new RegExp("^[a-zA-Z]+$");

    console.log("genre :" + genre.value);
    var resultat = filtre_genre.test(genre.value);
    console.log(resultat);

    if (genre.value===""){

        error_genre.innerHTML="Veuillez renseigner le genre !!!!" .fontcolor("red");
        e.preventDefault();
    }
    else{
        if (resultat ===false) {
            error_genre.innerHTML="format incorrect" .fontcolor("red");
            e.preventDefault();
        }
        else{

            error_genre.innerHTML="";
        }
    }

    //*******************  LABEL *****************************
    const error_label = document.getElementById("error_label");
    const filtre_label = new RegExp("^[a-zA-Z]+$");

    console.log("label :" + label.value);
    var resultat = filtre_label.test(label.value);
    console.log(resultat);

    if (label.value===""){

        error_label.innerHTML="Veuillez renseigner le nom du label !!!!" .fontcolor("red");
        e.preventDefault();
    }
    else{
        if (resultat ===false) {
            error_label.innerHTML="format incorrect" .fontcolor("red");
            e.preventDefault();
        }
        else{

            error_label.innerHTML="";
        }
    }
    //*******************  PRICE *****************************
    const error_price = document.getElementById("error_price");
    const filtre_price = new RegExp("^[0-9]{0,9}.[0-9]{2}$");

    console.log("label :" + price.value);
    var resultat = filtre_price.test(price.value);
    console.log(resultat);

    if (price.value===""){

        error_price.innerHTML="Veuillez renseigner le prix !!!!" .fontcolor("red");
        e.preventDefault();
    }
    else{
        if (resultat ===false) {
            error_price.innerHTML="format incorrect" .fontcolor("red");
            e.preventDefault();
        }
        else{

            error_price.innerHTML="";
        }
    }
});

