/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import com.esprit.modeles.Evenement;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.Initializable;
import java.io.IOException;
import java.time.LocalDate;
import java.time.Period;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.stage.Stage;


/**
 * FXML Controller class
 *
 * @author a
 */
public class AfficherEvenementController implements Initializable {

    @FXML
    private Label Nomlab;
    @FXML
    private Label Prixlab;
    @FXML
    private Label dateDlab;
    @FXML
    private ImageView imagelab;
    @FXML
    private Button idShow;
    
    private Evenement Voy;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    
    
    public void JourRestant(Evenement p){
    int Y,D,M;
     LocalDate pdate = p.getDate_debut().toLocalDate();
        LocalDate now = LocalDate.now();
 
        Period diff = Period.between(pdate, now);
 
    Y=diff.getYears();
    D=diff.getDays();
    M=diff.getMonths();
    System.out.println(Y+" "+D+" " +M);
    }
    public void setData(Evenement p) {
        int Y,D,M;
     LocalDate pdate = p.getDate_debut().toLocalDate();
        LocalDate now = LocalDate.now();
 
        Period diff = Period.between(now,pdate);
 
    Y=diff.getYears();
    D=diff.getDays();
    M=diff.getMonths();
    System.out.println(Y+" "+D+" " +M);
    
        Evenement  P;
         //DetailsEvenementController.getIdd(Voy.getId());
        
        Nomlab.setText(String.valueOf(p.getTitre()));
        Prixlab.setText(String.valueOf(p.getPrix()));
        dateDlab.setText("-"+String.valueOf(D)+" Jours! "+"\n"+ String.valueOf(M)+"Mois");
      
      //Image image = new Image(getClass().getResourceAsStream("C:\\Users\\a\\Desktop\bibi.jpg"));
       //imagelab.setImage(image);
        

//       
    }
  

    @FXML
    private void showD(ActionEvent event) throws IOException {
        
           //int x = DetailsEvenementController.getIdd(Voy.getId());
       // System.out.println(x);
        Parent root = FXMLLoader.load(getClass().getResource("Evenement.fxml"));
        Stage mainStage = new Stage();
        Scene scene = new Scene(root);
        mainStage.setScene(scene);
        mainStage.show();
    }
    
}
