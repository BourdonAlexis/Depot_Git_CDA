package org.alex;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;

import javafx.stage.Stage;


import java.io.IOException;

public class App extends Application {

    public static void main(String[] args) {
        launch(args);
    }

    @Override
    public void start(Stage primaryStage) throws IOException {
        //Donne le chemin vers la route (fichier fxml)
        Parent root = FXMLLoader.load(getClass().getResource("/org/alex/gui/form1.fxml"));
        // initialise une scene comme étant une nouvelle scene vers root
        Scene scene = new Scene(root);
        //Set la scene
        primaryStage.setScene(scene);
        //Montre la scene via le show
        primaryStage.show();
    }
}
