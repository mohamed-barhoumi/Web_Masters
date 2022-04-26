/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;
import java.io.File;
import java.util.Optional;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.control.Alert;
import javafx.scene.control.ButtonType;
import javafx.scene.control.ComboBox;
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
import com.esprit.modeles.Produit;
//import org.controlsfx.control.Notifications;
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
public class ListProduitController implements Initializable {

    
    ObservableList<Produit> list = FXCollections.observableArrayList();
    ServicePoduit sp = new ServicePoduit();
    @FXML
    private TextField tfProd;
    @FXML
    private TextField tfNbP;
    @FXML
    private Label lbIdp;
    @FXML
    private TableView<Produit> tbvProd;
    @FXML
    private ComboBox<String> ComboCat;
    @FXML
    private TableColumn<?, ?> tcId;
    @FXML
    private TableColumn<?, ?> tcNom_produit;
    @FXML
    private TableColumn<Produit, String> tcImage;
    @FXML
    private TableColumn<?, ?> tcCat;
    @FXML
    private TableColumn<?, ?> tcNb_pts;
    @FXML
    private TextField tfUrl;
    @FXML
    private ImageView ivImg;
    @FXML
    private TextField tfQuantite;
    @FXML
    private TableColumn<?, ?> tcQuantite;

    Connection cnx = DataSource.getInstance().getCnx();
    @FXML
    private TextField tfRecherche;
    @FXML
    private AnchorPane rootPane;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
     updateList(sp.getAll());  
     RemplirCategorie();
    }    

    private void updateList(List<Produit> theList){
        list.clear();
        theList.stream().forEach(p -> list.add(p));
        Callback<TableColumn<Produit, String>, TableCell<Produit, String>> cellFactoryU
        =
        ( TableColumn<Produit, String> param) -> {
            TableCell<Produit, String> cell = new TableCell<Produit, String>() {

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

                        ObservableList observableList = FXCollections.observableArrayList(sp.getAll());
                        tbvProd.setItems(observableList);
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

        tcImage.setCellFactory(cellFactoryU);
        tcId.setCellValueFactory(new PropertyValueFactory<>("id_produit"));
        tcNom_produit.setCellValueFactory(new PropertyValueFactory<>("nom_produit"));
        tcNb_pts.setCellValueFactory(new PropertyValueFactory<>("nb_pts"));
        tcCat.setCellValueFactory(new PropertyValueFactory<>("id_categorie"));
        tcQuantite.setCellValueFactory(new PropertyValueFactory<>("quantite"));
        tbvProd.setItems(list);
    }
    
    
   
    
    private void clearCells(){
        tfProd.setText("");
        tfNbP.setText("");
        tfUrl.setText("");
        tfQuantite.setText("");
        ivImg.setImage(null);
    }

    @FXML
    private void SupprimerProduit(ActionEvent event) {
        Alert alert1 = new Alert(Alert.AlertType.CONFIRMATION);
        alert1.setTitle("Confirmation de Supprission");
        alert1.setHeaderText(null);
        alert1.setContentText("Voulez-vous vraiment Supprimer le Produit ? ");
        Optional <ButtonType> action = alert1.showAndWait();
            if (action.get()== ButtonType.OK){
        sp.supprimer(new Produit(Integer.parseInt(lbIdp.getText())));
        clearCells();
        updateList(sp.getAll());}
    }

    @FXML
    private void selectionnerProduit(MouseEvent event) {
        
        Produit row = tbvProd.getSelectionModel().getSelectedItem();
        lbIdp.setText(String.valueOf(row.getId_produit()));
        tfProd.setText(row.getNom_produit());
        tfNbP.setText(String.valueOf(row.getNb_pts()));
        tfQuantite.setText(String.valueOf(row.getQuantite()));
       tfUrl.setText(row.getImage());
       
        
        
        
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
      
         ComboCat.setItems(null);
         ComboCat.setItems(list);
        
    }

    @FXML
    private void ActionDashboard(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/DashboardAdmin.fxml"));
        rootPane.getChildren().setAll(pane);  
    }
}
