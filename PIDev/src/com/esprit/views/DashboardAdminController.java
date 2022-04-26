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
import javafx.scene.layout.AnchorPane;

/**
 * FXML Controller class
 *
 * @author ACER
 */
public class DashboardAdminController implements Initializable {

    @FXML
    private AnchorPane rootPane;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void AddProduit(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/AddProduitFXML.fxml"));
        rootPane.getChildren().setAll(pane);
    }

    @FXML
    private void AddCategorie(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/AddCategorie.fxml"));
        rootPane.getChildren().setAll(pane);  
    }

    @FXML
    private void GererCammande(ActionEvent event) throws IOException {
         AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/CommandeAdmin.fxml"));
        rootPane.getChildren().setAll(pane); 
    }

    @FXML
    private void GererJoueur(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/AjouterJoueur.fxml"));
        rootPane.getChildren().setAll(pane); 
    }

    @FXML
    private void GererEquipe(ActionEvent event) throws IOException {
         AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/AjouterEquipe.fxml"));
        rootPane.getChildren().setAll(pane);
    }

    @FXML
    private void GererMatch(ActionEvent event) throws IOException {
         AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/ajouter_match1.fxml"));
        rootPane.getChildren().setAll(pane);
    }

    @FXML
    private void GererTournois(ActionEvent event) throws IOException {
         AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/ajouter_tournois.fxml"));
        rootPane.getChildren().setAll(pane);
    }

    @FXML
    private void Reclamation(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/reclamationAdmin.fxml"));
        rootPane.getChildren().setAll(pane);
    }

    @FXML
    private void Avis(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/afficherRating.fxml"));
        rootPane.getChildren().setAll(pane); 
    }

    @FXML
    private void Utilisateur(ActionEvent event) throws IOException {
       AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/Gestion_user.fxml"));
        rootPane.getChildren().setAll(pane);  
    }
    
    
    
    
    
}
