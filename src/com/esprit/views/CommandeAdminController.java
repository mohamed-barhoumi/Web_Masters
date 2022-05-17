/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import com.esprit.modeles.Commande;
import com.esprit.modeles.LigneCommande;
import com.esprit.modeles.Pdf;
import com.esprit.modeles.Produit;
import com.esprit.services.CommandeService;
import com.esprit.services.LigneCommandeService;
import com.esprit.utils.Constant;
import com.itextpdf.text.DocumentException;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.Collections;
import java.util.Date;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.print.PageLayout;
import javafx.print.PageOrientation;
import javafx.print.Paper;
import javafx.print.Printer;
import javafx.print.PrinterJob;
import javafx.scene.Node;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.util.Callback;
import org.controlsfx.control.Notifications;

/**
 * FXML Controller class
 *
 * @author amiraaissaoui
 */
public class CommandeAdminController implements Initializable {

    private CommandeService commandeService = new CommandeService() {
        @Override
        public void ajouter(Commande t) {
            throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        }
    };
    private LigneCommandeService ligneCommandeService = new LigneCommandeService();
    @FXML
    private TableView<Commande> tabCmd;
    @FXML
    private TableColumn<Commande, Date> colDate;
    @FXML
    private TableColumn<Commande, Integer> colPtsTotal;
    @FXML
    private TableColumn<Commande, String> colAdr;


    ObservableList<Commande> data = FXCollections.observableArrayList();
    FilteredList<Commande> filter = new FilteredList<>(data, e -> true);
    SortedList<Commande> sort = new SortedList<>(filter);

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
    private Button PDFbtn;
    @FXML
    private Button PRINTbtn;
    @FXML
    private AnchorPane rootPane;
    @FXML
    private TextField cherche;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        tabLigne.setVisible(true);
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

    // commande pdf
    @FXML
    private void PDFbtn(ActionEvent event) throws FileNotFoundException, SQLException, DocumentException {
     ObservableList<Commande> all, Single;
        all = tabCmd.getItems();
        Single = tabCmd.getSelectionModel().getSelectedItems();
        Commande A = Single.get(0);
        Pdf p = new Pdf();
        System.out.println(A);
        System.out.println(Single);
        String s = A.getDate_commande().toString();
        p.add("Commande" + A.getDate_commande().toString()+ ".pdf",
                A.getDate_commande().toString(),
                A.getTotal_points(),
                A.getAdresse(),
                A.getNomPrenom());
        
        Notifications notificationBuilder = Notifications.create()
                .title("NOTIFICATION FORUM").text("TABLE PDF enregistre")
                .graphic(null).hideAfter(javafx.util.Duration.seconds(5))
                .position(Pos.BASELINE_RIGHT)
                .onAction(new EventHandler<ActionEvent>() {
                    public void handle(ActionEvent event) {
                        System.out.println("clicked ON");
                    }
                }
                );
        notificationBuilder.darkStyle();
        notificationBuilder.show();
                    
    }
                                
    
    
    

                        
  

    //PrintCommandes
    @FXML
    private void PrintCommandes(ActionEvent event) {

        PrinterJob job = PrinterJob.createPrinterJob();

        Node root = this.tabCmd;

        if (job != null) {
            job.showPrintDialog(root.getScene().getWindow()); // Window must be your main Stage
            Printer printer = job.getPrinter();
            PageLayout pageLayout = printer.createPageLayout(Paper.A3, PageOrientation.PORTRAIT, Printer.MarginType.HARDWARE_MINIMUM);
            boolean success = job.printPage(pageLayout, root);
            if (success) {
                job.endJob();
            }
        }

        Notifications notificationBuilder = Notifications.create()
                .title("NOTIFICATION FORUM").text("TABLE IMPRIMée")
                .graphic(null).hideAfter(javafx.util.Duration.seconds(5))
                .position(Pos.BASELINE_RIGHT)
                .onAction(new EventHandler<ActionEvent>() {
                    public void handle(ActionEvent event) {
                        System.out.println("clicked ON");
                    }
                }
                );
        notificationBuilder.darkStyle();
        notificationBuilder.show();
    }

    @FXML
    private void ActionDashboard(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/Gchart.fxml"));
        rootPane.getChildren().setAll(pane);
    }

    @FXML
    private void ActionStat(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/DashboardAdmin.fxml"));
        rootPane.getChildren().setAll(pane);
    }

    @FXML
    private void refresh_table() {
    CommandeService Cs= new CommandeService() {
        @Override
        public void ajouter(Commande t) {
            throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        }
    };      
      ObservableList<Commande> list = FXCollections.observableArrayList();
       colDate.setCellValueFactory(new PropertyValueFactory<>("date_commande"));
        colPtsTotal.setCellValueFactory(new PropertyValueFactory<>("total_points"));
        colAdr.setCellValueFactory(new PropertyValueFactory<>("adresse"));
        colMembre.setCellValueFactory(new PropertyValueFactory<>("nomPrenom"));
        
        list.addAll(Cs.getAll());   
     tabCmd.setItems(list);
    }


    @FXML
    private void search(KeyEvent event) {
        cherche.setOnKeyReleased(e -> {
            cherche.textProperty().addListener((observable, oldValue, newValue) -> {
                filter.setPredicate(Commande -> {
                    if (newValue == null || newValue.isEmpty()) {
                        return true;
                    }
                    String lowerCaseFilter = newValue.toLowerCase();
                    if (Commande.getEtat().toLowerCase().contains(lowerCaseFilter)) {
                        return true;
                    } 
                    
                    else {
                        return false;
                    }
                });

            });
            sort.comparatorProperty().bind(tabCmd.comparatorProperty());
            tabCmd.setItems(sort);
        });
        
    }
    
    // trie stream
    
    @FXML
    private void trititre(ActionEvent event) {
        CommandeService evt = new CommandeService() {
            @Override
            public void ajouter(Commande t) {
                throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
            }
        };
        Commande t=new Commande();
      List<Commande> a = evt.TRITitre();;
        colDate.setCellValueFactory(new PropertyValueFactory<>("date_commande"));
        colPtsTotal.setCellValueFactory(new PropertyValueFactory<>("total_points"));
        colAdr.setCellValueFactory(new PropertyValueFactory<>("adresse"));
        colMembre.setCellValueFactory(new PropertyValueFactory<>("nomPrenom"));

         ObservableList<Commande> data=FXCollections.observableArrayList(a);
         tabCmd.getItems().setAll(a);            
         System.out.println(a);
          tabCmd.setDisable(true);
    }
        
    }

