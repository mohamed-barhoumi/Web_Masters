/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Label;

/**
 * FXML Controller class
 *
 * @author MSI
 */
public class AfficherReponseController implements Initializable {

    @FXML
    private Label lblTitre;
    @FXML
    private Label lblDescription;
    
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    
    public void setTitre(String titre_rep){
        lblTitre.setText(titre_rep);
    }
    
    public void setDescription(String description_rep){
        lblDescription.setText(description_rep);
    }
   
}
