/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.services;

import com.esprit.modeles.Avis;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import com.esprit.utils.DataSource;
import java.sql.Connection;

/**
 *
 * @author Lenovo
 */
public class AvisCRUD {
        Connection cnx = DataSource.getInstance().getCnx();

     public void addAvis(Avis a, int blog_id) {
        try {
            String request = "INSERT INTO avis (rating,commentaire,blog_id) VALUES(?,?,?) ";
            PreparedStatement pst = cnx.prepareStatement(request);
            pst.setInt(1, a.getRating());
            pst.setString(2, a.getCommentaire());

            pst.setInt(3, blog_id);

            pst.executeUpdate();
            System.out.println("Avis ajouté!");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }

    }

    public void modifierAvis(Avis a) {
        try {
            String req = "UPDATE avis Set rating = '"+a.getRating()+"',commentaire = '"+a.getCommentaire()+"'  where id = "+ a.getId() ;
            PreparedStatement pst = cnx.prepareStatement(req);

            pst.executeUpdate(req);
            System.out.println("Avis updated !");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }
    
       public void deleteAvis(int id) {
        try {
            String request = "DELETE FROM avis WHERE id = ?  ";
            PreparedStatement pst = cnx.prepareStatement(request);

            pst.setInt(1, id);
            pst.executeUpdate();
            System.out.println("Avis supprimé! ");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }
       
    public List<Avis> GetAvis() {
        List<Avis> myList = new ArrayList();
        try {

            String request = "SELECT * FROM avis";

            Statement st = (Statement) DataSource.getInstance().getCnx().createStatement();
            ResultSet res = st.executeQuery(request);
            while (res.next()) {
                Avis a = new Avis();
                a.setId(res.getInt(1));
                a.setRating(res.getInt(2));
                a.setCommentaire(res.getString(3));
                a.setBlog_id(res.getInt(4));
                myList.add(a);
            }

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return myList;
    }
         
}
