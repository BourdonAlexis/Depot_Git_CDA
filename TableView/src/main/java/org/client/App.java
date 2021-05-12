package org.client;

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

        //direction de la route vers fichier fxml
        Parent root = FXMLLoader.load(getClass().getResource("/org/client/gui/Client.fxml"));
        //scene est égal à la route
        Scene scene = new Scene(root);
        //initialise la scene
        primaryStage.setScene(scene);
        //montre la scene
        primaryStage.show();
    }
}