/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.services;


import com.esprit.modeles.Evenement;
import com.esprit.utils.DataSource;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.sql.Date;
import java.util.stream.Collectors;
import java.util.logging.Level;
import java.util.logging.Logger;


/**
 *
 * @author a
 */
public class EvenementCrud  implements IService<Evenement> {
       Connection cnx = DataSource.getInstance().getCnx();
    
    
    
    @Override
    public void ajouterEvent(Evenement e){
        
         try{
             String req="INSERT INTO evenement (`titre`, `image`, `description`, `prix`, `date_debut`, `date_fin`, `nbplace`, `nbinscrit`)"+"VALUES (?,?,?,?,?,?,?,?)";
        PreparedStatement pst1 = cnx.prepareStatement(req);
            pst1.setString(1,e.getTitre());
            pst1.setString(2,e.getImage());
            pst1.setString(3,e.getDescription());
            pst1.setDouble(4, e.getPrix());
            pst1.setDate(5, e.getDate_debut());
            pst1.setDate(6, e.getDate_fin());
            pst1.setInt(7, e.getNbplace());
            pst1.setInt(8, e.getNbinscrit()); 
            pst1.executeUpdate();
            System.out.println("Evenement Ajoutée");
        }
       
        catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        
       }
    

    
          public List<Evenement>afficherEvents() {
          List <Evenement> myList = new ArrayList<>();
              try{     
              
        
         String req2="SELECT * FROM evenement";
         Statement st=cnx.prepareStatement(req2);
         ResultSet rs=st.executeQuery(req2);
         while (rs.next()){
         Evenement e = new Evenement();
         e.setId(rs.getInt(1));
         e.setTitre(rs.getString("titre"));
         e.setImage(rs.getString("image"));
         e.setTitre(rs.getString("titre"));
       
         e.setDescription(rs.getString("description"));
         e.setPrix(rs.getDouble("prix"));
         e.setDate_debut(rs.getDate("date_debut"));
          e.setDate_fin(rs.getDate("date_fin"));
           e.setNbplace(rs.getInt("nbplace"));
         e.setNbinscrit(rs.getInt("nbinscrit"));
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
            String req = "DELETE FROM `evenement` WHERE id = " + id;
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Evenement supprimé !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }
 
    @Override
    public void modifierEvent(Evenement t) {
       try {
            String req="UPDATE INTO evenement (`titre`, `image`, `description`, `prix`, `date_debut`, `date_fin`, `nbplace`, `nbinscrit`)"+"VALUES (?,?,?,?,?,?,?,?)";
        PreparedStatement pst1 = cnx.prepareStatement(req);
            pst1.setString(1,t.getTitre());
            pst1.setString(2,t.getImage());
            pst1.setString(3,t.getDescription());
            pst1.setDouble(4, t.getPrix());
            pst1.setDate(5, t.getDate_debut());
            pst1.setDate(6, t.getDate_fin());
            pst1.setInt(7, t.getNbplace());
            pst1.setInt(8, t.getNbinscrit()); 
            pst1.executeUpdate();
            System.out.println("Evenement Ajoutée");

            pst1.executeUpdate();
            System.out.println("L'evenement est modifiée avec succés \n ");
        } catch (SQLException ex) {
            System.out.println("Erreur lors de la modification \n " + ex.getMessage());
        }
    }
    
     public void modifier(int id,Evenement t) {
       try {
            String req="UPDATE INTO evenement (`titre`, `image`, `description`, `prix`, `date_debut`, `date_fin`, `nbplace`, `nbinscrit`)"+"VALUES (?,?,?,?,?,?,?,?)";
        PreparedStatement pst1 = cnx.prepareStatement(req);
            pst1.setString(1,t.getTitre());
            pst1.setString(2,t.getImage());
            pst1.setString(3,t.getDescription());
            pst1.setDouble(4, t.getPrix());
            pst1.setDate(5, t.getDate_debut());
            pst1.setDate(6, t.getDate_fin());
            pst1.setInt(7, t.getNbplace());
            pst1.setInt(8, t.getNbinscrit()); 
            pst1.executeUpdate();
            System.out.println("Evenement Ajoutée");

            pst1.executeUpdate();
            System.out.println("L'evenement est modifiée avec succés \n ");
        } catch (SQLException ex) {
            System.out.println("Erreur lors de la modification \n " + ex.getMessage());
        }
    }

                 public  List<Evenement> TRIPlace(){
      List<Evenement> list1= new ArrayList<>();
         List<Evenement> list2= afficherEvents();
         
         list1= list2.stream().sorted((o1,o2)->o1.getNbplace()-o2.getNbplace()).collect(Collectors.toList());
return list1;               
     }
              public  List<Evenement> TRITitre(){
      List<Evenement> list1= new ArrayList<>();
         List<Evenement> list2= afficherEvents();
         
         list1= list2.stream().sorted((o1,o2)->o1.getTitre().compareTo(o2.getTitre())).collect(Collectors.toList());
return list1;               
     }
        
    
    

   
    public List<Evenement> afficherEvent() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

 public Evenement TrouverById(int id) {
        Evenement P = null;
        String Req = "select * from evenement where id=" + id + "";
        try {
            Statement st = cnx.createStatement();
            ResultSet rs=st.executeQuery(Req);

            while (rs.next()) {
                P = new Evenement(rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4), rs.getDouble(5), rs.getDate(6), rs.getDate(7), rs.getInt(8),rs.getInt(9));
             }
        } catch (SQLException ex) {
            Logger.getLogger(EvenementCrud.class.getName()).log(Level.SEVERE, null, ex);
        }
        return P;
    }

    @Override
    public void ajouter(Evenement t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public Evenement getById(int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Evenement> getAll() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public boolean modifier(Evenement t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public boolean supprimer(Evenement t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Evenement> getAllByUser(int t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public Evenement findById(int t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }


}
