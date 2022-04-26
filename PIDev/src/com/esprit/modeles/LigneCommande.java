/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.modeles;

/**
 *
 * @author amiraaissaoui
 */
public class LigneCommande {
       private int id_lignecommande;
    private int id_produit;
    private int quantite;
  
    private int id_commande;
 
   private int nb_pts;
   
   private String nom_produit;

    public LigneCommande() {
    }
   
   

    public LigneCommande(int id_lignecommande, int id_produit, int quantite, int id_commande, int nb_pts) {
        this.id_lignecommande = id_lignecommande;
        this.id_produit = id_produit;
        this.quantite = quantite;
        this.id_commande = id_commande;
        this.nb_pts = nb_pts;
    }

    public LigneCommande(int id_produit, int quantite, int id_commande, int nb_pts) {
        this.id_produit = id_produit;
        this.quantite = quantite;
        this.id_commande = id_commande;
        this.nb_pts = nb_pts;
    }

    public int getId_lignecommande() {
        return id_lignecommande;
    }

    public void setId_lignecommande(int id_lignecommande) {
        this.id_lignecommande = id_lignecommande;
    }

    public int getId_produit() {
        return id_produit;
    }

    public void setId_produit(int id_produit) {
        this.id_produit = id_produit;
    }

    public int getQuantite() {
        return quantite;
    }

    public void setQuantite(int quantite) {
        this.quantite = quantite;
    }

    public int getId_commande() {
        return id_commande;
    }

    public void setId_commande(int id_commande) {
        this.id_commande = id_commande;
    }

    public int getNb_pts() {
        return nb_pts;
    }

    public void setNb_pts(int nb_pts) {
        this.nb_pts = nb_pts;
    }

    @Override
    public String toString() {
        return "LigneCommande{" + "id_lignecommande=" + id_lignecommande + ", id_produit=" + id_produit + ", quantite=" + quantite + ", id_commande=" + id_commande + ", nb_pts=" + nb_pts + '}';
    }

    public LigneCommande(int id_lignecommande) {
        this.id_lignecommande = id_lignecommande;
    }

    public String getNom_produit() {
        return nom_produit;
    }

    public void setNom_produit(String nom_produit) {
        this.nom_produit = nom_produit;
    }
    
    
    

}
