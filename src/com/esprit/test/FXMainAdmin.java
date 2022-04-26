
package com.esprit.test;

import java.io.IOException;
import javafx.application.Application;
import static javafx.application.Application.launch;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

public class FXMainAdmin extends Application {

    public static Stage primaryStage;

    @Override
    public void start(Stage primaryStage) {
        FXMainAdmin.primaryStage = primaryStage;
        Parent root = null;
        try {
            root = FXMLLoader.load(getClass().getResource("../views/SignInAdmin.fxml"));
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
        }

        Scene scene = new Scene(root);
        primaryStage.setTitle("JawekSport");
        primaryStage.setScene(scene);
        primaryStage.show();
    }

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        launch(args);
    }

}