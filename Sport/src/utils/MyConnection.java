/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package utils;

import com.mysql.jdbc.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;


public class MyConnection {
    public String url="jdbc:mysql://localhost:3306/jawek_sport";
    public String login ="root";
    public String pwd="";
    public Connection cnx;
    public static MyConnection instance;
    
    private MyConnection(){
        try {
            cnx = (Connection) DriverManager.getConnection(url,login,pwd);
            System.out.println("Connecté!");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    public Connection getCnx() {
        return cnx;
    }

    public static MyConnection getInstance() {
        if(instance == null)
            instance = new MyConnection();
        
        return instance;
    }
    
    
}
