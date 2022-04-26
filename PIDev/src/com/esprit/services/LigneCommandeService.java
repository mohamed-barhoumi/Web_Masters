/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.services;

import com.esprit.modeles.LigneCommande;
import com.esprit.utils.DataSource;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author amiraaissaoui
 */
public class LigneCommandeService  implements  IService<LigneCommande>{
  Connection cnx = DataSource.getInstance().getCnx();

    @Override
    public void ajouter(LigneCommande c) {
      
             try {
            String req = "INSERT INTO `lignecommande`(`id_produit`, `quantite`,`id_commande`,`nb_pts`) VALUES (?,?,?,?)";
            PreparedStatement ps = cnx.prepareStatement(req);

            ps.setInt(1, c.getId_produit());
            ps.setInt(2, c.getQuantite());
       
            ps.setInt(3, c.getId_commande());
            ps.setInt(4, c.getNb_pts());
            ps.executeUpdate();
            System.out.println("Ligne commande ajoutée");
            ResultSet rs = ps.getGeneratedKeys();

            if (rs.next()) {
                
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }

        
    }
        
        
        
   
 
    @Override
    public LigneCommande getById(int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<LigneCommande> getAll() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
    
     public List<LigneCommande> getByCommande(int idCmd) {
       List<LigneCommande> list = new ArrayList<>();
         String sql = "select * from lignecommande l inner join produits p on p.id_produit=l.id_produit where l.id_commande =" +idCmd;
         
      try {
          PreparedStatement statement = cnx.prepareStatement(sql);
          
          ResultSet res = statement.executeQuery();
          while(res.next()) {
              LigneCommande ligne = new LigneCommande();
              ligne.setNom_produit(res.getString("nom_produit"));
              ligne.setQuantite(res.getInt("quantite"));
              ligne.setNb_pts(res.getInt("nb_pts"));
              list.add(ligne);
          }
      } catch (SQLException ex) {
          Logger.getLogger(LigneCommandeService.class.getName()).log(Level.SEVERE, null, ex);
      }
         
      
      return list;
         
    }

    @Override
    public boolean modifier(LigneCommande t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public boolean supprimer(LigneCommande t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<LigneCommande> getAllByUser(int t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public LigneCommande findById(int t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
}
