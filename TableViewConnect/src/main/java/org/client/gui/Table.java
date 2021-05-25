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
import org.client.classe.ClientDAO;


import java.util.Scanner;

public class Table {
    public TextField text_nom;
    public TextField text_prenom;
    public TextField text_ville;
    public TableView<Client> lst_clients;
    public TableColumn<Client, String> col_prenom;
    public TableColumn<Client, String> col_nom;
    public TableColumn<Client, String> col_ville;
    public Button btn_supprimer;
    public Button btn_modifier;
    public Button btn_ajouter;

    ObservableList<Client> model = FXCollections.observableArrayList();

    @FXML
    public void initialize() {
        //initialisation du modèle
        ClientDAO repo = new ClientDAO();
        model.addAll(repo.liste());
        //tableau non editable
        lst_clients.setEditable(false);

        // Jonction du tableau avec les données
        col_prenom.setCellValueFactory(new PropertyValueFactory<>("prenom"));
        col_nom.setCellValueFactory(new PropertyValueFactory<>("nom"));
        col_ville.setCellValueFactory(new PropertyValueFactory<>("ville"));

        // Model à observer pour récup les donner
        lst_clients.setItems(model);

    }

//    public void sauver(ActionEvent actionEvent) {
//        //Récupère l'info des textfield et l'ajoute à la liste
//        model.add(new Client(text_prenom.getText(), text_nom.getText(), text_ville.getText()));
//    }
//
//    public void annuler(ActionEvent actionEvent) {
//        //Clear les textfield
//        text_nom.clear();
//        text_prenom.clear();
//        text_ville.clear();
//    }

    public void supprimer(ActionEvent actionEvent) {

        //Model supprime  la valeur de la liste model par rapport à la taille complete de la liste model -1
//        model.remove(model.get(model.size()-1));
        ClientDAO repo = new ClientDAO();
        Client c = lst_clients.getSelectionModel().getSelectedItem();
        //supprime
        repo.delete(c);
        //Maj tableau
        model.remove(c);
        lst_clients.setItems(model);

    }

    public void Ajouter(ActionEvent actionEvent) {

        ClientDAO repo = new ClientDAO();
        Client c = new Client();
        //Set les infos dans chaque column du tableau
        c.setNom(text_nom.getText());
        c.setPrenom(text_prenom.getText());
        c.setVille(text_ville.getText());
        repo.insert(c);
        //maj tableau (refresh)
        model.add(c);
        lst_clients.setItems(model);
    }

    public void modifier(ActionEvent actionEvent) {
        ClientDAO repo = new ClientDAO();
        Client c = lst_clients.getSelectionModel().getSelectedItem();
        //ecrase l'ancien nom par le nouveau
        c.setNom(text_nom.getText());
        c.setPrenom(text_prenom.getText());
        c.setVille(text_ville.getText());
        repo.update(c);

        //maj tableau (refresh)
        int selectedIndex = lst_clients.getSelectionModel().getSelectedIndex();
        lst_clients.getItems().set(selectedIndex, c);

    }
}
