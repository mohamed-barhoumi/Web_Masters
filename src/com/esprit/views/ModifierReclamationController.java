/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;


import com.esprit.modeles.Reclamation;
import com.esprit.services.ReclamationCRUD;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author MSI
 */
public class ModifierReclamationController implements Initializable {

   
    @FXML
    private Button btnSupprimer;
    @FXML
    private TextField tfTitre;
    @FXML
    private TextField tfReclamation;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    private void modifierReclamation(ActionEvent event) {
           String titre = tfTitre.getText() ;
           String reclamation = tfReclamation.getText();
           
           Reclamation r = new Reclamation();
           ReclamationCRUD rc = new ReclamationCRUD();
           rc.modifier(new Reclamation(tfTitre.getText(), tfReclamation.getText()));
           
    }
          
    }

    
    

