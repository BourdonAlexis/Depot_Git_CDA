package org.client.classe;

public class Client {
    private  String nom;
    private  String prenom;
    private  String ville;

    /**
     *Constructeur par défaut
     */
    public Client() {}

    /**
     *
     * @param p : prenom
     * @param n : nom
     * @param v : ville
     */

    public Client(String p, String n, String v) {
        this.prenom = p;
        this.nom = n;
        this.ville = v;
    }
    //Getters and Setters
    public String getNom() {
        return this.nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getPrenom() {
        return this.prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public String getVille() {
        return this.ville;
    }

    public void setVille(String ville) {
        this.ville = ville;
    }
}
