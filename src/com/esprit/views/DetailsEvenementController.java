/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;


import com.esprit.modeles.Evenement;
import com.esprit.services.EvenementCrud;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Label;
import javafx.scene.image.ImageView;

/**
 * FXML Controller class
 *
 * @author a
 */
public class DetailsEvenementController implements Initializable {

    @FXML
    private ImageView imagelab;
    @FXML
    private Label Titrelab;
    @FXML
    private Label Prixlab;
    @FXML
    private Label dateDlab;
    @FXML
    private Label Dcplab;
    @FXML
    private Label Placelab;
    
    
    private static int idd;
    
    private Evenement Voy;
    
  public static int getIdd(int id) {
        idd = id;
        return idd;
    }
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
           EvenementCrud vs=new EvenementCrud();
      Voy=vs.TrouverById(idd);
       Evenement  E;
         E=vs.TrouverById(idd);
            Titrelab.setText(Voy.getTitre());
        Prixlab.setText(String.valueOf(Voy.getPrix()));
       //Image image = new Image(getClass().getResourceAsStream(Voy.getImage()));
       // imagelab.setImage(image);
        dateDlab.setText(String.valueOf(Voy.getDate_debut()));
        
        
        // TODO
    }    
    

    
}
