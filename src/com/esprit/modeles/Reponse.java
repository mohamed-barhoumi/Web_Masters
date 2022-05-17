/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.modeles;

/**
 *
 * @author MSI
 */
public class Reponse {
    private int id_rep;
    private String titre_rep;
    private String description_rep;

    public Reponse(String id_rep, String titre_rep, String description_rep) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    
    public int getId_rep() {
        return id_rep;
    }

    public void setId_rep(int id_rep) {
        this.id_rep = id_rep;
    }

    public String getTitre_rep() {
        return titre_rep;
    }

    public void setTitre_rep(String titre_rep) {
        this.titre_rep = titre_rep;
    }

    public String getDescription_rep() {
        return description_rep;
    }

    public void setDescription_rep(String description_rep) {
        this.description_rep = description_rep;
    }

   

    public Reponse(int id_rep, String titre_rep, String description_rep) {
        this.id_rep = id_rep;
        this.titre_rep = titre_rep;
        this.description_rep = description_rep;
    }

    public Reponse(String titre_rep, String description_rep) {
        this.titre_rep = titre_rep;
        this.description_rep = description_rep;
    }
    

    public Reponse() {
    }

    @Override
    public String toString() {
        return "Reponse{" + "id_rep=" + id_rep + ", titre_rep=" + titre_rep + ", description_rep=" + description_rep +'}';
    }
    
    
    
    
}
