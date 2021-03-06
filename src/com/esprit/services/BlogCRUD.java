/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.services;

import com.esprit.modeles.Blog;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;
import com.esprit.utils.DataSource;
import java.sql.Connection;

/**
 *
 * @author Lenovo
 */
public class BlogCRUD {
Connection cnx = DataSource.getInstance().getCnx();
    public void addBlog(Blog b) {
        try {
            String request = "INSERT INTO Blog (title,description,date,image) VALUES(?,?,?,?) ";
            PreparedStatement pst = cnx.prepareStatement(request);
            pst.setString(1, b.getTitle());
            pst.setString(2, b.getDescription());

            pst.setDate(3, b.getDate());
            pst.setString(4, b.getImage());

            pst.executeUpdate();
            System.out.println("Blog ajouté! ");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }

    }

    public void modifierBlog(Blog b) {
        try {
            String req = "UPDATE blog Set title = '"+b.getTitle()+"',description = '"+b.getDescription()+"', date = '"+b.getDate()+"'  where title = '"+ b.getTitle()+"'" ;
            PreparedStatement pst = cnx.prepareStatement(req);
            pst.executeUpdate(req);
            System.out.println("Blog updated !");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }
    
        public void deleteBlog(String title) {
        try {
            String request = "DELETE FROM blog WHERE title = ?  ";
            PreparedStatement pst = cnx.prepareStatement(request);

            pst.setString(1, title);
            pst.executeUpdate();
            System.out.println("Blog supprimé! ");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }
    public List<Blog> GetBlog() {
        List<Blog> myList = new ArrayList();
        try {

            String request = "SELECT * FROM blog";

            Statement st = (Statement) DataSource.getInstance().getCnx().createStatement();
            ResultSet res = st.executeQuery(request);
            while (res.next()) {
                Blog b = new Blog();
                b.setId(res.getInt(1));
                b.setTitle(res.getString(2));
                b.setDescription(res.getString(3));
                b.setDate(res.getDate(4));
                b.setImage(res.getString(5));
 
                myList.add(b);
            }

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return myList;
    }
        

}

