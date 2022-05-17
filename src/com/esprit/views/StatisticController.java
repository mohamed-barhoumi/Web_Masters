/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import com.esprit.utils.DataSource;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.chart.PieChart;
import javafx.scene.control.Button;
import javafx.scene.image.ImageView;
import java.awt.event.MouseEvent;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.animation.FadeTransition;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.chart.BarChart;
import javafx.scene.chart.PieChart;
import javafx.scene.chart.XYChart;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.image.ImageView;
import javafx.stage.Stage;


/**
 * FXML Controller class
 *
 * @author a
 */

/**
 * FXML Controller class
 *
 * @author Islem
 */
public class StatisticController implements Initializable {
  private Connection conn;
  @FXML
    private PieChart pieChart;
  @FXML
    private Button back;
//Calcul des statistiques des types des evenements
   private ObservableList data;
    @FXML
    private ImageView idLogo;
    @FXML
    private ImageView idLogo1;
    @FXML
    private ImageView idLogo11;
    public StatisticController(){
        conn = DataSource.getInstance().getCnx();
    }
   @Override
    public void initialize(URL url, ResourceBundle rb) {
          data = FXCollections.observableArrayList();
          try{
           String SQL = "SELECT count(*) /(select count(*) from evenement) from evenement where nbinscrit =0;";
            PreparedStatement ste = (PreparedStatement) conn.prepareStatement(SQL);
            ResultSet rs = ste.executeQuery();
            if(rs.next()){
                data.add(new PieChart.Data("Evenement khasra",rs.getDouble(1)));
            }
           //SQL = "SELECT count(*) from evenement WHERE titre='natation';";
           SQL = "SELECT count(*) /(select count(*) from evenement) from evenement where nbinscrit>0;";
            ste = (PreparedStatement) conn.prepareStatement(SQL);
            rs = ste.executeQuery();
            System.out.println(rs);
            if(rs.next()){
                data.add(new PieChart.Data("Evenement rebha",rs.getDouble(1)));
            }
            pieChart.setData(data);
          }catch(SQLException e){
              System.out.println("Error on DB connection");
          }
    }
//Bouton de retour
  @FXML
            void back(ActionEvent event) throws IOException {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("Evenement.fxml"));
        Parent root = loader.load(); 
        back.getScene().setRoot(root); }
}
//          ObservableList<PieChart.Data> pieChartData = FXCollections.observableArrayList();
//          System.out.println(pieChartData);
//        GererEv liv = new GererEv();
//        ArrayList<Ev> list = new ArrayList<>();
//        list = (ArrayList<Ev>) liv.afficher();
//
//        for (int i = 0; i < list.size(); i++) {
//            pieChartData.add(new PieChart.Data(list.get(i).getType_ev(), list.get(i).getAge_max()));    
//
//       }
//                pieChart.setData(pieChartData);
//      public void start(Stage stage) throws Exception {
//        //PIE CHART
//        PieChart pieChart = new PieChart();
//        buildData();
//        pieChart.getData().addAll(data);
//
//        //Main Scene
//        Scene scene = new Scene(pieChart);        
//
//        stage.setScene(scene);
//      }
//      
 


        
    
  
  
  
  
  


  

