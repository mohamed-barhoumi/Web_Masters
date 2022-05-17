/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.services;


import com.esprit.modeles.Reponse;
import com.esprit.utils.DataSource;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author MSI
 */
public class ReponseCRUD {
        Connection cnx = DataSource.getInstance().getCnx();

        
        public void ajouter(Reponse rep){
        try {
            String requete2 ="INSERT INTO reponse (id_rep,titre_rep,description_rep) "
                    +"VALUES (?,?,?)";
            PreparedStatement pst = new DataSource ().getCnx().prepareStatement(requete2);
            pst.setInt(1, rep.getId_rep());
            pst.setString(2, rep.getTitre_rep());
            pst.setString(3, rep.getDescription_rep());
            pst.executeUpdate();
            System.out.println("Votre Reponse est ajoutée !");

            
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());

        }
    }
        
        
        public List<Reponse> GetAll(){
        List<Reponse> myList = new ArrayList<>();
        try {

            String requete3 = "SELECT * FROM Reponse";
            Statement st = new DataSource().getCnx().createStatement();
            ResultSet rs = st.executeQuery(requete3);
            while( rs.next()){
                Reponse Rep = new Reponse ();
                Rep.setId_rep(rs.getInt("id_rep"));
                Rep.setTitre_rep(rs.getString("titre_rep"));
                Rep.setDescription_rep(rs.getString("description_rep"));
                myList.add(Rep);
   
            }
            
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
  
         return myList;

    }
    
    public void supprimer(int id_rep) {
        try {
            String req = "DELETE FROM `Reponse` WHERE id_rep = " + id_rep;
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Reponse supprimée !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }
    
    
    public void modifier(Reponse R) {
        try {
            String req = "UPDATE `Reponse` SET `titre_rep` = '" + R.getTitre_rep() + "', `description_rep` = '" + R.getDescription_rep() + "' WHERE `Reponse`.`id_rep` = " + R.getId_rep();
            Statement st;
            st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Reponse modifiée !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    
    
    
    }   
}
