/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;


import com.esprit.modeles.Evenement;
import com.esprit.services.EvenementCrud;
import java.io.IOException;
import java.net.URL;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.ScrollPane;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.GridPane;

/**
 * FXML Controller class
 *
 * @author a
 */

public class ShowEvenementController implements Initializable {
 private final List<Evenement> produit = new ArrayList<>();
    EvenementCrud ps = new EvenementCrud();
    @FXML
    private AnchorPane produits;
    @FXML
    private ScrollPane tableid;
    @FXML
    private GridPane grid;
     

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
           produit.addAll(ps.afficherEvents());
        int column = 0;
        int row = 1;
        try {
            for (int i = 0; i < produit.size(); i++) {
                FXMLLoader fxmlloader = new FXMLLoader();
                fxmlloader.setLocation(getClass().getResource("AfficherEvenement.fxml"));
                AnchorPane anchorPane = fxmlloader.load();

                AfficherEvenementController AA = fxmlloader.getController();
                AA.setData(produit.get(i));
                if (column == 3) {
                    column = 0;
                    row++;
                }
                grid.add(anchorPane, column++, row);

            }
        } catch (IOException ex) {
            ex.printStackTrace();
        }

    }
        // TODO
    }    
    

