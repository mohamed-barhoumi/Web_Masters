/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.services;


import com.esprit.modeles.Reclamation;
import com.esprit.utils.DataSource;
import java.security.Provider.Service;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Comparator;
import java.util.List;
import java.util.stream.Collectors;

/**
 *
 * @author MSI
 */
public class ReclamationCRUD  {
    
    Connection cnx = DataSource.getInstance().getCnx();
    
    public void ajouterReclamation(){
        try {
            String requete ="INSERT INTO reclamation (titre,reclamation) "
                    +"VALUES ('reclamation1','reclamation à traiter')";
            
            Statement st = new DataSource ().getCnx().createStatement();
            st.executeUpdate(requete);
            System.out.println("Recalamtion ajoutée !");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
          
        }
    
    public void ajouter(Reclamation R){
        try {
            String requete2 ="INSERT INTO reclamation (titre,reclamation) "
                    +"VALUES (?,?)";
            PreparedStatement pst = new DataSource ().getCnx().prepareStatement(requete2);
            pst.setString(1, R.getTitre());
            pst.setString(2, R.getReclamation());
            pst.executeUpdate();
            System.out.println("Votre Recalamtion est ajoutée !");

            
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());

        }
    }
    
    public List<Reclamation> GetAll(){
        List<Reclamation> myList = new ArrayList<>();
        try {

            String requete3 = "SELECT * FROM Reclamation";
            Statement st = new DataSource().getCnx().createStatement();
            ResultSet rs = st.executeQuery(requete3);
            while( rs.next()){
                Reclamation R = new Reclamation ();
                R.setId(rs.getInt("id"));
                R.setTitre(rs.getString("titre"));
                R.setReclamation(rs.getString("reclamation"));
                myList.add(R);
   
            }
            
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
  
         return myList;

    }
    
    public void supprimer(int id) {
        try {
            String req = "DELETE FROM `Reclamation` WHERE id = " + id;
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Reclamation supprimée !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }
    
    
    public void modifier(Reclamation R) {
        try {
            String req = "UPDATE `Reclamation` SET `titre` = '" + R.getTitre() + "', `reclamation` = '" + R.getReclamation() + "' WHERE `Reclamation`.`id` = " + R.getId();
            Statement st;
            st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Reclamation modifiée !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    } 
    
//    public long recherche1()
//    {  List<Reclamation> s=GetAll();
//        //return this.afficher().stream().filter(x->(x.getNom() == null ? s.getNom() == null : x.getNom().equals(s.getNom()))).collect(Collectors.toList());
//       return s.stream().filter(x->x.getTitre().equals("titre1")).count();
//      
//    }
//      public long recherche2()
//    {  List<Reclamation> s=GetAll();
//        //return this.afficher().stream().filter(x->(x.getNom() == null ? s.getNom() == null : x.getNom().equals(s.getNom()))).collect(Collectors.toList());
//       return s.stream().filter(x->x.getTitre().equals("titre2")).count();
//      
//    }
//       public long recherche3()
//    {  List<Reclamation> s=GetAll();
//        //return this.afficher().stream().filter(x->(x.getNom() == null ? s.getNom() == null : x.getNom().equals(s.getNom()))).collect(Collectors.toList());
//   
//       return s.stream().filter(x->x.getTitre().equals("titre3")).count();
//    }
//       
    
     public  List<Reclamation> TRITitre(){
      List<Reclamation> list1= new ArrayList<>();
         List<Reclamation> list2= GetAll();
         list1= list2.stream().sorted((o1,o2)->o1.getTitre().compareTo(o2.getTitre())).collect(Collectors.toList());
return list1;               
     }

}
