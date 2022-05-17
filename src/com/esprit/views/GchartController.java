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
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Side;
import javafx.scene.chart.PieChart;
import javafx.scene.control.Label;
import javafx.scene.paint.Color;


/**
 * FXML Controller class
 *
 * @author MOLKA
 */
import javafx.scene.control.Tooltip;
import javafx.scene.layout.AnchorPane;
public class GchartController implements Initializable {
    @FXML
     private PieChart piechart;
    @FXML
    private AnchorPane rootPane;
    private Statement st;
    private ResultSet rs;
    private Connection cnx;
        ObservableList<PieChart.Data>data=FXCollections.observableArrayList();

    /**
     * Initializes the controller class.
     */
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
       cnx=DataSource.getInstance().getCnx();
        stat();
    }    
      private void stat()
    {
          
           
      try {
           System.out.println("stat method runing");
          String query = "SELECT DISTINCT id_produit, SUM(quantite) AS qte FROM LigneCommande\n" +
"GROUP BY id_produit " ;
       //SELECT id_produit, COUNT(*) FROM `LigneCommande` 
             PreparedStatement PreparedStatement = cnx.prepareStatement(query);
             rs = PreparedStatement.executeQuery();
            
                     
            while (rs.next()){               
               //data.add(new PieChart.Data(rs.getString("id_produit"),rs.getInt("COUNT(*)")));
               data.add(new PieChart.Data(rs.getString("id_produit"),rs.getInt("qte")));
            } 
            

        
        
        } catch (SQLException ex) {
            //manquant
        }
        
       
       PieChart pieChart = new PieChart(data);
        piechart.setTitle("Statistiques des produits commandés");
        piechart.setLegendSide(Side.BOTTOM);
        piechart.setData(data);
        piechart.animatedProperty();
        
        
        pieChart.getData().forEach(d -> {
    String percentage = String.format("%.1f", (d.getPieValue()));
            System.out.println(percentage);
    Tooltip toolTip = new Tooltip(percentage);
    Tooltip.install(d.getNode(), toolTip);
        });
       
    
    }
      
      
      
       @FXML
    private void ActionList(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/CommandeAdmin.fxml"));
        rootPane.getChildren().setAll(pane); 
    }
    
       @FXML
    private void ActionDashboard(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/DashboardAdmin.fxml"));
        rootPane.getChildren().setAll(pane); 
    }
    


}