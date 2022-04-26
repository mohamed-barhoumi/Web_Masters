/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import java.io.File;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javax.swing.JFileChooser;
import com.esprit.modeles.Produit;
import com.esprit.services.ServicePoduit;
import com.esprit.utils.DataSource;
import java.io.IOException;
import javafx.fxml.FXMLLoader;
import javafx.scene.layout.AnchorPane;

/**
 * FXML Controller class
 *
 * @author ACER
 */
public class AddProduitFXMLController implements Initializable {

    @FXML
    private TextField tfNomProd;
    @FXML
    private TextField tfNbPts;
    @FXML
    private ComboBox<String> combCate;
    @FXML
    private Label cmbCate;
    @FXML
    private TextField tfImg;
        
    Connection cnx = DataSource.getInstance().getCnx();
    @FXML
    private ImageView ivImg;
    @FXML
    private TextField tfQuantite;
    @FXML
    private AnchorPane rootPane2;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        RemplirCategorie();
    }    

     @FXML
    private void AjouterProduit(ActionEvent event) {
     String nom_Produit = tfNomProd.getText();
     int nb_pts = Integer.parseInt(tfNbPts.getText());
     int quantite = Integer.parseInt(tfQuantite.getText());
     String image = tfImg.getText();
     ServicePoduit sP=new ServicePoduit();
     Produit p =new Produit(nom_Produit,nb_pts,combCate.getSelectionModel().getSelectedItem(), image,quantite);
     Alert alert =new Alert(AlertType.INFORMATION);
     if (nom_Produit.length() == 0 ||  tfNbPts.getText().length() == 0 || combCate.getSelectionModel().getSelectedItem() == null ||  image.length() == 0 || tfQuantite.getText()==null   ) {
            Alert alert1 = new Alert(Alert.AlertType.ERROR);
            alert1.setTitle("Erreur");
            alert1.setHeaderText("Erreur de saisie !");
            alert1.setContentText("Manque d informations");
            alert1.showAndWait();
        } else 
         if(nb_pts<0) {
            Alert alert2 = new Alert(Alert.AlertType.ERROR);
            alert2.setTitle("Erreur");
            alert2.setHeaderText(null);
            alert2.setContentText("nb_pts ne doit pas etre negatif");
            alert2.showAndWait();
    }else {
     sP.ajouter(p);
     alert.setTitle("Succés");
     alert.setHeaderText("Ajoutée");
     alert.setContentText("Produit Ajoutée Avec Succès !");
     alert.showAndWait();}
    }   

    
    private void RemplirCategorie() {
           ObservableList<String> list = FXCollections.observableArrayList();
        try {
             String req = "SELECT nom_categorie FROM categorie";
             Statement st = cnx.createStatement();
             ResultSet rs = st.executeQuery(req);
             while(rs.next()){
                 list.add(rs.getString("nom_categorie"));
            
             }
         } catch (SQLException ex) {
             Logger.getLogger(AddProduitFXMLController.class.getName()).log(Level.SEVERE, null, ex);
         } 
      
         combCate.setItems(null);
         combCate.setItems(list);
        
    }

    @FXML
    private void ChoisirImage(ActionEvent event) {
        JFileChooser chooser = new JFileChooser();
        chooser.showOpenDialog(null);
        File f = chooser.getSelectedFile();
        String filename =f.getAbsolutePath();
        String s = filename.substring(20);
        tfImg.setText(filename);
        Image img = new Image("file:/C:/xampp/htdocs/img/" + s, false);
        ivImg.setImage(img);
    }

    @FXML
    private void ListeProduit(ActionEvent event)throws IOException{
      AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/ListProduit.fxml"));
        rootPane2.getChildren().setAll(pane);  
        
    }

    @FXML
    private void ActionDashboard(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/DashboardAdmin.fxml"));
        rootPane2.getChildren().setAll(pane);   
    }
    
}
