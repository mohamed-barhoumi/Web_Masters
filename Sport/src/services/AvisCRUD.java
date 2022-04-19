/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import entities.Avis;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import utils.MyConnection;

/**
 *
 * @author Lenovo
 */
public class AvisCRUD {
    
     public void addAvis(Avis a, int blog_id) {
        try {
            String request = "INSERT INTO avis (rating,commentaire,blog_id) VALUES(?,?,?) ";
            PreparedStatement pst = MyConnection.getInstance().getCnx().clientPrepareStatement(request);
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
            PreparedStatement pst = MyConnection.getInstance().getCnx().clientPrepareStatement(req);

            pst.executeUpdate(req);
            System.out.println("Avis updated !");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }
    
       public void deleteAvis(int id) {
        try {
            String request = "DELETE FROM avis WHERE id = ?  ";
            PreparedStatement pst = (PreparedStatement) MyConnection.getInstance().getCnx().clientPrepareStatement(request);

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

            Statement st = (Statement) MyConnection.getInstance().getCnx().createStatement();
            ResultSet res = st.executeQuery(request);
            while (res.next()) {
                Avis a = new Avis();
                a.setId(res.getInt(1));
                a.setRating(res.getInt(2));
                a.setCommentaire(res.getString(3));
                
                myList.add(a);
            }

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return myList;
    }
         
}
