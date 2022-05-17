/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;


import java.io.File;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javax.swing.JFileChooser;
import com.esprit.modeles.Categorie;
import com.esprit.services.ServiceCategorie;
import java.awt.image.BufferedImage;
import java.io.ByteArrayOutputStream;
import java.io.FileInputStream;
import java.io.IOException;
import java.util.logging.Logger;
import javafx.embed.swing.SwingFXUtils;
import javafx.fxml.FXMLLoader;
import javafx.scene.image.WritableImage;
import javafx.scene.layout.AnchorPane;
import javafx.stage.FileChooser;
import javax.imageio.ImageIO;

/**
 * FXML Controller class
 *
 * @author ACER
 */
public class AddCategorieController implements Initializable {

    @FXML
    private TextField tfNomC;
    @FXML
    private TextField tfUrl;
    @FXML
    private ImageView ivImg;
    @FXML
    private AnchorPane rootPane1;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void AjouterCategorie(ActionEvent event) {
     String nom_categorie = tfNomC.getText();
     String image = tfUrl.getText();
     ServiceCategorie sC=new ServiceCategorie();
     Categorie c =new Categorie(nom_categorie,image);
     Alert alert =new Alert(AlertType.INFORMATION);
     
     if (tfNomC.getText().length() == 0 ||  tfUrl.getText().length() == 0 ) {
            Alert alert1 = new Alert(Alert.AlertType.ERROR);
            alert1.setTitle("Erreur");
            alert1.setHeaderText("Erreur de saisie !");
            alert1.setContentText("Manque d informations");
            alert1.showAndWait();

        } else {
     sC.ajouter(c);
     alert.setTitle("Succés");
     alert.setHeaderText("Ajoutée");
     alert.setContentText("Catégorie Ajoutée Avec Succès !");
     alert.showAndWait();}
    }

    @FXML
    private void ChoisirImage(ActionEvent event) {
       FileChooser fileChooser = new FileChooser();
        FileChooser.ExtensionFilter extFilterJPG
                = new FileChooser.ExtensionFilter("JPG files (*.JPG)", "*.JPG");
        FileChooser.ExtensionFilter extFilterjpg
                = new FileChooser.ExtensionFilter("jpg files (*.jpg)", "*.jpg");
        FileChooser.ExtensionFilter extFilterPNG
                = new FileChooser.ExtensionFilter("PNG files (*.PNG)", "*.PNG");
        FileChooser.ExtensionFilter extFilterpng
                = new FileChooser.ExtensionFilter("png files (*.png)", "*.png");
        fileChooser.getExtensionFilters()
                .addAll(extFilterJPG, extFilterjpg, extFilterPNG, extFilterpng);
        File file = fileChooser.showOpenDialog(null);
        try {
            BufferedImage bufferedImage = ImageIO.read(file);
            WritableImage image = SwingFXUtils.toFXImage(bufferedImage, null);
            ivImg.setImage(image);
            ivImg.setFitWidth(200);
            ivImg.setFitHeight(200);
            ivImg.scaleXProperty();
            ivImg.scaleYProperty();
            ivImg.setSmooth(true);
            ivImg.setCache(true);
            FileInputStream fin = new FileInputStream(file);
            ByteArrayOutputStream bos = new ByteArrayOutputStream();
            byte[] buf = new byte[1024];
            for (int readNum; (readNum = fin.read(buf)) != -1;) {
                bos.write(buf, 0, readNum);
            }
            byte[] person_image = bos.toByteArray();
        } catch (IOException ex) {
            Logger.getLogger("ss");
        }
      tfUrl.setText(file.getAbsolutePath());
    }

    @FXML
    private void AjouterProduit(ActionEvent event) throws IOException{
      AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/AddProduitFXML.fxml"));
        rootPane1.getChildren().setAll(pane);  
        
    }

    @FXML
    private void ListeCategorie(ActionEvent event)throws IOException{
      AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/ListCategorie.fxml"));
        rootPane1.getChildren().setAll(pane);  
        
    }

   @FXML
    private void dashborad(ActionEvent event)throws IOException{
      AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/DashboardAdmin.fxml"));
        rootPane1.getChildren().setAll(pane);  
    }

   
    
    
}
