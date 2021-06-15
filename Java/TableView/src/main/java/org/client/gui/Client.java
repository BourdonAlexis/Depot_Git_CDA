package org.client.gui;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.*;
import javafx.scene.control.cell.PropertyValueFactory;


public class Client {
    @FXML
    public TableView<Client> lst_clients;
    @FXML
    public TableColumn<Client, String> col_nom;
    @FXML
    public TableColumn<Client, String> col_prenom;
    @FXML
    public TableColumn<Client, String> col_ville;
    public TextField text_nom;
    public TextField text_prenom;
    public TextField text_ville;
    public Button btn_sauver;
    public Button btn_annuler;
    public Button btn_supprimer;


    private  String nom;
    private  String prenom;
    private  String ville;

    /**
     *Constructeur par défaut
     */
    public Client() {}

    /**
     *
     * @param p : prenom client
     * @param n : nom client
     * @param v : ville client
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

    //Stock la liste de clients
    ObservableList<Client> model = FXCollections.observableArrayList();

    @FXML
    public void initialize() {

        //initialisation du modèle
        model.add(new Client("Josh", "Homme", "Joshua Tree"));
        model.add(new Client("Dave", "Grohl", "Warren"));
        model.add(new Client("Krist", "Novoselic", "Compton"));
        model.add(new Client("Robert", "Trujillo", "Santa Monica"));
        //On rend le tableau non-éditable
        lst_clients.setEditable(false);

        // Jonction du tableau avec les données
        col_prenom.setCellValueFactory(new PropertyValueFactory<Client,String>("prenom"));
        col_nom.setCellValueFactory(new PropertyValueFactory<Client,String>("nom"));
        col_ville.setCellValueFactory(new PropertyValueFactory<Client,String>("ville"));

        // On indique au TableView quelle modèle observer pour trouver les données
        lst_clients.setItems(model);

    }

    public void sauver(ActionEvent actionEvent) {
    }

    public void annuler(ActionEvent actionEvent) {
    }

    public void supprimer(ActionEvent actionEvent) {
    }
}
