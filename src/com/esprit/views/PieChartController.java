/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import com.esprit.modeles.Produit;
import com.esprit.services.ServicePoduit;
import java.net.URL;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.chart.PieChart;

/**
 * FXML Controller class
 *
 * @author asus
 */
public class PieChartController implements Initializable {

    @FXML
    private PieChart pieChart;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        ServicePoduit sp = new ServicePoduit();
        
                List<Produit> lProduit = new ArrayList<>();
        ObservableList<PieChart.Data> pieChartData =FXCollections.observableArrayList();
        PieChart pie = new PieChart();
        lProduit=sp.getAll();
        for (Produit p :lProduit){
            
            //System.out.println(p.getNom_produit()+"quantite="+p.getQuantite());
            PieChart.Data slice = new PieChart.Data(p.getNom_produit(), p.getQuantite());
            pieChartData.add(slice);
             pieChart.setData(pieChartData);
        }
    }    
    
}
