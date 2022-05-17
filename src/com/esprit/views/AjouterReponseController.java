/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;


import com.esprit.modeles.Reponse;
import com.esprit.services.ReponseCRUD;
import java.io.IOException;
import java.net.URL;
import java.util.ArrayList;
import static java.util.Collections.list;
import static java.util.Locale.filter;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Pagination;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javax.swing.JOptionPane;
import static java.util.Collections.sort;
import java.util.List;
import javafx.beans.property.SimpleObjectProperty;
import javafx.beans.property.SimpleStringProperty;
import javafx.beans.value.ObservableValue;
import javafx.collections.transformation.SortedList;
import javafx.scene.Node;
import javafx.scene.input.KeyEvent;

/**
 * FXML Controller class
 *
 * @author MSI
 */
public class AjouterReponseController implements Initializable {
    private TextField tfId;
    @FXML
    private TextField tfTitre;
    @FXML
    private TextField tfDescription;
    @FXML
    private Button btnAjouter;
    @FXML
    private Button btnModifier;
    @FXML
    private TableView<Reponse> tableid;
    @FXML
    private TableColumn<?, ?> colId;
    @FXML
    private TableColumn<?, ?> colTitre;
    @FXML
    private Button btnSupprimer;
    @FXML
    private Button actualiser;
    @FXML
    private TableColumn<?, ?> colDescription;
    int id_rep;
    

    ObservableList list = FXCollections.observableArrayList();
    FilteredList<Reponse> filter = new FilteredList<>(list, e -> true);
    SortedList<Reponse> sort = new SortedList<>(filter);
    
    ReponseCRUD rep = new ReponseCRUD ();

    @FXML
    private TextField cherch;
    @FXML
    private Pagination pagination;

    public void loadDataReponse(){

         list.clear();
         list.addAll(rep.GetAll());

         colId.setCellValueFactory(new PropertyValueFactory<>("id_rep"));
         colTitre.setCellValueFactory(new PropertyValueFactory<>("titre_rep"));
         colDescription.setCellValueFactory(new PropertyValueFactory<>("description_rep"));
         tableid.setItems(list);

     }
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO

        loadDataReponse();     
       
        tableid.getSelectionModel().selectedItemProperty().addListener(
                (observable, oldValue, newValue)
                -> {

                    if(newValue!=null){
                          System.out.println(newValue);

                      id_rep = ((Reponse) newValue).getId_rep();
                      populateInputs((Reponse) newValue);
               }
                    
        });

    }    
  
    public void  populateInputs(Reponse Reponse){

         tfTitre.setText(Reponse.getTitre_rep());
         tfDescription.setText(Reponse.getDescription_rep());
    } 

    public boolean validator(){
        String msg="";
       
        if(tfTitre.getText().length()==0){
            msg+=" Champ Titre vide, ";
           
        }
          
              if(tfDescription.getText().length()==0){
            msg+=" Champ description vide, \n";
           
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
    private void ajouterReponse(ActionEvent event) {
       if (tfTitre.getText().isEmpty() || tfDescription.getText().isEmpty()) {
            Alert a = new Alert(Alert.AlertType.ERROR, "Titre ou description invalide(s)", ButtonType.OK);
            a.showAndWait();
        } else {
           String titre_rep = tfTitre.getText() ;
           String description_rep = tfDescription.getText();
           
           Reponse r;
           r = new Reponse (id_rep, titre_rep, description_rep);
           ReponseCRUD rc = new ReponseCRUD();
           rc.ajouter(r);
           
           Alert a = new Alert(Alert.AlertType.INFORMATION, "Reponse ajoutée !", ButtonType.OK);
           a.showAndWait();
           
           FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherReponse.fxml"));
           Parent root;
           try {
               root = loader.load();
               
               tfTitre.getScene().setRoot(root);
               
               AfficherReponseController arc = loader.getController();
               
               arc.setTitre(tfTitre.getText());
               arc.setDescription(tfDescription.getText());
               
           } catch (IOException ex) {
                    System.out.print("Error"+ex.getMessage());
           }
           
        }
       
    }

    @FXML
    private void modifierReponse(ActionEvent event) {
    if(validator()){
        String titre_rep = tfTitre.getText();
        String description_rep = tfDescription.getText();
        Reponse r = new Reponse(titre_rep, description_rep);
        rep.modifier(r);
             } 
    }
    

    @FXML
    private void supprimerReponse(ActionEvent event) {
        rep.supprimer(id_rep);
        JOptionPane.showMessageDialog(null, "Réponse supprimée");
    }

    @FXML
    private void refreshTable(MouseEvent event) {
        list.clear();
            list.addAll(rep.GetAll());

            tableid.setItems(list);
    }

    @FXML
    private void recherche() {
        
            cherch.textProperty().addListener((observable, oldValue, newValue) -> {
                filter.setPredicate(Reponse -> {
                    if (newValue == null || newValue.isEmpty()) {
                        return true;
                    }
                    String lowerCaseFilter = newValue.toLowerCase();
                    if (Reponse.getTitre_rep().toLowerCase().contains(lowerCaseFilter)) {
                        return true;
                    }
                    if (Reponse.getDescription_rep().toLowerCase().contains(lowerCaseFilter)) {
                        return true;
                    } else {
                        return false;
                    }
                });

            });
		
            sort.comparatorProperty().bind(tableid.comparatorProperty());
            tableid.setItems(sort);
    }
    
    }

    
        
