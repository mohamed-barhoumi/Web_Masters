/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import java.io.File;
import java.net.URL;
import java.util.List;
import java.util.Optional;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Label;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.util.Callback;
import javax.swing.JFileChooser;
import com.esprit.modeles.Categorie;
import com.esprit.services.ServiceCategorie;
import java.io.IOException;
import javafx.fxml.FXMLLoader;
import javafx.scene.layout.AnchorPane;

/**
 * FXML Controller class
 *
 * @author ACER
 */
public class ListCategorieController implements Initializable {

    ObservableList<Categorie> list = FXCollections.observableArrayList();
    ServiceCategorie sc = new ServiceCategorie();
    @FXML
    private TableColumn<?, ?> id;
    @FXML
    private TableColumn<?, ?> nomCat;
    @FXML
    private TableColumn<Categorie, String> image;
    @FXML
    private TableView<Categorie> tableCate;
    @FXML
    private TextField tfNomC;
    @FXML
    private TextField tfUrl;
    @FXML
    private Label idCategorie;
    @FXML
    private TextField tfRecherche;
    @FXML
    private ImageView ivImg;
    @FXML
    private AnchorPane rootPane;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        updateList(sc.getAll());
        FilteredList<Categorie> filteredData = new FilteredList<>(list, b->true ); 
        
        tfRecherche.textProperty().addListener((observable,oldValue, newValue) -> {
            filteredData.setPredicate(Categorie -> {
            if (newValue.isEmpty() || newValue == null ) {
               return true; 
            }
            String SearchKeyword =newValue.toLowerCase();
            if(Categorie.getNom_categorie().toLowerCase().indexOf(SearchKeyword) > -1) {
                return true;
            }else if (String.valueOf(Categorie.getId_categorie()).indexOf(SearchKeyword) > -1){
                return true;
            }
            return false;
    } ); 
    });
        
        SortedList<Categorie> sortedData = new SortedList <>(filteredData);
        sortedData.comparatorProperty().bind(tableCate.comparatorProperty());
         tableCate.setItems(sortedData);
        
        
    }    
    
    private void updateList(List<Categorie> theList){
        list.clear();
        theList.stream().forEach(p -> list.add(p));
        Callback<TableColumn<Categorie, String>, TableCell<Categorie, String>> cellFactoryU
        =
        ( TableColumn<Categorie, String> param) -> {
            TableCell<Categorie, String> cell = new TableCell<Categorie, String>() {

                ImageView btn = new ImageView();
   
                @Override
                public void updateItem(String item, boolean empty) {
                    super.updateItem(item, empty);
                    if (empty) {
                        setGraphic(null);
                        setText(null);
                    } else {
                            String im = getTableView().getItems().get(getIndex()).getImage(); 
                            File file = new File(im);
                            System.out.println(im);
                            btn.setImage(new Image(file.toURI().toString()));

                        ObservableList observableList = FXCollections.observableArrayList(sc.getAll());
                        tableCate.setItems(observableList);
                        // list();
                        setGraphic(btn);
                        setText(null);
                        btn.setFitWidth(50);
                        btn.setFitHeight(50);
                    }
                }
            };
            
            return cell;
        };

        image.setCellFactory(cellFactoryU);
        id.setCellValueFactory(new PropertyValueFactory<>("id_categorie"));
        nomCat.setCellValueFactory(new PropertyValueFactory<>("nom_categorie"));
        tableCate.setItems(list);
        
        
    }

    @FXML
    private void ModifierCategorie(ActionEvent event) {
        
        Alert alert1 = new Alert(Alert.AlertType.CONFIRMATION);
        alert1.setTitle("Confirmation de modification");
        alert1.setHeaderText(null);
        alert1.setContentText("Voulez-vous vraiment modifier la catégorie ? ");
        Optional <ButtonType> action = alert1.showAndWait();
            if (action.get()== ButtonType.OK){
        sc.modifier(new Categorie(Integer.parseInt(idCategorie.getText()),tfNomC.getText(),tfUrl.getText()));
        clearCells();
        updateList(sc.getAll());  }
    }
    
    private void clearCells(){
       
        tfNomC.setText("");
        tfUrl.setText("");
    }
    
    

    @FXML
    private void SupprimerCategorie(ActionEvent event) {
        Alert alert1 = new Alert(Alert.AlertType.CONFIRMATION);
        alert1.setTitle("Confirmation de Supprission");
        alert1.setHeaderText(null);
        alert1.setContentText("Voulez-vous vraiment Supprimer la catégorie ? ");
        Optional <ButtonType> action = alert1.showAndWait();
            if (action.get()== ButtonType.OK){
        sc.supprimer(new Categorie(Integer.parseInt(idCategorie.getText())));
        clearCells();
        updateList(sc.getAll());}
        
    }

    @FXML
    private void selectionnerCategorie(MouseEvent event) {
        
        Categorie row = tableCate.getSelectionModel().getSelectedItem();
        idCategorie.setText(String.valueOf(row.getId_categorie()));
        tfNomC.setText(row.getNom_categorie());
        
    }

    @FXML
    private void ChoisirImage(ActionEvent event) {
        
        JFileChooser chooser = new JFileChooser();
        chooser.showOpenDialog(null);
        File f = chooser.getSelectedFile();
        String filename =f.getAbsolutePath();
        String s = filename.substring(20);
        tfUrl.setText(filename);
        Image img = new Image("file:/C:/xampp/htdocs/img/" + s, false);
        ivImg.setImage(img);
    }

    @FXML
    private void dashboard(ActionEvent event) throws IOException {
         AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/DashboardAdmin.fxml"));
        rootPane.getChildren().setAll(pane);  
    }

    
    
    
    
    
}
