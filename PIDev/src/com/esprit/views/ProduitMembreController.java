/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollPane;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.Pane;
import javafx.scene.layout.VBox;
import com.esprit.modeles.Produit;
import com.esprit.services.ServicePoduit;

/**
 * FXML Controller class
 *
 * @author ACER
 */
public class ProduitMembreController implements Initializable {

    @FXML
    private AnchorPane rootPane2;
    @FXML
    private BorderPane mainBorderPane;
    @FXML
    private Pane paneId;
    @FXML
    private ScrollPane scrollPaneID;
    @FXML
    private GridPane ptGP;

    ServicePoduit sp = new ServicePoduit();
    @FXML
    private TextField tfRecherche;
    @FXML
    private Button acceuilbtn;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        LoadData();
    }

    private void LoadData() {
        loadGP();

    }

    private void loadGP() {
        int maxColumns = 2;
        /*if(ModifPanel.isVisible()){
            maxColumns = 2;
            
        }else{
            maxColumns = 3;
            
        }*/

        int column = 0;
        int row = 0;

        ptGP.getChildren().clear();

        for (Produit p : sp.getAll()) {
            try {
                FXMLLoader fxmlLoader = new FXMLLoader();
                fxmlLoader.setLocation(getClass().getResource("ProduitAffiche.fxml"));

                AnchorPane anchorPane = fxmlLoader.load();

                ProduitAfficheController ProduitAfficheController = fxmlLoader.getController();
                ProduitAfficheController.setData(p);
                //    anchorPane.setId(String.valueOf(j.getId_joueur()));

                if (column == maxColumns) {
                    column = 0;
                    row++;
                }

                ptGP.add(anchorPane, column++, row);
            } catch (IOException ex) {
            }

        }

    }

    @FXML
    private void onGP_clicked(MouseEvent event) {
    }

    @FXML
    private void PasserCommande(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/AddToCard.fxml"));
        rootPane2.getChildren().setAll(pane);
    }

    @FXML
    private void DonnerAvis(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/RatingProduct.fxml"));
        rootPane2.getChildren().setAll(pane);
    }

    @FXML
    private void ActionAcceuilbtn(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/InterfaceMembre.fxml"));
        rootPane2.getChildren().setAll(pane);
    }

}
