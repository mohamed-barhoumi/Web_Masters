/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import com.esprit.utils.DataSource;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.chart.BarChart;
import javafx.scene.chart.XYChart;
import javafx.scene.control.Button;
import javafx.scene.layout.AnchorPane;
import javafx.scene.paint.Color;
import javafx.scene.chart.CategoryAxis;
import javafx.scene.chart.NumberAxis;

/**
 * FXML Controller class
 *
 * @author Mega Pc
 */
public class StatController implements Initializable {
 Connection cnx = DataSource.getInstance().getCnx();
    @FXML
    private BarChart<String,Integer> barChart;
    @FXML
    private AnchorPane rootPane7;
    @FXML
    private Button Revenirbtn;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
     try {
         
         
         
         
         String req = "SELECT etat, id_commande FROM commande";
         Statement st = cnx.createStatement();
         ResultSet rs = st.executeQuery(req);
         XYChart.Series<String,Integer> series = new XYChart.Series<>();
         while(rs.next()){
           series.getData().add(new XYChart.Data<>(rs.getString("etat"),rs.getInt("id_commande")));
         }
         barChart.getData().add(series);
     } catch (SQLException ex) {
         Logger.getLogger(StatController.class.getName()).log(Level.SEVERE, null, ex);
     }
     
    
    }    

    @FXML
    private void ActionRevenirbtn(ActionEvent event) throws IOException {
         AnchorPane pane =  FXMLLoader.load(getClass().getResource("../views/CommandeFront.fxml"));
        rootPane7.getChildren().setAll(pane);
    }
    
    
}
