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
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import com.esprit.modeles.Produit;

/**
 * FXML Controller class
 *
 * @author ACER
 */
public class ProduitAfficheController implements Initializable {

    @FXML
    private ImageView imgIV;
    @FXML
    private Label lbNomP;
    @FXML
    private Label lblCategorie;
    @FXML
    private Label lbQuantite;
    @FXML
    private Label lbNbPts;
    @FXML
    private Label idLBL;

    private Produit p;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    
    public void setData(Produit p){
        this.p = p;
        this.idLBL.setText(String.valueOf(p.getId_produit()));
        this.lbNomP.setText(p.getNom_produit());
        this.lblCategorie.setText(p.getId_categorie());
        this.lbNbPts.setText(String.valueOf(p.getNb_pts()));
        this.lbQuantite.setText(String.valueOf(p.getQuantite()));
        Image img = new Image("file:/C:/xampp/htdocs/img/" + p.getImage(), false);
        this.imgIV.setImage(img);
     
    }
    
     public Produit getData(){
        return p;
    }
}
