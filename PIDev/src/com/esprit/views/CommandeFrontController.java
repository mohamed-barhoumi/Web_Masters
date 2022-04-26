/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import com.esprit.modeles.Commande;
import com.esprit.modeles.LigneCommande;
import com.esprit.services.CommandeService;
import com.esprit.services.LigneCommandeService;
import com.esprit.utils.Constant;
import java.io.IOException;
import java.net.URL;
import java.util.Date;
import java.util.List;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;

/**
 * FXML Controller class
 *
 * @author amiraaissaoui
 */
public class CommandeFrontController implements Initializable {

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
    private TableColumn<Commande, String> colEtat;
    @FXML
    private TableView<LigneCommande> tabLigne;
    @FXML
    private TableColumn<LigneCommande, String> colProduit;
    @FXML
    private TableColumn<LigneCommande, Integer> colQuantité;
    @FXML
    private TableColumn<LigneCommande, Integer> colNbr;
    @FXML
    private AnchorPane rootPane3;
    @FXML
    private Label detailTf;
    @FXML
    private Button acceuilbtn;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        detailTf.setVisible(false);
        tabLigne.setVisible(false);
        
        colDate.setCellValueFactory(new PropertyValueFactory<>("date_commande"));
        colPtsTotal.setCellValueFactory(new PropertyValueFactory<>("total_points"));
        colAdr.setCellValueFactory(new PropertyValueFactory<>("adresse"));
        colEtat.setCellValueFactory(new PropertyValueFactory<>("etat"));

        List<Commande> commandes = commandeService.getCommandeUser(ProfilMembreController.idcli);

        tabCmd.getItems().addAll(commandes);

        colProduit.setCellValueFactory(new PropertyValueFactory<>("nom_produit"));
        colQuantité.setCellValueFactory(new PropertyValueFactory<>("quantite"));
        colNbr.setCellValueFactory(new PropertyValueFactory<>("nb_pts"));
        
        
        
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

    @FXML
    private void ActionAcceuilbtn(ActionEvent event) throws IOException {
         AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/InterfaceMembre.fxml"));
        rootPane3.getChildren().setAll(pane);
    }

}
