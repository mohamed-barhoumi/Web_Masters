/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import entities.Blog;
import java.io.IOException;
import java.net.URL;
import java.sql.Date;
import java.time.LocalDate;
import java.util.List;
import java.util.ResourceBundle;
import java.util.Set;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Stage;
import services.BlogCRUD;

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

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        title_tab.setCellValueFactory(new PropertyValueFactory<Blog, String>("title"));
        desciption_tab.setCellValueFactory(new PropertyValueFactory<Blog, String>("description"));
        date_tab.setCellValueFactory(new PropertyValueFactory<Blog, String>("date"));

        tab.getItems().setAll(l);

    }

    @FXML
    private void Add(ActionEvent event) {
        Date ld = new Date(127, 2, 12);
        b.setTitle(titre_txt.getText());
        b.setDescription(description_txt.getText());
        b.setDate(ld);
        //  b.setTitle();
        bgd.addBlog(b);
    }

    @FXML
    private void Update(ActionEvent event) {
        Date ld = new Date(127, 2, 12);
        b.setTitle(titre_txt.getText());
        b.setDescription(description_txt.getText());
        b.setDate(ld);
        bgd.modifierBlog(b);
    }

    @FXML
    private void Delete(ActionEvent event) {
        bgd.deleteBlog(titre_txt.getText());
    }

    @FXML
    private void goAvis(ActionEvent event) throws IOException {
        FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("InterAvis.fxml"));
        Parent root1 = (Parent) fxmlLoader.load();
        Stage stage = new Stage();
        stage.setScene(new Scene(root1));
        stage.show();
    }

}
