package org.client.gui;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import org.client.classe.Client;

import java.util.Scanner;

public class Table {
    public TextField text_nom;
    public TextField text_prenom;
    public TextField text_ville;
    public TableView<Client> lst_clients;
    public TableColumn<Client, String> col_prenom;
    public TableColumn<Client, String> col_nom;
    public TableColumn<Client, String> col_ville;
    public Button btn_sauver;
    public Button btn_annuler;
    public Button btn_supprimer;

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
        col_prenom.setCellValueFactory(new PropertyValueFactory<>("prenom"));
        col_nom.setCellValueFactory(new PropertyValueFactory<>("nom"));
        col_ville.setCellValueFactory(new PropertyValueFactory<>("ville"));

        // On indique au TableView quelle modèle observer pour trouver les données
        lst_clients.setItems(model);

    }

    public void sauver(ActionEvent actionEvent) {
        //Récupère l'info des textfield et l'ajoute à la liste
        model.add(new Client(text_prenom.getText(), text_nom.getText(), text_ville.getText()));
    }

    public void annuler(ActionEvent actionEvent) {
        //Clear les textfield
        text_nom.clear();
        text_prenom.clear();
        text_ville.clear();
    }

    public void supprimer(ActionEvent actionEvent) {

        //Model supprime  la valeur de la liste model par rapport à la taille complete de la liste model -1
        model.remove(model.get(model.size()-1));
    }
}
