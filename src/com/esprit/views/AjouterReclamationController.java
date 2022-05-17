/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import com.esprit.modeles.Reclamation;
import com.esprit.services.ReclamationCRUD;
import com.esprit.utils.DataSource;
import com.itextpdf.text.BaseColor;
import javafx.beans.binding.ObjectBinding;
import javafx.collections.transformation.SortedList;
import java.util.Comparator;

import java.awt.event.MouseEvent;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.time.Duration;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
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
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.chart.Chart;
import javafx.scene.chart.PieChart;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Pagination;
import javafx.scene.control.RadioButton;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.KeyEvent;
import javax.management.Notification;
import javax.swing.JOptionPane;
import org.controlsfx.control.Notifications;
import org.controlsfx.control.action.Action;
import org.controlsfx.tools.Utils;
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
import java.io.File;
import java.io.FileOutputStream;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.Arrays;
import javafx.scene.Scene;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;


/**
 * FXML Controller class
 *
 * @author MSI
 */
public class AjouterReclamationController implements Initializable {

    @FXML
    private TextField tfTitre;
    @FXML
    private TextField tfReclamation;
    @FXML
    private Button btnAjouter;
    @FXML
    private TableColumn<?, ?> colId;
    @FXML
    private TableColumn<?, ?> colTitre;
    @FXML
    private TableColumn<?, ?> colReclamation;
    @FXML
    private TableView<Reclamation> tableid;

    ObservableList list = FXCollections.observableArrayList();
    
    FilteredList<Reclamation> filter = new FilteredList<>(list, e -> true);
    
    SortedList<Reclamation> sort = new SortedList<>(filter);
    
    ReclamationCRUD rec = new ReclamationCRUD ();
    


    int id;
    
     @FXML
    private Button btnModifier;
    @FXML
    private Button btnSupprimer;
    @FXML
    private Button actualiser;
    @FXML
    private TextField cherch;
    @FXML
    private RadioButton triTitre;
    @FXML
    private Pagination pagination;
//    private final List<Reclamation> data = createData();    
    private final static int rowsPerPage = 5;  
    private final static int dataSize = 100;

     public void loadDataReclamation(){

         list.clear();
         list.addAll(rec.GetAll());

         colId.setCellValueFactory(new PropertyValueFactory<>("id"));
         colTitre.setCellValueFactory(new PropertyValueFactory<>("titre"));
         colReclamation.setCellValueFactory(new PropertyValueFactory<>("reclamation"));
         tableid.setItems(list);

     }
     
    /**
     * Initializes the controller class.
     */
   
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        loadDataReclamation();     
//        pagination.setPageFactory(this::createPage);    

        tableid.getSelectionModel().selectedItemProperty().addListener(
                (observable, oldValue, newValue)
                -> {

                    if(newValue!=null){
                          System.out.println(newValue);

                          id=((Reclamation) newValue).getId();
                      populateInputs((Reclamation) newValue);
               }

        });
        
//        Chart.setTitre("Titre"); 
//        Reclamation r =new Reclamation();
//        Chart.getData().setAll(new PieChart.Data("titre1", r.recherche1()), new PieChart.Data("titre2", r.recherche2()),  
//                new PieChart.Data("titre3", r.recherche3())); 
//        GetAll(); 
   
        
    }    
    
//    private Node createPage(int pageIndex) {
//       int fromIndex = pageIndex * rowsPerPage;
//        int toIndex = Math.min(fromIndex + rowsPerPage, data.size());
//        tableid.setItems(FXCollections.observableArrayList(data.subList(fromIndex, toIndex)));
//        return tableid;
//    }
   
    public void  populateInputs(Reclamation Reclamation){

         tfTitre.setText(Reclamation.getTitre());

         tfReclamation.setText(Reclamation.getReclamation());

    } 
    
    @FXML
    private void ajouterReclamation(ActionEvent event) {
       if (tfTitre.getText().isEmpty() || tfReclamation.getText().isEmpty()) {
            Alert a = new Alert(Alert.AlertType.ERROR, "Titre ou reclamation invalide(s)", ButtonType.OK);
            a.showAndWait();
        } else {
           String titre = tfTitre.getText() ;
           String reclamation = tfReclamation.getText();
           
           Reclamation r = new Reclamation (titre, reclamation);
           ReclamationCRUD rc = new ReclamationCRUD();
           rc.ajouter(r);
           
           Alert a = new Alert(Alert.AlertType.INFORMATION, "Réclamation ajoutée !", ButtonType.OK);
           a.showAndWait();
           
           FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherReclamation.fxml"));
           Parent root;
           try {
               root = loader.load();
               
               tfTitre.getScene().setRoot(root);
               
               AfficherReclamationController arc = loader.getController();
               arc.setTitre(tfTitre.getText());
               arc.setReclamation(tfReclamation.getText());
               
           } catch (IOException ex) {
                    System.out.print("Error"+ex.getMessage());
           }
           
        }
       
       Notifications notificationBuilder;
        notificationBuilder = notificationBuilder = Notifications.create()
                .title("Sccées !")
                .text("Réclamation ajoutée avec succées !!!! ")
                .graphic(null)
                .hideAfter(javafx.util.Duration.seconds(5))
                .position(Pos.TOP_RIGHT)
                .onAction(new EventHandler<ActionEvent>(){
                    @Override
                    public void handle(ActionEvent event) {
                        System.out.println("Clicked on notification");
                    }
                });
            notificationBuilder.showConfirm();
  
    }

    public boolean validator(){
        String msg="";
       
        if(tfTitre.getText().length()==0){
            msg+=" Champ Titre vide, ";
           
        }
          
              if(tfReclamation.getText().length()==0){
            msg+=" Champ reclamation vide, \n";
           
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
    private void modifierReclamation(ActionEvent event) {
        if(validator()){
        String titre = tfTitre.getText();
        String reclamation = tfReclamation.getText();
        Reclamation r = new Reclamation(titre, reclamation);
        rec.modifier(r);
             } 
    }

    @FXML
    private void supprimerReclamation(ActionEvent event) {
            rec.supprimer(id);
            JOptionPane.showMessageDialog(null, "Réclamation supprimée");
    }

    @FXML
    private void refreshTable(javafx.scene.input.MouseEvent event) {
            list.clear();
            list.addAll(rec.GetAll());

            tableid.setItems(list);
            triTitre.setSelected(false);

    }

    @FXML
    private void recherche() {
            cherch.textProperty().addListener((observable, oldValue, newValue) -> {
                filter.setPredicate(Reclamation -> {
                    if (newValue == null || newValue.isEmpty()) {
                        return true;
                    }
                    String lowerCaseFilter = newValue.toLowerCase();
                    if (Reclamation.getTitre().toLowerCase().contains(lowerCaseFilter)) {
                        return true;
                    }
                    if (Reclamation.getReclamation().toLowerCase().contains(lowerCaseFilter)) {
                        return true;
                    } 
                    else {
                        return false;
                    }
                });
            });
            sort.comparatorProperty().bind(tableid.comparatorProperty());
            tableid.setItems(sort);
    }


    @FXML
    private void triTitre(ActionEvent event) {
        ReclamationCRUD rec = new ReclamationCRUD();
        Reclamation r=new Reclamation();
        List<Reclamation> a = rec.TRITitre();
         colId.setCellValueFactory(new PropertyValueFactory<>("id"));
         colTitre.setCellValueFactory(new PropertyValueFactory<>("titre"));
         colReclamation.setCellValueFactory(new PropertyValueFactory<>("reclamation"));

         ObservableList<Reclamation> data=FXCollections.observableArrayList(a);
         tableid.getItems().setAll(a);            
         System.out.println(a);
    
    }

//    private List<Reclamation> createData() {
//        List<Reclamation> data = new ArrayList<>(dataSize);
//
//       data = tableid.getItems();
//        return data;
//    }

        @FXML
    private void CreatePDF(ActionEvent event) throws SQLException, IOException, DocumentException {

        try {
            
            Document doc = new Document();
            PdfWriter.getInstance(doc, new FileOutputStream("C:/pdf/example.pdf"));
            doc.open();
            doc.add(new Paragraph(" "));
            Font font = new Font(Font.FontFamily.TIMES_ROMAN, 28, Font.UNDERLINE, BaseColor.BLACK);
            Paragraph p = new Paragraph("Reclamation ", font);
            p.setAlignment(Element.ALIGN_CENTER);
            doc.add(p);
            doc.add(new Paragraph(" "));
            doc.add(new Paragraph(" "));

            PdfPTable tabpdf = new PdfPTable(3);
            tabpdf.setWidthPercentage(100);

            PdfPCell cell;
             cell = new PdfPCell(new Phrase("ID", FontFactory.getFont("Times New Roman")));
            cell.setHorizontalAlignment(Element.ALIGN_CENTER);
            cell.setBackgroundColor(BaseColor.WHITE);
            tabpdf.addCell(cell);
            
            cell = new PdfPCell(new Phrase("Titre", FontFactory.getFont("Times New Roman")));
            cell.setHorizontalAlignment(Element.ALIGN_CENTER);
            cell.setBackgroundColor(BaseColor.WHITE);
            tabpdf.addCell(cell);

            cell = new PdfPCell(new Phrase("Reclamation", FontFactory.getFont("Times New Roman")));
            cell.setHorizontalAlignment(Element.ALIGN_CENTER);
            cell.setBackgroundColor(BaseColor.WHITE);
            tabpdf.addCell(cell);

            Connection cnx;
            cnx = DataSource.getInstance().getCnx();
            String req = "SELECT * FROM reclamation";
            PreparedStatement pst = cnx.prepareStatement(req);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                cell = new PdfPCell(new Phrase(rs.getString("id"), FontFactory.getFont("Times New Roman", 11)));
                cell.setHorizontalAlignment(Element.ALIGN_CENTER);
                cell.setBackgroundColor(BaseColor.WHITE);
                tabpdf.addCell(cell);
                
                cell = new PdfPCell(new Phrase(rs.getString("titre"), FontFactory.getFont("Times New Roman", 11)));
                cell.setHorizontalAlignment(Element.ALIGN_CENTER);
                cell.setBackgroundColor(BaseColor.WHITE);
                tabpdf.addCell(cell);

                cell = new PdfPCell(new Phrase(rs.getString("reclamation"), FontFactory.getFont("Times New Roman", 11)));
                cell.setHorizontalAlignment(Element.ALIGN_CENTER);
                cell.setBackgroundColor(BaseColor.WHITE);
                tabpdf.addCell(cell);
            }
            doc.add(tabpdf);
            JOptionPane.showMessageDialog(null, "Le fichier PDF est crée !");
            doc.close();
            Desktop.getDesktop().open(new File("C:/pdf/example.pdf"));
        } catch (DocumentException e) {
            System.out.println("ERROR PDF");
            System.out.println(Arrays.toString(e.getStackTrace()));
            System.out.println(e.getMessage());
        }

    }
    
    private void retour(ActionEvent event) {
         try {

            Node node = (Node) event.getSource();
            Stage stage = (Stage) node.getScene().getWindow();

            stage.close();
            Scene scene = new Scene(FXMLLoader.load(getClass().getResource("Acceuil.fxml")));
            stage.setScene(scene);
            stage.show();

        } catch (IOException ex) {
            System.err.println(ex.getMessage());
        }
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
    
    
 

  
    
    
    
    
