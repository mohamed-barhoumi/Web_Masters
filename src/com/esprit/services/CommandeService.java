/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.services;
import com.esprit.modeles.Commande;
import com.esprit.utils.DataSource;
import java.awt.print.PrinterException;
import java.awt.print.PrinterJob;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.stream.Collectors;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;


public abstract class CommandeService implements IService2<Commande> {
    PreparedStatement ps;

    Connection cnx = DataSource.getInstance().getCnx();

   
    
    @Override
    public int ajouterr(Commande c) {
        try {
            String req = "INSERT INTO `commande`(`total_points`, `id_user`,`date_commande`,`adresse`,`etat`) VALUES (?,?,?,?,?)";
            PreparedStatement ps = cnx.prepareStatement(req, PreparedStatement.RETURN_GENERATED_KEYS);

     
            ps.setInt(1, c.getTotal_points());
            ps.setInt(2, c.getId_user());
            ps.setDate(3, new java.sql.Date(c.getDate_commande().getTime()));
            ps.setString(4, c.getAdresse());
            ps.setString(5, c.getEtat());
            ps.executeUpdate();
            System.out.println("Commande Ajoutée");
            ResultSet rs = ps.getGeneratedKeys();

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
  String sql = "SELECT MAX(id_commande) AS id from commande";
        int commande = 0;
        try {
            Statement stmt = cnx.createStatement();
            ResultSet rs = stmt.executeQuery(sql);
            if (rs.next()) {
                commande = rs.getInt("id");
            }
        } catch (SQLException e) {
            System.out.print(e);
        }

        return (commande);
        
    }

    @Override
    public Commande getById(int id) {
        String sql = "select * from commande where id_commande='" + id + "'";
        Commande commande = null;
        try {
            Statement stmt = cnx.createStatement();
            ResultSet rs = stmt.executeQuery(sql);
            if (rs.next()) {
                commande = new Commande(rs.getInt(1), rs.getInt(2), rs.getInt(3), rs.getDate(4));
            }
        } catch (SQLException e) {
            System.out.print(e);
        }

        return (commande);
    }

    public List<Commande> getAllByUser() {
        List<Commande> list2 = new ArrayList<>();
        try {
            String req2 = "SELECT id_user,total_pts, date_commande FROM `commande`";
            Statement st1 = cnx.createStatement();
            ResultSet rs = st1.executeQuery(req2);
            while (rs.next()) {
                Commande c = new Commande(rs.getInt(1), rs.getInt(2), rs.getInt(3), rs.getDate(3));
                list2.add(c);
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list2;
    }

    @Override
    public List<Commande> getAll() {
        List<Commande> list = new ArrayList<>();
        try {
            String req = "SELECT * FROM commande c inner join user u on c.id_user=u.id_user ";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(req);
            while (rs.next()) {
                Commande c = new Commande(rs.getInt("id_commande"), rs.getInt("total_points"), rs.getInt("id_user"), rs.getDate("date_commande"), rs.getString("adresse"), rs.getString("etat"));
               
                c.setNomPrenom(rs.getString("nom_user") + " "+ rs.getString("prenom_user"));
                list.add(c);
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;
    }
  
    public ObservableList<Commande> getCommandeUser(int id) {
        ObservableList<Commande> list = FXCollections.observableArrayList();
        try {
            String req = "SELECT * FROM `commande` where id_user = " + id;
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(req);
            while (rs.next()) {
                Commande c = new Commande(rs.getInt("id_commande"), rs.getInt("total_points"), rs.getInt("id_user"), rs.getDate("date_commande"), rs.getString("adresse"), rs.getString("etat"));
                list.add(c);
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;
    }

    @Override
    public boolean modifier(Commande c) {
        String req = "update commande set total_points = ? , id_user = ? , date_commande = ?, etat= ?  where id_commande = ? ";
        try {
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setInt(1, c.getTotal_points());

            ps.setInt(2, c.getId_user());
            ps.setDate(3, new java.sql.Date(c.getDate_commande().getTime()));
          
            ps.setInt(5, c.getId_commande());
              ps.setString(4, c.getEtat());
            ps.executeUpdate();
            System.out.println("Commande modifiée");
            ps.close();

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return false;
    }

    @Override
    public boolean supprimer(Commande c) {
        String req = "delete from commande where id_commande = ?";
        try {
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setInt(1, c.getId_commande());
            ps.executeUpdate();
            System.out.println("Commande supprimée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return false;
    }

    public int rowCommande() {
        Connection cnx = null;
        Statement st = null;
        ResultSet rs = null;
        ObservableList<Commande> liste = FXCollections.observableArrayList();
        String requette = "SELECT * FROM commande";
        int i = 0;

        try {
            cnx = DataSource.getInstance().getCnx();
            st = cnx.createStatement();
            rs = st.executeQuery(requette);
            Commande commande;
            while (rs.next()) {
                i = i + 1;
            }

        } catch (SQLException ex) {
            ex.printStackTrace();
        } finally {
            if (rs != null) {
                try {
                    rs.close();
                } catch (SQLException e) {
                    /* Ignored */
                }
            }
            if (st != null) {
                try {
                    st.close();
                } catch (SQLException e) {
                    /* Ignored */
                }
            }
        }
        return i;

    }
    
        public void print() {
// Récupère un PrinterJob
	PrinterJob job = PrinterJob.getPrinterJob();
	// Définit son contenu à imprimer
	job.defaultPage();
	// Affiche une boîte de choix d'imprimante
	if (job.printDialog()) {
	    try {
		// Effectue l'impression
		job.print();
	    } catch (PrinterException ex) {
		ex.printStackTrace();
	    }
	}
    }

    public ObservableList<Commande> getCommande(String text) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public  List<Commande> TRITitre(){
      List<Commande> list1= new ArrayList<>();
         List<Commande> list2= getAll();
         
         list1= list2.stream().sorted((o1,o2)->o1.getAdresse().compareTo(o2.getAdresse())).collect(Collectors.toList());
return list1;               
     }

    @Override
    public List<Commande> getAllByUser(int t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public Commande findById(int t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }


    
    
    
   
}
