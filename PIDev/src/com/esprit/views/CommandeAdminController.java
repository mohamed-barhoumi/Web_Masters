/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import com.esprit.modeles.Commande;
import com.esprit.modeles.LigneCommande;
import com.esprit.modeles.Produit;
import com.esprit.services.CommandeService;
import com.esprit.services.LigneCommandeService;
import com.esprit.utils.Constant;
import java.io.IOException;
import java.net.URL;
import java.util.Date;
import java.util.List;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.util.Callback;

/**
 * FXML Controller class
 *
 * @author amiraaissaoui
 */
public class CommandeAdminController implements Initializable {
    
    private CommandeService commandeService = new CommandeService();
    private LigneCommandeService ligneCommandeService = new LigneCommandeService();
    @FXML
    private TableView<Commande> tabCmd;
    @FXML
    private TableColumn<Commande, Date> colDate;
    @FXML
    private TableColumn<Commande, Integer> colPtsTotal;
    @FXML
    private TableColumn<Commande, String> colAdr;
    
    @FXML
    private TableView<LigneCommande> tabLigne;
    @FXML
    private TableColumn<LigneCommande, String> colProduit;
    @FXML
    private TableColumn<LigneCommande, Integer> colQuantité;
    @FXML
    private TableColumn<LigneCommande, Integer> colNbr;
    @FXML
    private TableColumn<Commande, String> colMembre;
    @FXML
    private Label detailTf;
    @FXML
    private AnchorPane rootPane;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        tabLigne.setVisible(false);
        detailTf.setVisible(false);
        colDate.setCellValueFactory(new PropertyValueFactory<>("date_commande"));
        colPtsTotal.setCellValueFactory(new PropertyValueFactory<>("total_points"));
        colAdr.setCellValueFactory(new PropertyValueFactory<>("adresse"));
        
        colMembre.setCellValueFactory(new PropertyValueFactory<>("nomPrenom"));
        List<Commande> commandes = commandeService.getAll();
        
        tabCmd.getItems().addAll(commandes);
        
        colProduit.setCellValueFactory(new PropertyValueFactory<>("nom_produit"));
        colQuantité.setCellValueFactory(new PropertyValueFactory<>("quantite"));
        colNbr.setCellValueFactory(new PropertyValueFactory<>("nb_pts"));
        addEtatColumn();
    }
    
    @FXML
    private void clickItem(MouseEvent event) {
        Commande row = tabCmd.getSelectionModel().getSelectedItem();
        
        if (row != null) {
            tabLigne.getItems().clear();
            tabLigne.setVisible(true);
            detailTf.setVisible(true);
            
            List<LigneCommande> lignes = ligneCommandeService.getByCommande(row.getId_commande());
            
            tabLigne.getItems().addAll(lignes);
        }
    }
    
    private void addEtatColumn() {
        TableColumn<Commande, Void> colBtn = new TableColumn("Etat");
        
        Callback<TableColumn<Commande, Void>, TableCell<Commande, Void>> cellFactory = new Callback<TableColumn<Commande, Void>, TableCell<Commande, Void>>() {
            @Override
            public TableCell<Commande, Void> call(final TableColumn<Commande, Void> param) {
                final TableCell<Commande, Void> cell = new TableCell<Commande, Void>() {
                    ComboBox combEtat = new ComboBox();
                    
                    {
                        combEtat.getItems().add("En attente");
                        combEtat.getItems().add("En cours");
                        combEtat.getItems().add("Livrée");
                        combEtat.getSelectionModel().selectedItemProperty().addListener((options, oldValue, newValue) -> {
                            Commande data = getTableView().getItems().get(getIndex());
                            data.setEtat((String) newValue);
                            commandeService.modifier(data);
                        });
                    }
                    
                    @Override
                    public void updateItem(Void item, boolean empty) {
                        super.updateItem(item, empty);
                        if (empty) {
                            setGraphic(null);
                        } else {
                            Commande data = getTableView().getItems().get(getIndex());
                            combEtat.setValue(data.getEtat());
                            setGraphic(combEtat);
                        }
                    }
                };
                return cell;
            }
        };
        
        colBtn.setCellFactory(cellFactory);
        
        tabCmd.getColumns().add(colBtn);
        
    }

    @FXML
    private void ActionDashboard(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/DashboardAdmin.fxml"));
        rootPane.getChildren().setAll(pane); 
    }
}
