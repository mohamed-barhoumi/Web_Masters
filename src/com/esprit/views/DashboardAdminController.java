/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.layout.AnchorPane;

/**
 * FXML Controller class
 *
 * @author elbarhoumi
 */
public class DashboardAdminController implements Initializable {

    @FXML
    private AnchorPane rootPane;
    @FXML
    private Button logobnt1;
    @FXML
    private Button blogg;
    @FXML
    private Button aviss;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void Utilisateur(ActionEvent event) throws IOException {
       AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/Gestion_user.fxml"));
        rootPane.getChildren().setAll(pane);  
    }

    @FXML
    private void Actionlog(ActionEvent event) throws IOException {
         AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/SignInAdmin.fxml"));
        rootPane.getChildren().setAll(pane);
    }

    @FXML
    private void AddBlog(ActionEvent event) throws IOException {
        
         AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/AjouterAvis.fxml"));
        rootPane.getChildren().setAll(pane);
    }

    @FXML
    private void AddAvis(ActionEvent event) throws IOException {
          AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/InterAvis.fxml"));
        rootPane.getChildren().setAll(pane);
    }

    @FXML
    private void Commandes(ActionEvent event) throws IOException {
          AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/CommandeAdmin.fxml"));
        rootPane.getChildren().setAll(pane);
    }

    @FXML
    private void recl(ActionEvent event) throws IOException  {
         AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/AjouterReclamation.fxml"));
        rootPane.getChildren().setAll(pane);
    }

    @FXML
    private void prod(ActionEvent event) throws IOException  {
         AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/AddProduitFXML.fxml"));
        rootPane.getChildren().setAll(pane);
    }

    @FXML
    private void evt(ActionEvent event) throws IOException  {
         AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/Evenement.fxml"));
        rootPane.getChildren().setAll(pane);
        
        
    }
    
    
}
