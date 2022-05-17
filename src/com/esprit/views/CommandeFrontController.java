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
import com.sun.javafx.iio.ImageStorage;
import java.awt.image.BufferedImage;
import java.io.ByteArrayOutputStream;
import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URL;
import java.util.Date;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.ObservableList;
import javafx.embed.swing.SwingFXUtils;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javax.imageio.ImageIO;
import net.glxn.qrgen.QRCode;
import net.glxn.qrgen.image.ImageType;

/**
 * FXML Controller class
 *
 * @author amiraaissaoui
 */
public class CommandeFrontController implements Initializable {

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
    @FXML
    private ImageView qr;

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

        ObservableList<Commande> commandes = commandeService.getCommandeUser(10);

        tabCmd.setItems((ObservableList<Commande>) commandes);

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
    
     @FXML
    private void ActionStatbtn(ActionEvent event) throws IOException {
         AnchorPane pane =  FXMLLoader.load(getClass().getResource("../views/Stat.fxml"));
        rootPane3.getChildren().setAll(pane);
    }
    
    
    //codeQr
    @FXML
     private void CodeQr(ActionEvent event) {
         
         CommandeService cs = new CommandeService() {
             @Override
             public void ajouter(Commande t) {
                 throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
             }
         };

	if (tabCmd.getSelectionModel().getSelectedItem() != null) {
	    Commande cmd = new Commande();
            
        String Id_stat = colEtat.getText();

        String CommandeCode = colDate.getText() + " " + colPtsTotal.getText();
        ByteArrayOutputStream out = QRCode.from(CommandeCode)
                .to(ImageType.PNG).stream();
        String f_name = Id_stat;
        String Path_name = new File("src/QrCode/").getAbsolutePath();
        
        try {
            FileOutputStream fout = new FileOutputStream(new File(Path_name + "/" + (f_name + ".PNG")));
            fout.write(out.toByteArray());
            fout.flush();
            System.out.println(Path_name);

        } 
        catch (Exception e) {
            System.out.println(e);

        }

    }
     }
       public void affichImage() {
         String Id_stat = colEtat.getText();
        String f_name = Id_stat;
        String Path_name = new File("src/QrCode/").getAbsolutePath();
       String image = Path_name + "\\" + Id_stat + ".PNG";
       System.out.println(image);
        ImageView i = new ImageView();
        File f = new File(image);
         Image im = new Image(f.toURI().toString());
         saveToFile(im);
          qr.setImage(im);
       
    }
       
       public static void saveToFile(Image image) {
        File outputFile = new File("Iheb");
        BufferedImage bImage = SwingFXUtils.fromFXImage(image, null);
         try {
      ImageIO.write(bImage, "png", outputFile);
              } 
         catch (IOException e) {
      throw new RuntimeException(e);
    }
  }
       
    
    
    

}
