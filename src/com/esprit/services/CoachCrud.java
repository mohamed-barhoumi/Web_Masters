/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.services;

import com.esprit.modeles.Coach;
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
 * @author a
 */
public class CoachCrud implements IService<Coach> {
 Connection cnx = DataSource.getInstance().getCnx();
    @Override
    public void ajouterEvent(Coach t) {
        try{
             String req="INSERT INTO coach (`nom`, `prenom`, `photo`, `numero`)"+"VALUES (?,?,?,?)";
        PreparedStatement pst1 = cnx.prepareStatement(req);
            pst1.setString(1,t.getNom());
            pst1.setString(2,t.getPrenom());
            pst1.setString(3,t.getPhoto());
            pst1.setDouble(4, t.getNumero());
           
            pst1.executeUpdate();
            System.out.println("Coach Ajouté");
        }
       
        catch (SQLException ex) {
            System.err.println(ex.getMessage());
        } 
    }

          public List<Coach>afficher() {
          List <Coach> myList = new ArrayList<>();
              try{     
              
        
         String req2="SELECT * FROM coach";
         Statement st=cnx.prepareStatement(req2);
         ResultSet rs=st.executeQuery(req2);
         while (rs.next()){
         Coach e = new Coach();
         e.setId(rs.getInt(1));
         e.setNom(rs.getString("nom"));
         e.setPrenom(rs.getString("prenom"));
         e.setPhoto(rs.getString("photo"));
       
         e.setNumero(rs.getInt("numero"));
         
         myList.add(e);
         
         }
              
         } catch(SQLException ex){
    System.err.println(ex.getMessage());
}
return myList;
          }
    @Override
    public void supprimerEvent(int id) {
        try {
            String req = "DELETE FROM `coach` WHERE id = " + id;
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Coach supprimé !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public void modifierEvent(Coach t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Coach> afficherEvent() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void ajouter(Coach t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public Coach getById(int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Coach> getAll() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public boolean modifier(Coach t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public boolean supprimer(Coach t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Coach> getAllByUser(int t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public Coach findById(int t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
}
