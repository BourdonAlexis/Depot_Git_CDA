var app = new Vue({
    el: '#app',
    data: {
        //initialisation du résultat
        resultat: 0
    },
    methods: {
        //calcule les valeurs renvoyé dans la barre
        touche: function(num) {
            return this.resultat += num;
        },
        //reset de l'affichage à zero
        reset: function() {
            return this.resultat = 0;
        },
        //multiplication
        multiplication: function() {
            let multiplication = this.resultat;
            return this.resultat = eval(multiplication);
        }
    }
});