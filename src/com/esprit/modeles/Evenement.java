/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
import java.util.Date;

 * and open the template in the editor.
 */
package com.esprit.modeles;

import java.sql.Date;

/**
 *
 * @author a
 */
public class Evenement {
    
    private int id;
    private String titre;
    private String image;
    private String description;
    private double prix;
    private Date date_debut;
    private Date date_fin;
    private int nbplace;
    private int nbinscrit;

    public Evenement(String titre, String image, String description, double prix, Date date_debut, Date date_fin, int nbplace, int nbinscrit) {
        this.titre = titre;
        this.image = image;
        this.description = description;
        this.prix = prix;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
        this.nbplace = nbplace;
        this.nbinscrit = nbinscrit;
    }

    public Evenement(int id, String titre, String image, String description, double prix, Date date_debut, Date date_fin, int nbplace, int nbinscrit) {
        this.id = id;
        this.titre = titre;
        this.image = image;
        this.description = description;
        this.prix = prix;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
        this.nbplace = nbplace;
        this.nbinscrit = nbinscrit;
    }
    

  

    public Evenement(){
    };

    
    public int getId() {
        return id;
    }

    public Evenement(int nbplace, int nbinscrit) {
        this.nbplace = nbplace;
        this.nbinscrit = nbinscrit;
    }

  

    public void setId(int id) {
        this.id = id;
    }

    public int getNbplace() {
        return nbplace;
    }

    public void setNbplace(int nbplace) {
        this.nbplace = nbplace;
    }

    public int getNbinscrit() {
        return nbinscrit;
    }

    public void setNbinscrit(int nbinscrit) {
        this.nbinscrit = nbinscrit;
    }

    public String getTitre() {
        return titre;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public double getPrix() {
        return prix;
    }

    public void setPrix(double prix) {
        this.prix = prix;
    }

    public Date getDate_debut() {
        return date_debut;
    }

    public void setDate_debut(Date date_debut) {
        this.date_debut = date_debut;
    }

    public Date getDate_fin() {
        return date_fin;
    }

    public void setDate_fin(Date date_fin) {
        this.date_fin = date_fin;
    }

    @Override
    public String toString() {
        return "Evenement{" + "id=" + id + ", titre=" + titre + ", image=" + image + ", description=" + description + ", prix=" + prix + ", date_debut=" + date_debut + ", date_fin=" + date_fin + ", nbplace=" + nbplace + ", nbinscrit=" + nbinscrit + '}';
    }

    public Evenement(String titre, String image) {
        this.titre = titre;
        this.image = image;
    }

  

    public Evenement(String titre, String image, String description) {
        this.titre = titre;
        this.image = image;
        this.description = description;
    }

   
  
   
    
}
