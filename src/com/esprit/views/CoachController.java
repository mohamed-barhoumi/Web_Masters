/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;


import com.esprit.modeles.Coach;
import com.esprit.services.CoachCrud;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.input.MouseEvent;
import javafx.stage.FileChooser;
import javax.swing.JOptionPane;

/**
 * FXML Controller class
 *
 * @author a
 */
public class CoachController implements Initializable {

    @FXML
    private TextField cherch;
    @FXML
    private Button actualiser;
    @FXML
    private TableView<?> tableid;
    @FXML
    private TableColumn<?, ?> colId;
    @FXML
    private TableColumn<?, ?> colNom;
    @FXML
    private TableColumn<?, ?> colPrenom;
    @FXML
    private TableColumn<?, ?> colPhoto;
    @FXML
    private TableColumn<?, ?> colNumero;
    @FXML
    private TableColumn<?, ?> colAddPromo;
    @FXML
    private Button ajout;
    @FXML
    private TextField idNom;
    @FXML
    private TextField idImage;
    @FXML
    private TextField idPrenom;
    @FXML
    private TextField idNumero;
    @FXML
    private Button idParc;
    @FXML
    private Button btnModifier;
    @FXML
    private Button btnSupprimer;
     ObservableList list = FXCollections.observableArrayList();
      int id;

    /**
     * Initializes the controller class.
     */
       CoachCrud c = new CoachCrud();
          public void loadDataEvenement(){
    //        ObservableListrTournoi> list=  loarTournoi();
 
          list.clear();
          list.addAll(c.afficher());

         colId.setCellValueFactory(new PropertyValueFactory<>("id"));
         colNom.setCellValueFactory(new PropertyValueFactory<>("nom"));
          colPrenom.setCellValueFactory(new PropertyValueFactory<>("prenom"));
         colPhoto.setCellValueFactory(new PropertyValueFactory<>("photo"));
         


        
            
        colNumero.setCellValueFactory(new PropertyValueFactory<>("numero"));

         tableid.setItems(list);
          btnSupprimer.setDisable(true);
     btnModifier.setDisable(true);
 
    }
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        loadDataEvenement();
     
       tableid.getSelectionModel().selectedItemProperty().addListener(
                (observable, oldValue, newValue)
                -> {

                    if(newValue!=null){
                          System.out.println(newValue);

                          id=((Coach) newValue).getId();
                      populateInputs((Coach) newValue);
               }

        });
    } 
    
    
    public void  populateInputs(Coach Coach){
        //Double prix=Double.parseDouble(idPrix.getText());
         //Integer place=Integer.parseInteger(idPlace.getText());
        //String tot = Double.toString(prix);

          idNom.setText(Coach.getNom());
          idPrenom.setText(Coach.getPrenom());



         idImage.setText(Coach.getPhoto());
 
         
              idNumero.setText(""+Coach.getNumero());


           btnModifier.setDisable(false);
        btnSupprimer.setDisable(false);





   }
    
      @FXML
    private void supprimerEvenement(ActionEvent event) {
         c.supprimerEvent(id);
          JOptionPane.showMessageDialog(null, "Coach supprimé");
    }
    
     @FXML
    private void loadIMG(ActionEvent event) {

        FileChooser fc = new FileChooser();
        File selectedFile = fc.showOpenDialog(null);
        if (selectedFile != null) {

            idImage.setText(selectedFile.getAbsolutePath());
            Image image = new Image(selectedFile.toURI().toString(), 50, 50, true, true);

            System.out.println(selectedFile.getName());
        } else {
            System.out.println("erruer files");
        }
    }
    
    public boolean validator(){
        String msg="";
       
        if(! idNom.getText().matches(".*[a-zA-Z].*")){
            msg+=" Nom doit etre en lettre, ";
           
        }
        if(! idPrenom.getText().matches(".*[a-zA-Z].*")){
            msg+=" Nom doit etre en lettre, ";
           
        }
       
        
          if(idNom.getText().length()==0){
            msg+=" Champ description vide, ";
           
        }
          
              if(idImage.getText().length()==0){
            msg+=" Champ image vide, \n";
           
        }
                   if(idPrenom.getText().length()==0){
            msg+=" Champ contenu vide, \n";
           
        }
              if(idNumero.getText().matches(".*[a-zA-Z].*")){
            msg+=" Nombre des places doit etre numerique, \n";
           
        }
                    if(idNumero.getText().length()==0){
            msg+=" Champ contenu vide, \n";
           
        }
                                
           
        
                
                 
                 
           if(msg!="")  { 
          
          
          Alert a = new Alert(Alert.AlertType.ERROR,msg, ButtonType.OK);
            a.show();
          return false;
        }   
           return true ;
        
    
    }
    @FXML
    private void ajouter(ActionEvent event) {
        
        if (validator()){
         CoachCrud c = new CoachCrud();
          Coach e = new Coach( idNom.getText(),idPrenom.getText(), idImage.getText(), Integer.parseInt(idNumero.getText()));

        c.ajouterEvent(e);
        JOptionPane.showMessageDialog(null, "Coach ajouté");
          Parent root;
                try {
                    root = FXMLLoader.load(getClass().getResource("Coach.fxml"));
                      ajout.getScene().setRoot(root);
                } catch (IOException ex) {
                    Logger.getLogger(EvenementController.class.getName()).log(Level.SEVERE, null, ex);
                
           
          
    }}}

    @FXML
    private void refreshTable(MouseEvent event) {
          list.clear();
           list.addAll(c.afficher());

          tableid.setItems(list);
    }
    
}
