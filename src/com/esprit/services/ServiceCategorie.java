/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.services;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import com.esprit.modeles.Categorie;
import com.esprit.utils.DataSource;

/**
 *
 * @author ACER
 */
public class ServiceCategorie implements IService2 <Categorie>{

    Connection cnx = DataSource.getInstance().getCnx();
    
    @Override
    public void ajouter(Categorie t) {
        try {
            String req = "INSERT INTO `categorie` (`nom_categorie`, `image`) VALUES (?, ?)";
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, t.getNom_categorie());
            ps.setString(2, t.getImage());
            ps.executeUpdate();
            System.out.println("Categorie ajouter");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        } 
        
    }

    @Override
    public Categorie getById(int id) {
    Categorie c =null ;
    String req="Select * from categorie where id_categorie = " + id + "";
        try {
            Statement st=cnx.createStatement();
            ResultSet rs=st.executeQuery(req);
            if(rs.next())
            c=new Categorie(rs.getInt(1),rs.getString(2), rs.getString(3));
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return c;    
    }

    @Override
    public List<Categorie> getAll() {
        List<Categorie> list = new ArrayList<>();
        try {
            String req = "Select * from categorie";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(req);
            while(rs.next()){
                Categorie c = new Categorie(rs.getInt(1),rs.getString(2),rs.getString(3));
                list.add(c);
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;
    }

    @Override
    public boolean modifier(Categorie t) {
   
        try {
            String req ="update categorie set nom_categorie = ? , image = ? where id_categorie = ? ";
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, t.getNom_categorie());
            ps.setString(2, t.getImage());
            ps.setInt(3, t.getId_categorie());
            ps.executeUpdate();
            System.out.println("categprie modifier");
            ps.close();
      
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return false;
    }

    @Override
    public boolean supprimer(Categorie t) {
        
        try {
            String req="delete from categorie where id_categorie= ? ";   
            PreparedStatement ps=cnx.prepareStatement(req);
            ps.setInt(1,t.getId_categorie());
            ps.executeUpdate();
            System.out.println("categprie supprimer");
        } catch (SQLException ex) {
          System.err.println(ex.getMessage());  
        }
        return false;

    }

    @Override
    public List<Categorie> getAllByUser(int t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public Categorie findById(int t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public int ajouterr(Categorie t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

   
    
}
