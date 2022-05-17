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
import com.esprit.modeles.Produit;
import com.esprit.utils.DataSource;
import java.util.stream.Collectors;

/**
 *
 * @author ACER
 */
public class ServicePoduit implements IService2 <Produit>{

    Connection cnx = DataSource.getInstance().getCnx();
    
    @Override
    public void ajouter(Produit t) {
        System.out.println(t);
        try {
            String req = "INSERT INTO `produits` (`nom_produit`, `nb_pts`, `id_categorie`, `image`, `quantite`) VALUES (?, ?, ?,?,?)";
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, t.getNom_produit());
            ps.setInt(2, t.getNb_pts());
            ps.setString(3, t.getId_categorie());
            ps.setString(4, t.getImage());
            ps.setInt(5, t.getQuantite());
            ps.executeUpdate();
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        } 
    }

    @Override
    public Produit getById(int id) {
        Produit p =null ;
        String req="Select * from produits where id_produit = " + id + "";
        try {
            Statement st=cnx.createStatement();
            ResultSet rs=st.executeQuery(req);
            if(rs.next())
            p=new Produit(rs.getInt(1),rs.getString(2), rs.getInt(3), rs.getString(4),rs.getString(5), rs.getInt(6));
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return p;
    }

    @Override
    public List<Produit> getAll() {
        List<Produit> list = new ArrayList<>();
        try {
            String req = "Select * from produits";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(req);
            while(rs.next()){
                Produit c = new Produit(rs.getInt(1),rs.getString(2),rs.getInt(3),rs.getString(4),rs.getString(5), rs.getInt(6));
                list.add(c);
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;
    }

    @Override
    public boolean modifier(Produit t) {

        try {
            String req ="update produits set nom_produit = ? , nb_pts = ? , id_categorie = ?, image = ?, quantite = ? where id_produit = ? ";
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, t.getNom_produit());
            ps.setInt(2, t.getNb_pts());
            ps.setString(3, t.getId_categorie());
            ps.setString(4, t.getImage());
            ps.setInt(5, t.getQuantite());
            ps.setInt(6, t.getId_produit());
            ps.executeUpdate();
            System.out.println("Produit modifier");
            ps.close();
      
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return false;

    }

    @Override
    public boolean supprimer(Produit t) {

        try {
            String req="delete from produits where id_produit= ? ";   
            PreparedStatement ps=cnx.prepareStatement(req);
            ps.setInt(1,t.getId_produit());
            ps.executeUpdate();
            System.out.println("categprie produit");
        } catch (SQLException ex) {
          System.err.println(ex.getMessage());  
        }
        return false;
    }

    @Override
    public List<Produit> getAllByUser(int t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public Produit findById(int t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

     public List<Produit> Recherche(String nom_produit) {
         System.out.println(nom_produit);
         return 
      getAll().stream().filter(p->p.getNom_produit().equals(nom_produit)).collect(Collectors.toList());
      
    }

    @Override
    public int ajouterr(Produit t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    
}
