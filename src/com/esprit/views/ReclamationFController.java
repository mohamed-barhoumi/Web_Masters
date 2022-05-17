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
import static java.util.Collections.list;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;
import org.controlsfx.control.Notifications;

/**
 * FXML Controller class
 *
 * @author MSI
 */
public class ReclamationFController implements Initializable {

    @FXML
    private TextField tfTitre;
    @FXML
    private TextField tfReclamation;
    @FXML
    private Button btnAjouter;
   

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        
    }    

    @FXML
    private void ajouterReclamation(ActionEvent event) {
        if (tfTitre.getText().isEmpty() || tfReclamation.getText().isEmpty()) {
            Alert a = new Alert(Alert.AlertType.ERROR, "Titre ou reclamation invalide(s)", ButtonType.OK);
            a.showAndWait();
        } else {
           String titre = tfTitre.getText() ;
           String reclamation = tfReclamation.getText();
           
           Reclamation r = new Reclamation (titre, reclamation);
           ReclamationCRUD rc = new ReclamationCRUD();
           rc.ajouter(r);
           
           Alert a = new Alert(Alert.AlertType.INFORMATION, "Réclamation ajoutée !", ButtonType.OK);
           a.showAndWait();
           
           FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherReclamation.fxml"));
           Parent root;
           try {
               root = loader.load();
               
               tfTitre.getScene().setRoot(root);
               
               AfficherReclamationController arc = loader.getController();
               arc.setTitre(tfTitre.getText());
               arc.setReclamation(tfReclamation.getText());
               
           } catch (IOException ex) {
                    System.out.print("Error"+ex.getMessage());
           }
           
        }
       
       Notifications notificationBuilder;
        notificationBuilder = notificationBuilder = Notifications.create()
                .title("Sccées !")
                .text("Réclamation ajoutée avec succées !!!! ")
                .graphic(null)
                .hideAfter(javafx.util.Duration.seconds(5))
                .position(Pos.TOP_RIGHT)
                .onAction(new EventHandler<ActionEvent>(){
                    @Override
                    public void handle(ActionEvent event) {
                        System.out.println("Clicked on notification");
                    }
                });
            notificationBuilder.showConfirm();
  
    }
    public boolean validator(){
        String msg="";
       
        if(tfTitre.getText().length()==0){
            msg+=" Champ Titre vide, ";
           
        }
          
              if(tfReclamation.getText().length()==0){
            msg+=" Champ reclamation vide, \n";
           
        }
           if(!"".equals(msg))  { 
          Alert a = new Alert(Alert.AlertType.ERROR,msg, ButtonType.OK);
            a.show();
          return false;
        }   
            if(! tfTitre.getText().matches(".*[a-zA-Z].*")){
            msg+=" titre doit etre en lettre, ";
           
        }
        return false;
    }

    @FXML
    private void ActionDashboard(ActionEvent event) throws IOException {
        FXMLLoader loader=new FXMLLoader(getClass().getResource("InterfaceMembre.fxml"));
                Parent Ajouter = (Parent)loader.load();
  
                Scene scene = new Scene(Ajouter);     
                Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
                window.setScene(scene);
                window.show();
    }

    @FXML
    private void refreshTable(MouseEvent event) {
    }

    
    
}
