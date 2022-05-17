/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.image.ImageView;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;

/**
 * FXML Controller class
 *
 * @author a
 */
public class SideBarController implements Initializable {

    @FXML
    private BorderPane bp;
    @FXML
    private Button voyage;
    @FXML
    private Button sondage_btn4;
    @FXML
    private Button sondage_btn1;
    @FXML
    private Button sondage_btn3;
    @FXML
    private AnchorPane ap;
    @FXML
    private AnchorPane pp;
    @FXML
    private ImageView user_image;
    @FXML
    private Button profile_btn;
    @FXML
    private Button mdp_btn;
    @FXML
    private Button logout;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void appel(ActionEvent event) {
         LoadPage("AfficherEvenement");
    }

    @FXML
    private void sondage(ActionEvent event) {
    }

    @FXML
    private void GererProfile(ActionEvent event) {
    }

    @FXML
    private void mdp(ActionEvent event) {
    }

    @FXML
    private void logout(ActionEvent event) {
    }
      private void LoadPage(String page) {
        
        try {
            
            AnchorPane pane=FXMLLoader.load(getClass().getResource(page + ".fxml"));
            pp.getChildren().setAll(pane);
            
            
        } catch (IOException ex) {
            System.out.println("Error de transition " + ex);
        }
       
    }
}
