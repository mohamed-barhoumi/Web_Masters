/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import com.esprit.modeles.Avis;
import com.esprit.modeles.Blog;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.sql.Date;
import java.time.Instant;
import java.time.LocalDate;
import java.time.ZoneId;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.Set;
import java.util.TreeSet;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.util.stream.Collectors;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.InputMethodEvent;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javax.swing.JOptionPane;
import com.esprit.services.BlogCRUD;
import com.esprit.utils.DataSource;
import com.esprit.utils.Mailing;
import javafx.scene.layout.AnchorPane;

/**
 * FXML Controller class
 *
 * @author Lenovo
 */
public class AjouterAvisController implements Initializable {

    @FXML
    private TableView<Blog> tab;
    @FXML
    private TableColumn<Blog, String> title_tab;
    @FXML
    private TableColumn<Blog, String> desciption_tab;
    @FXML
    private TableColumn<Blog, String> date_tab;
    @FXML
    private TextField titre_txt;
    @FXML
    private TextField description_txt;
    @FXML
    private DatePicker date;

    BlogCRUD bgd = new BlogCRUD();
    List<Blog> l = bgd.GetBlog();
    Blog b = new Blog();
    @FXML
    private TableColumn<Blog, String> im_tab;
    @FXML
    private ComboBox<String> sort;
    ObservableList<String> sort_list = FXCollections.observableArrayList("Titre", "date", "Description");

    File selectedFile;
    @FXML
    private Button Image_btn;
    @FXML
    private TextField rech;
    @FXML
    private AnchorPane rootPane;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        title_tab.setCellValueFactory(new PropertyValueFactory<Blog, String>("title"));
        desciption_tab.setCellValueFactory(new PropertyValueFactory<Blog, String>("description"));
        date_tab.setCellValueFactory(new PropertyValueFactory<Blog, String>("date"));
        im_tab.setCellValueFactory(new PropertyValueFactory<Blog, String>("image"));

        sort.getItems().removeAll(sort.getItems());
        sort.setItems(sort_list);
        sort.getSelectionModel();
        tab.getItems().setAll(l);

    }

    @FXML
    private void Add(ActionEvent event) {
        if (!titre_txt.getText().equals("") && !description_txt.getText().equals("") && date.getValue() != null) {
            // System.out.println();
            Date ld = new Date(127, 2, 12);
            //  System.out.println(date.getValue());
            b.setTitle(titre_txt.getText());
            b.setDescription(description_txt.getText());
            //     System.out.println(datee);
            b.setDate(ld);

            try {
                Path from;
                Path to;

                from = Paths.get(selectedFile.toURI());
                to = Paths.get("C:\\Users\\elbarhoumi\\OneDrive\\Desktop\\PIDev 2 - Copy - Copy\\PIDev" + b.getTitle() + ".png");
                Files.copy(from, to);
                b.setImage(to.toString());

            } catch (Exception e) {
                JOptionPane.showMessageDialog(null, e, "Input error ", JOptionPane.ERROR_MESSAGE);

            }
            //  b.setTitle();
            bgd.addBlog(b);
            Image_btn.setText("");
            JOptionPane.showMessageDialog(null, "Blog ajouté", "Ajouté ", JOptionPane.INFORMATION_MESSAGE);
            Refresh();
        } else {
            JOptionPane.showMessageDialog(null, "Titre ou description ou date est vide!", "Input error ", JOptionPane.ERROR_MESSAGE);
        }

    }

    @FXML
    private void Update(ActionEvent event) {
        if (!titre_txt.getText().equals("") && !description_txt.getText().equals("") && date.getValue() != null) {
            Date ld = new Date(127, 2, 12);
            b.setTitle(titre_txt.getText());
            b.setDescription(description_txt.getText());
            b.setDate(ld);
            bgd.modifierBlog(b);
            Refresh();
        } else {
            JOptionPane.showMessageDialog(null, "Titre ou description ou date est vide!", "Input error ", JOptionPane.ERROR_MESSAGE);
        }
    }

    @FXML
    private void Delete(ActionEvent event) {
        try {
            if (!titre_txt.getText().equals("")) {
                bgd.deleteBlog(titre_txt.getText());
                Refresh();
            } else {
                JOptionPane.showMessageDialog(null, "Titre est vide!", "Input error ", JOptionPane.ERROR_MESSAGE);
            }

        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, "Titre existe!", "Input error ", JOptionPane.ERROR_MESSAGE);

        }
    }
//InterAvis.fxml
 

    private void Refresh() {
        l = bgd.GetBlog();
        tab.getItems().setAll(l);

    }

    @FXML
    private void SendMail(ActionEvent event) {
        String cnc = "";
        for (Blog b : l) {
            cnc = cnc + "|Titre : " + b.getTitle() + " |Description : " + b.getDescription() + " |Date : " + b.getDate() + "\n";
        }
        try {
            Mailing.sendMail("walaedinelouati@gmail.com", cnc, "Liste Blogs");
            JOptionPane.showMessageDialog(null, "Mail Envoyeé!", "Mail ", JOptionPane.INFORMATION_MESSAGE);
        } catch (Exception ex) {
            Logger.getLogger(AjouterAvisController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void Sorter(ActionEvent event) {
        TreeSet<Blog> ts = null;
        if (sort.getValue().equals("Titre")) {
            ts = l.stream().collect(Collectors.toCollection(() -> new TreeSet<>((a, b) -> a.getTitle().compareTo(b.getTitle()))));

        } else {
            ts = l.stream().collect(Collectors.toCollection(() -> new TreeSet<>((a, b) -> a.getDescription().compareTo(b.getDescription()))));
        }
        tab.getItems().setAll(ts);
    }

    @FXML
    private void addImage(ActionEvent event) {
        FileChooser fc = new FileChooser();
        selectedFile = fc.showOpenDialog(null);

        if (selectedFile != null) {
            Image_btn.setText(selectedFile.getName());
        }
    }


    private void rechercher(ActionEvent event) {
                List<Blog> br = new ArrayList();
        for(Blog bl : l)
        {
         if(bl.getTitle() == rech.getText()) 
             br.add(bl);
         tab.getItems().setAll(br);
        }
    }

    @FXML
    private void recherche(ActionEvent event) {
                        List<Blog> br = new ArrayList();
                        if(!rech.getText().equals(""))
                        {
        for(Blog bl : l)
        {
         if(bl.getTitle().equals(rech.getText())) 
             br.add(bl);
         tab.getItems().setAll(br);
        }
                        }
                        else 
                            tab.getItems().setAll(l);
    }

    @FXML
    private void ActionDashboard(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/DashboardAdmin.fxml"));
        rootPane.getChildren().setAll(pane);  
    }

}
