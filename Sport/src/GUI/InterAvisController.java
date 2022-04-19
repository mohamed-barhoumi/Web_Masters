/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import entities.Avis;
import entities.Blog;
import java.io.IOException;
import java.net.URL;
import java.sql.Date;
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
import services.AvisCRUD;
import services.BlogCRUD;

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
    List<Avis> l = agd.GetAvis();
    Avis a = new Avis();
    @FXML
    private ComboBox<Integer> id_c;
    @FXML
    private ComboBox<Integer> rating_c1;

    ObservableList<Integer> ratings = FXCollections.observableArrayList(1,2,3,4,5);
    ObservableList<Integer> IDs = FXCollections.observableArrayList(1,2,3,4,5);
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        id_c.getItems().removeAll(id_c.getItems());
        id_c.setItems(IDs);
        id_c.getSelectionModel();
        
                rating_c1.getItems().removeAll(rating_c1.getItems());
        rating_c1.setItems(ratings);
        rating_c1.getSelectionModel();
        
        rating_tab.setCellValueFactory(new PropertyValueFactory<Avis, String>("rating"));
        commentaire_tab.setCellValueFactory(new PropertyValueFactory<Avis, String>("commentaire"));

        tab.getItems().setAll(l);

        a.setRating(2);
        a.setCommentaire(commentaire_txt.getText());

    }

    @FXML
    private void Add(ActionEvent event) {
        a.setCommentaire(commentaire_txt.getText());
        a.setRating(rating_c1.getValue());
        agd.addAvis(a, 0);
        
    }

    @FXML
    private void Update(ActionEvent event) {
                a.setCommentaire(commentaire_txt.getText());
        a.setRating(rating_c1.getValue());
        a.setId(id_c.getValue());
        agd.modifierAvis(a);
    }

    @FXML
    private void Delete(ActionEvent event) {
        agd.deleteAvis(id_c.getValue());
    }

    @FXML
    private void goBlog(ActionEvent event) throws IOException {
        FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("AjouterAvis.fxml"));
        Parent root1 = (Parent) fxmlLoader.load();
        Stage stage = new Stage();
        stage.setScene(new Scene(root1));
        stage.show();
    }

}
