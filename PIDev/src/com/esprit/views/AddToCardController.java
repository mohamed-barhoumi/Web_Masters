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
import com.esprit.services.ServicePoduit;
import com.esprit.utils.Constant;
import java.awt.Panel;
import java.io.IOException;

import java.net.URL;

import java.time.LocalDate;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.util.Callback;
import javafx.application.Application;
import javafx.beans.property.SimpleIntegerProperty;
import javafx.beans.property.SimpleStringProperty;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.concurrent.Worker;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXMLLoader;
import javafx.scene.Group;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.layout.AnchorPane;
import javafx.scene.web.WebEngine;
import javafx.scene.web.WebEvent;
import javafx.scene.web.WebView;
import javafx.stage.Stage;
import javafx.util.Callback;

/**
 * FXML Controller class
 *
 * @author amiraaissaoui
 */
public class AddToCardController implements Initializable {

    private Map<Produit, Integer> productMap = new HashMap<>();
    private CommandeService commandeService = new CommandeService();
    private LigneCommandeService ligneCommandeService = new LigneCommandeService();

    private ServicePoduit produitService = new ServicePoduit();
    @FXML
    private TableView<Produit> tabProd;
    @FXML
    private TableColumn<Produit, String> colNomProd;
    @FXML
    private TableColumn<Produit, Integer> colPtProd;
    @FXML
    private Label labelTotal;
    @FXML
    private DatePicker dateCmd;
    @FXML
    private TextField textAdr;
    @FXML
    private WebView webView;
    WebEngine webEngine;
    @FXML
    private Button btnOK;
    int sum = 0;
    String s="0";
    @FXML
    private AnchorPane rootPane3;
    @FXML
    private Button acceuilbtn;
    @FXML
    private Button magasinbtn;
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        dateCmd.setValue(LocalDate.now());
        dateCmd.setDisable(true);
        List<Produit> produits = produitService.getAll();

       
        
        productMap.forEach((key, value) ->
        {
               sum += value * key.getNb_pts() ;
        }
        );
     
        labelTotal.setText("" + sum);

        colNomProd.setCellValueFactory(new PropertyValueFactory<>("nom_produit"));
        colPtProd.setCellValueFactory(new PropertyValueFactory<>("nb_pts"));

        tabProd.getItems().addAll(produits);
        addQuantityColumn();
        // TODO
        webEngine = webView.getEngine();

        final URL urlGoogleMaps = getClass().getResource("map.html");
        webEngine.load(urlGoogleMaps.toExternalForm());
        webEngine.setOnAlert(new EventHandler<WebEvent<String>>() {
            @Override
            public void handle(WebEvent<String> e) {
                System.out.println(e.toString());
            }
        });
        //webEngine.getLoadWorker().stateProperty().addListener(new );
    }

    private void addQuantityColumn() {
        TableColumn<Produit, Void> colBtn = new TableColumn("Quantite");

        Callback<TableColumn<Produit, Void>, TableCell<Produit, Void>> cellFactory = new Callback<TableColumn<Produit, Void>, TableCell<Produit, Void>>() {
            @Override
            public TableCell<Produit, Void> call(final TableColumn<Produit, Void> param) {
                final TableCell<Produit, Void> cell = new TableCell<Produit, Void>() {
                    Button btnMinus = new Button("-");
                    private final Button btnPlus = new Button("+");
                    private final Label label = new Label("0");
                    Integer qte = 0;

                    {
                        btnMinus.setOnAction(new EventHandler<ActionEvent>() {
                            @Override
                            public void handle(ActionEvent event) {
                                qte = Integer.parseInt(label.getText());
                                if (qte > 0) {
                                    qte--;
                                    label.setText("" + qte);
                                    Produit data = getTableView().getItems().get(getIndex());
                                    int sum = Integer.parseInt(labelTotal.getText()) - data.getNb_pts();
                                    labelTotal.setText("" + sum);
                                    productMap.put(data, qte);
                                }
                            }
                        });

                        btnPlus.setOnAction((ActionEvent event) -> {

                            qte = Integer.parseInt(label.getText());
                            qte++;
                            label.setText("" + qte);
                            Produit data = getTableView().getItems().get(getIndex());
                            int sum = Integer.parseInt(labelTotal.getText()) + data.getNb_pts();
                            labelTotal.setText("" + sum);
                            productMap.put(data, qte);
                        });
                    }

                    @Override
                    public void updateItem(Void item, boolean empty) {
                        super.updateItem(item, empty);
                        if (empty) {
                            setGraphic(null);
                        } else {

                            AnchorPane panel = new AnchorPane();
                            AnchorPane.setLeftAnchor(btnMinus, 40.0);
                            AnchorPane.setLeftAnchor(label, 90.0);
                            AnchorPane.setLeftAnchor(btnPlus, 120.0);
                            panel.getChildren().addAll(btnMinus, label, btnPlus);
                            // panel.getChildren().add(btnPlus);

                            setGraphic(panel);
                        }
                    }
                };
                return cell;
            }
        };

        colBtn.setCellFactory(cellFactory);

        tabProd.getColumns().add(colBtn);

    }

    @FXML
    private void passerCommande(ActionEvent event) throws IOException {
      
        if (textAdr.getText().length() == 0 ) {
            Alert alert = new Alert(Alert.AlertType.ERROR);
            textAdr.setStyle("-fx-border-color: red");
            alert.setTitle("Erreur");
            alert.setHeaderText("Erreur de saisie !");
            alert.setContentText("Veuillez saisir votre adresse");
            alert.show();
    
        }
        else if (labelTotal.getText().equals(s)){   {
             Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setTitle("Erreur");
              labelTotal.setStyle("-fx-border-color: red");
              alert.setHeaderText("AUCUN PRODUIT CHOISI");
            alert.setContentText("Il faut au minimum un produit pour passer commande");
            alert.show();
                    } }
           
         else {

            Commande cmd = new Commande();
            cmd.setAdresse(textAdr.getText());
            cmd.setDate_commande(new java.util.Date());
            cmd.setId_user(ProfilMembreController.idcli);
            cmd.setTotal_points(Integer.parseInt(labelTotal.getText()));
            cmd.setEtat("En attente");

            int idCmd = commandeService.ajouter(cmd);
            productMap.forEach((key, value)
                    -> {
                if (value != 0) {
                    LigneCommande ligne = new LigneCommande();
                    int total = value * key.getNb_pts();
                    ligne.setNb_pts(total);
                    ligne.setQuantite(value);
                    ligne.setId_commande(idCmd);
                    ligne.setId_produit(key.getId_produit());
                    ligneCommandeService.ajouter(ligne);
                }

            }
            );
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/CommandeFront.fxml"));

        rootPane3.getChildren().setAll(pane);
        }

     
    }

    @FXML
    private void ActionAcceuilbtn(ActionEvent event) throws IOException {
         AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/InterfaceMembre.fxml"));
        rootPane3.getChildren().setAll(pane);
    }

    @FXML
    private void ActionMagasinbtn(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/ProduitMembre.fxml"));
        rootPane3.getChildren().setAll(pane); 
    }

}
