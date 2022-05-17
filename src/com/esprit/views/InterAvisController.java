/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import com.esprit.modeles.Avis;
import com.esprit.modeles.Blog;
import java.io.IOException;
import java.net.URL;
import java.sql.Date;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Stage;
import javax.swing.JOptionPane;
import com.esprit.services.BlogCRUD;
import com.esprit.services.AvisCRUD;
import javafx.scene.layout.AnchorPane;

/**
 * FXML Controller class
 *
 * @author SBS
 */
public class InterAvisController implements Initializable {

    @FXML
    private TableView<Avis> tab;
    @FXML
    private TableColumn<Avis, String> rating_tab;
    @FXML
    private TableColumn<Avis, String> commentaire_tab;
    @FXML
    private TextField commentaire_txt;

    AvisCRUD agd = new AvisCRUD();
    BlogCRUD bcd = new BlogCRUD();
    List<Avis> l = agd.GetAvis();
    List<Blog> b = bcd.GetBlog();
    Avis a = new Avis();
    @FXML
    private ComboBox<Integer> id_c;
    @FXML
    private ComboBox<Integer> rating_c1;
    List<Integer> idb_i = new ArrayList();

    ObservableList<Integer> ratings = FXCollections.observableArrayList(1, 2, 3, 4, 5);
    ObservableList<Integer> IDbs = null;
    ObservableList<Integer> IDs = null;
    @FXML
    private ComboBox<Integer> idb_c;
    @FXML
    private TableColumn<Avis, String> id_tab;
    @FXML
    private TableColumn<Avis, String> blog_tab;
    @FXML
    private AnchorPane rootPane;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        idb_i.clear();
        for (Blog bl : b) {
            // System.out.println(bl);
            idb_i.add(bl.getId());

        }
        IDbs = FXCollections.observableArrayList(idb_i);
        idb_i.clear();
        for (Avis a : l) {
            System.out.println(a);

            idb_i.add(a.getId());

        }
        IDs = FXCollections.observableArrayList(idb_i);
        idb_c.getItems().removeAll(idb_c.getItems());
        idb_c.setItems(IDbs);
        idb_c.getSelectionModel();

        id_c.getItems().removeAll(id_c.getItems());
        id_c.setItems(IDs);
        id_c.getSelectionModel();

        rating_c1.getItems().removeAll(rating_c1.getItems());
        rating_c1.setItems(ratings);
        rating_c1.getSelectionModel();

        id_tab.setCellValueFactory(new PropertyValueFactory<Avis, String>("id"));
        rating_tab.setCellValueFactory(new PropertyValueFactory<Avis, String>("rating"));
        commentaire_tab.setCellValueFactory(new PropertyValueFactory<Avis, String>("commentaire"));
        blog_tab.setCellValueFactory(new PropertyValueFactory<Avis, String>("blog_id"));
        tab.getItems().setAll(l);

        a.setRating(2);
        a.setCommentaire(commentaire_txt.getText());

    }

    @FXML
    private void Add(ActionEvent event) {
        if (idb_c.getValue() != null && rating_c1.getValue() != null && !commentaire_txt.getText().equals("")) {
            //  System.out.println(commentaire_txt.getText());
            a.setCommentaire(commentaire_txt.getText());
            a.setRating(rating_c1.getValue());

            agd.addAvis(a, idb_c.getValue());
            Refresh();
        } else {
            JOptionPane.showMessageDialog(null, "ID blog ou rating ou commentaire est vide!", "Input error ", JOptionPane.ERROR_MESSAGE);
        }
    }

    @FXML
    private void Update(ActionEvent event) {
        if (idb_c.getValue() != null && rating_c1.getValue() != null && !commentaire_txt.getText().equals("")) {
            if (id_c.getValue() != null) {
                System.out.println(id_c.getValue());
                a.setCommentaire(commentaire_txt.getText());
                a.setRating(rating_c1.getValue());
                a.setId(id_c.getValue());
                agd.modifierAvis(a);
                Refresh();
            } else {
                JOptionPane.showMessageDialog(null, "ID est null!", "Input error ", JOptionPane.ERROR_MESSAGE);
            }
        } else {
            JOptionPane.showMessageDialog(null, "ID blog ou rating ou commentaire est vide!!", "Input error ", JOptionPane.ERROR_MESSAGE);
        }

    }

    @FXML
    private void Delete(ActionEvent event) {
        try {
            agd.deleteAvis(id_c.getValue());
            Refresh();
        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, "ID est null!", "Input error ", JOptionPane.ERROR_MESSAGE);

        }
    }

    private void goBlog(ActionEvent event) throws IOException {
        FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("AjouterAvis.fxml"));
        Parent root1 = (Parent) fxmlLoader.load();
        Stage stage = new Stage();
        stage.setScene(new Scene(root1));
        stage.show();
    }

    private void Refresh() {
        l = agd.GetAvis();
        tab.getItems().setAll(l);

        idb_i.clear();
        for (Avis a : l) {
            System.out.println(a);

            idb_i.add(a.getId());

        }
        IDs = FXCollections.observableArrayList(idb_i);
        id_c.getItems().removeAll(id_c.getItems());
        id_c.setItems(IDs);
        id_c.getSelectionModel();

    }

    @FXML
    private void ActionDashboard(ActionEvent event) throws IOException {
          AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/DashboardAdmin.fxml"));
        rootPane.getChildren().setAll(pane); 
    }
}

