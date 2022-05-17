/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import com.esprit.modeles.Evenement;
import com.esprit.services.EvenementCrud;
import com.esprit.utils.DataSource;
import com.itextpdf.text.BaseColor;
import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Element;
import com.itextpdf.text.Font;
import com.itextpdf.text.FontFactory;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.Phrase;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPTable;
import com.itextpdf.text.pdf.PdfWriter;

import java.awt.Desktop;
import javafx.scene.image.Image;
import java.awt.image.BufferedImage;
import javax.imageio.ImageIO;
import javafx.scene.image.ImageView;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.sql.Date;
import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.Arrays;
import static java.util.Collections.list;
import static java.util.Collections.sort;
import java.util.List;
import static java.util.Locale.filter;
import java.util.Optional;

import javafx.collections.transformation.FilteredList;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.DatePicker;
import javafx.scene.control.RadioButton;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableColumn.CellEditEvent;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javax.swing.JOptionPane;
import org.controlsfx.control.Notifications;

/**
 * FXML Controller class
 *
 * @author a
 */
public class EvenementController implements Initializable {

    @FXML
    private TextField cherch;
    @FXML
    private Button actualiser;
    @FXML
    private TableView<Evenement> tableid;
    @FXML
    private TableColumn<Evenement, Integer> colId;
    @FXML
    private TableColumn<Evenement, String> colTitre;
    @FXML
    private TableColumn<Evenement, String> colImage;
    @FXML
    private TableColumn<Evenement, String> colDescription;
    @FXML
    private TableColumn<Evenement, Double> colPrix;
    @FXML
    private TableColumn<Evenement, Date> colDateDeb;
    @FXML
    private TableColumn<Evenement, Date> colDatefin;
   

    @FXML
    private Button ajout;
    @FXML
    private DatePicker idDateFin;
    @FXML
    private DatePicker idDatedeb;
    @FXML
    private TextField idTitre;
    @FXML
    private TextField idImage;
    @FXML
    private TextField idDescription;
    @FXML
    private TextField idPrix;
    @FXML
    private TextField idPlace;
    @FXML
    private TextField idInscrit;
    @FXML
    private Button idParc;
     ObservableList list = FXCollections.observableArrayList();
       FilteredList<Evenement> filter = new FilteredList<>(list, e -> true);
    SortedList<Evenement> sort = new SortedList<>(filter);
     int id;
     

    /**
     * Initializes the controller class.
     */
          EvenementCrud evt = new EvenementCrud();
    @FXML
    private Button btnSupprimer;
    @FXML
    private Button btnModifier;
    @FXML
    private TableColumn<?, ?> colPlace;
    @FXML
    private TableColumn<?, ?> colInscrit;
    @FXML
    private RadioButton idplace;
    @FXML
    private RadioButton triTitre;
    @FXML
    private Button statbutt;
    @FXML
    private ImageView sp;
      public void loadDataEvenement(){
    //        ObservableListrTournoi> list=  loarTournoi();
 
          list.clear();
          list.addAll(evt.afficherEvents());

         colId.setCellValueFactory(new PropertyValueFactory<>("id"));
         colTitre.setCellValueFactory(new PropertyValueFactory<>("titre"));
         colImage.setCellValueFactory(new PropertyValueFactory<>("image"));
          colDescription.setCellValueFactory(new PropertyValueFactory<>("description"));


        
             colPrix.setCellValueFactory(new PropertyValueFactory<>("prix"));

        colDateDeb.setCellValueFactory(new PropertyValueFactory<>("date_debut"));
        colDatefin.setCellValueFactory(new PropertyValueFactory<>("date_fin"));
        colPlace.setCellValueFactory(new PropertyValueFactory<>("nbplace"));
        colInscrit.setCellValueFactory(new PropertyValueFactory<>("nbinscrit"));

         tableid.setItems(list);
          btnSupprimer.setDisable(true);
     btnModifier.setDisable(true);
 
    }
      
      
    @Override
    public void initialize(URL location, ResourceBundle resources) {
        
      loadDataEvenement();
     
       tableid.getSelectionModel().selectedItemProperty().addListener(
                (observable, oldValue, newValue)
                -> {

                    if(newValue!=null){
                          System.out.println(newValue);

                          id=((Evenement) newValue).getId();
                      populateInputs((Evenement) newValue);
               }

        });
        // TODO
    }  
    
    
    public void  populateInputs(Evenement Evenement){
        //Double prix=Double.parseDouble(idPrix.getText());
         //Integer place=Integer.parseInteger(idPlace.getText());
        //String tot = Double.toString(prix);

          idTitre.setText(Evenement.getTitre());




         idImage.setText(Evenement.getImage());
 
         idDescription.setText(Evenement.getDescription());
          idPrix.setText(""+Evenement.getPrix());
           
              idDatedeb.setValue(Evenement.getDate_debut().toLocalDate());
            idDateFin.setValue(Evenement.getDate_fin().toLocalDate());
             idPlace.setText(""+Evenement.getNbplace());
              idInscrit.setText(""+Evenement.getNbinscrit());


           btnModifier.setDisable(false);
        btnSupprimer.setDisable(false);





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
    @FXML
    private void handleMouseAction(MouseEvent event) {
    }
    
     public boolean controleTextFieldCellEdit(CellEditEvent edittedCell) {
        if (!edittedCell.getNewValue().toString().matches(".*[a-zA-Z].*")) {
            Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setHeaderText("Veuillez saisir des lettres");
            alert.showAndWait();
            return true;
        }
        return false;
    }
public boolean validator(){
        String msg="";
            if(idTitre.getText().length()==0){
            msg+=" champ titre vide ";
               idTitre.setStyle("-fx-border-color: red ; -fx-border-width: 2px");
            new animatefx.animation.Shake(idTitre).play();
           
        }
         if( idPrix.getText().length()==0){
            msg+=" Champ prix vide ";
            idPrix.setStyle("-fx-border-color: red ; -fx-border-width: 2px");
            new animatefx.animation.Shake(idPrix).play();
           
        }
        if( idPrix.getText().matches(".*[a-zA-Z].*")){
            msg+=" le prix doit etre numerique";
            idPrix.setStyle("-fx-border-color: red ; -fx-border-width: 2px");
            new animatefx.animation.Shake(idPrix).play();
           
        }
        
          if(idDescription.getText().length()==0){
            msg+=" Champ description vide, ";
             idDescription.setStyle("-fx-border-color: red ; -fx-border-width: 2px");
            new animatefx.animation.Shake(idDescription).play();
        }
          
              if(idImage.getText().length()==0){
            msg+=" Champ image vide, \n";
             idImage.setStyle("-fx-border-color: red ; -fx-border-width: 2px");
            new animatefx.animation.Shake(idImage).play();
           
        }
                   if(idPlace.getText().length()==0){
            msg+=" Champ contenu vide, \n";
             idPlace.setStyle("-fx-border-color: red ; -fx-border-width: 2px");
            new animatefx.animation.Shake(idPlace).play();
           
        }
              if(idPlace.getText().matches(".*[a-zA-Z].*")){
            msg+=" Nombre des places doit etre numerique, \n";
           
        }
                    if(idInscrit.getText().length()==0){
            msg+=" Champ contenu vide, \n";
              idInscrit.setStyle("-fx-border-color: red ; -fx-border-width: 2px");
            new animatefx.animation.Shake(idInscrit).play();
           
        }
                                 if(idInscrit.getText().matches(".*[a-zA-Z].*")){
            msg+=" Nombre des inscrits doit etre numerique, \n";
           
        }
                   if(idDatedeb.getValue().toString().isEmpty()){
            msg+=" champ titre vide ";
               idDatedeb.setStyle("-fx-border-color: red ; -fx-border-width: 2px");
            new animatefx.animation.Shake(idDatedeb).play();
           
        }
                                 
       
                                 
        if(! idTitre.getText().matches(".*[a-zA-Z].*")){
            msg+=" titre doit etre en lettre, ";
           
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
        
        if(validator() && checkDate()) {
         EvenementCrud evt = new EvenementCrud();
          Evenement e1 = new Evenement( idTitre.getText(),idDescription.getText(), idImage.getText(), Double.parseDouble(idPrix.getText()),
                    Date.valueOf(idDatedeb.getValue()), Date.valueOf(idDateFin.getValue()), Integer.parseInt(idPlace.getText()), Integer.parseInt(idInscrit.getText()));

        evt.ajouterEvent(e1);
        JOptionPane.showMessageDialog(null, "Evenement ajouté");
      
                
                   Notifications notificationBuilder = Notifications.create()
                    .title("Notification")
                    .text("Evenement ajouté !")
                    .hideAfter(javafx.util.Duration.seconds(5))
                    .position(Pos.TOP_CENTER);
            notificationBuilder.show();
            
          /*   FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherEvenement.fxml"));
                Parent root;
            try {
                root = loader.load();
                 idTitre.getScene().setRoot(root);
                
                AfficherEvenementController apc = loader.getController();
                apc.setTitre(idTitre.getText());
                
            } catch (IOException ex) {
                Logger.getLogger(EvenementController.class.getName()).log(Level.SEVERE, null, ex);
            }*/
               
                
               /* Parent root;
                try {
                    root = FXMLLoader.load(getClass().getResource("Evenement.fxml"));
                      ajout.getScene().setRoot(root);
                } catch (IOException ex) {
                    Logger.getLogger(EvenementController.class.getName()).log(Level.SEVERE, null, ex);
                }*/
           
          
    }}
  

    @FXML
    private void supprimerEvenement(ActionEvent event) {
          new animatefx.animation.Tada(sp).play();
            Alert alert = new Alert(AlertType.CONFIRMATION);
              alert.setTitle("Confirmation du suppresion");
    alert.setHeaderText("Voulez vous supprimer cet evenement ?");
    
   
           // alert.getDialogPane().setContentText("确定选择");
             Optional<ButtonType> option = alert.showAndWait();
              if (option.get() == ButtonType.OK) {
         evt.supprimerEvent(id);
          Notifications notificationBuilder = Notifications.create()
                    .title("Notification")
                    .text("Evenement supprimé avec succé!")
                    .hideAfter(javafx.util.Duration.seconds(5))
                    .position(Pos.TOP_CENTER);
            notificationBuilder.show();
      } 
   
            
          //JOptionPane.showMessageDialog(null, "Voulez vous supprimer cet evenement ? ");
         
      
            
    }

    @FXML
    private void modifierEvenement(ActionEvent event) {
        String titre = colTitre.getText();
        String image = colImage.getText();
        String description = colDescription.getText();
        //Double prix =colPrix.getText();
       // Date datedeb= colDateDeb.getText().toLocalDate();
       // Date datefin= colDatefin.getText().toLocalDate();
       // Integer nbPlace=idPlace.getNbplace();
        //Integer nbinscrit=idPlace.getNbinscrit();
                
 


       // Evenement e = new Evenement(titre, image,description,prix,datedeb,datefin,nbPlace,nbinscrit);


       // evt.modifier(id,e);

    }

    @FXML
    private void refreshTable(MouseEvent event) {
       

           list.clear();
           list.addAll(evt.afficherEvents());

          tableid.setItems(list);
          triTitre.setDisable(false);
          idplace.setDisable(false);
          
          triTitre.setSelected(false);
             idplace.setSelected(false);
             
             idTitre.clear();
             idDescription.clear();
             idPrix.clear();
             idPlace.clear();
             idInscrit.clear();
             idDateFin.getEditor().clear();
             idDatedeb.getEditor().clear();
             idImage.clear();
                 btnSupprimer.setDisable(true);
     btnModifier.setDisable(true);

    
    }
    
   
    
    @FXML
    private void recherche() {
        cherch.setOnKeyReleased(e -> {
            cherch.textProperty().addListener((observable, oldValue, newValue) -> {
                filter.setPredicate(Evenement -> {
                    if (newValue == null || newValue.isEmpty()) {
                        return true;
                    }
                    String lowerCaseFilter = newValue.toLowerCase();
                    if (Evenement.getTitre().toLowerCase().contains(lowerCaseFilter)) {
                        return true;
                    } 
                    
                    else if(Evenement.getDescription().toLowerCase().contains(lowerCaseFilter)){
                        return true;
                    }
                     else if(String.valueOf(Evenement.getPrix()).toLowerCase().contains(lowerCaseFilter)){
                        return true;
                    }
                        else if(String.valueOf(Evenement.getNbplace()).toLowerCase().contains(lowerCaseFilter)){
                        return true;
                    }
                        else if(String.valueOf(Evenement.getNbinscrit()).toLowerCase().contains(lowerCaseFilter)){
                        return true;
                    }
                              else if(String.valueOf(Evenement.getDate_debut()).toLowerCase().contains(lowerCaseFilter)){
                        return true;
                    }
                        else if(String.valueOf(Evenement.getDate_fin()).toLowerCase().contains(lowerCaseFilter)){
                        return true;
                    }
                             else if(String.valueOf(Evenement.getId()).toLowerCase().contains(lowerCaseFilter)){
                        return true;
                    }
                    else {
                        return false;
                    }
                });

            });
            sort.comparatorProperty().bind(tableid.comparatorProperty());
            tableid.setItems(sort);
        });
    }

    @FXML
    private void triplace(ActionEvent event) {
         EvenementCrud evt = new EvenementCrud();
        Evenement t=new Evenement();
      List<Evenement> a = evt.TRIPlace();;
         colId.setCellValueFactory(new PropertyValueFactory<>("id"));
         colTitre.setCellValueFactory(new PropertyValueFactory<>("titre"));
         colImage.setCellValueFactory(new PropertyValueFactory<>("image"));
          colDescription.setCellValueFactory(new PropertyValueFactory<>("description"));


        
             colPrix.setCellValueFactory(new PropertyValueFactory<>("prix"));

        colDateDeb.setCellValueFactory(new PropertyValueFactory<>("date_debut"));
        colDatefin.setCellValueFactory(new PropertyValueFactory<>("date_fin"));
        colPlace.setCellValueFactory(new PropertyValueFactory<>("nbplace"));
        colInscrit.setCellValueFactory(new PropertyValueFactory<>("nbinscrit"));


         ObservableList<Evenement> data=FXCollections.observableArrayList(a);
         tableid.getItems().setAll(a);            
         System.out.println(a);
         triTitre.setDisable(true);
    }
     private boolean checkDate(){
        if (idDatedeb.getValue().isBefore(LocalDate.now())){
            Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setTitle("Error!");
            alert.setContentText("Date doit etre superieur a la date d'aujordhui !");
            alert.show();
            return false;
        }
        return true;
    }

    @FXML
    private void trititre(ActionEvent event) {
        EvenementCrud evt = new EvenementCrud();
        Evenement t=new Evenement();
      List<Evenement> a = evt.TRITitre();;
         colId.setCellValueFactory(new PropertyValueFactory<>("id"));
         colTitre.setCellValueFactory(new PropertyValueFactory<>("titre"));
         colImage.setCellValueFactory(new PropertyValueFactory<>("image"));
          colDescription.setCellValueFactory(new PropertyValueFactory<>("description"));


        
             colPrix.setCellValueFactory(new PropertyValueFactory<>("prix"));

        colDateDeb.setCellValueFactory(new PropertyValueFactory<>("date_debut"));
        colDatefin.setCellValueFactory(new PropertyValueFactory<>("date_fin"));
        colPlace.setCellValueFactory(new PropertyValueFactory<>("nbplace"));
        colInscrit.setCellValueFactory(new PropertyValueFactory<>("nbinscrit"));


         ObservableList<Evenement> data=FXCollections.observableArrayList(a);
         tableid.getItems().setAll(a);            
         System.out.println(a);
          idplace.setDisable(true);
    }
    
    
    
    
    
    
    @FXML
    private void CreatePDF(ActionEvent event) throws SQLException, IOException, DocumentException {

        try {
            
            Document doc = new Document();
            PdfWriter.getInstance(doc, new FileOutputStream("C:/pdf/example.pdf"));
            doc.open();
            doc.add(new Paragraph(" "));
            Font font = new Font(Font.FontFamily.TIMES_ROMAN, 28, Font.UNDERLINE, BaseColor.BLACK);
            Paragraph p = new Paragraph("Evenements ", font);
            p.setAlignment(Element.ALIGN_CENTER);
            doc.add(p);
            doc.add(new Paragraph(" "));
            doc.add(new Paragraph(" "));

            PdfPTable tabpdf = new PdfPTable(4);
            tabpdf.setWidthPercentage(100);

            PdfPCell cell;
            cell = new PdfPCell(new Phrase("Titre", FontFactory.getFont("Times New Roman")));
            cell.setHorizontalAlignment(Element.ALIGN_CENTER);
            cell.setBackgroundColor(BaseColor.WHITE);
            tabpdf.addCell(cell);

            cell = new PdfPCell(new Phrase("Prix", FontFactory.getFont("Times New Roman")));
            cell.setHorizontalAlignment(Element.ALIGN_CENTER);
            cell.setBackgroundColor(BaseColor.WHITE);
            tabpdf.addCell(cell);

            cell = new PdfPCell(new Phrase("Date Debut", FontFactory.getFont("Times New Roman")));
            cell.setHorizontalAlignment(Element.ALIGN_CENTER);
            cell.setBackgroundColor(BaseColor.WHITE);
            tabpdf.addCell(cell);

            cell = new PdfPCell(new Phrase("Date Fin", FontFactory.getFont("Times New Roman")));
            cell.setHorizontalAlignment(Element.ALIGN_CENTER);
            cell.setBackgroundColor(BaseColor.WHITE);
            tabpdf.addCell(cell);

            Connection conn;
            conn = DataSource.getInstance().getCnx();
            String req = "SELECT * FROM evenement";
            PreparedStatement pst = conn.prepareStatement(req);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                cell = new PdfPCell(new Phrase(rs.getString("titre"), FontFactory.getFont("Times New Roman", 11)));
                cell.setHorizontalAlignment(Element.ALIGN_CENTER);
                cell.setBackgroundColor(BaseColor.WHITE);
                tabpdf.addCell(cell);

                cell = new PdfPCell(new Phrase(rs.getString("prix"), FontFactory.getFont("Times New Roman", 11)));
                cell.setHorizontalAlignment(Element.ALIGN_CENTER);
                cell.setBackgroundColor(BaseColor.WHITE);
                tabpdf.addCell(cell);

                cell = new PdfPCell(new Phrase(rs.getString("date_debut"), FontFactory.getFont("Times New Roman", 11)));
                cell.setHorizontalAlignment(Element.ALIGN_CENTER);
                cell.setBackgroundColor(BaseColor.WHITE);
                tabpdf.addCell(cell);

                cell = new PdfPCell(new Phrase(rs.getString("date_fin"), FontFactory.getFont("Times New Roman", 11)));
                cell.setHorizontalAlignment(Element.ALIGN_CENTER);
                cell.setBackgroundColor(BaseColor.WHITE);
                tabpdf.addCell(cell);
            }
            doc.add(tabpdf);
            JOptionPane.showMessageDialog(null, "Fichier PDF crée !");
            doc.close();
            Desktop.getDesktop().open(new File("C:/pdf/example.pdf"));
        } catch (DocumentException e) {
            System.out.println("ERROR PDF");
            System.out.println(Arrays.toString(e.getStackTrace()));
            System.out.println(e.getMessage());
        }

    }

    @FXML
  void afficherstat(ActionEvent event) throws IOException {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("Statistic.fxml"));
        Parent root = loader.load();
        ajout.getScene().setRoot(root);
    }

    @FXML
    private void ActionDashboard(ActionEvent event) throws IOException {
        FXMLLoader loader=new FXMLLoader(getClass().getResource("DashboardAdmin.fxml"));
                Parent Ajouter = (Parent)loader.load();
  
                Scene scene = new Scene(Ajouter);     
                Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
                window.setScene(scene);
                window.show();
    }

    
    
    
    
    
    
    
    
}
