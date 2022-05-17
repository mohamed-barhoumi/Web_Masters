/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.modeles;

import java.util.Objects;

/**
 *
 * @author ACER
 */
public class Produit {
    
    private int id_produit;
    private String nom_produit;
    private int nb_pts;
    private String id_categorie;
    private String image;
    private int quantite;

    public Produit() {
    }

    public Produit(int id_produit, String nom_produit, int nb_pts, String id_categorie, String image, int quantite) {
        this.id_produit = id_produit;
        this.nom_produit = nom_produit;
        this.nb_pts = nb_pts;
        this.id_categorie = id_categorie;
        this.image = image;
        this.quantite = quantite;
    }

    
    public Produit(String nom_produit, int nb_pts ,int quantite ) {
        this.nom_produit = nom_produit;
        this.nb_pts = nb_pts;
        this.quantite = quantite;
    }

    public Produit(String nom_produit, int nb_pts, String id_categorie, String image,int quantite) {
        this.nom_produit = nom_produit;
        this.nb_pts = nb_pts;
        this.id_categorie = id_categorie;
        this.image = image;
        this.quantite = quantite;
    }

    public Produit(int id_produit) {
        this.id_produit = id_produit;
    }

    
    public int getId_produit() {
        return id_produit;
    }

    public String getNom_produit() {
        return nom_produit;
    }

    public int getNb_pts() {
        return nb_pts;
    }

    public String getId_categorie() {
        return id_categorie;
    }

    
    public String getImage() {
        return image;
    }

    public int getQuantite() {
        return quantite;
    }
    
    public void setId_produit(int id_produit) {
        this.id_produit = id_produit;
    }

    public void setNom_produit(String nom_produit) {
        this.nom_produit = nom_produit;
    }

    public void setNb_pts(int nb_pts) {
        this.nb_pts = nb_pts;
    }

    public void setId_categorie(String id_categorie) {
        this.id_categorie = id_categorie;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public void setQuantite(int quantite) {
        this.quantite = quantite;
    }

    @Override
    public int hashCode() {
        int hash = 5;
        hash = 43 * hash + Objects.hashCode(this.nom_produit);
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final Produit other = (Produit) obj;
        if (!Objects.equals(this.id_produit, other.id_produit)) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "Produit{" + "id_produit=" + id_produit + ", nom_produit=" + nom_produit + ", nb_pts=" + nb_pts + ", id_categorie=" + id_categorie + ", image=" + image + ", quantite=" + quantite + '}';
    }

}
