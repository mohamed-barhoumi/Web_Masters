/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.modeles;

public class Reclamation {
    private int id;
    private String titre;
    private String reclamation;

    public Reclamation(String id, String titre, String reclamation) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getTitre() {
        return titre;
    }

    public String getReclamation() {
        return reclamation;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }

    public void setReclamation(String reclamation) {
        this.reclamation = reclamation;
    }

    public Reclamation(String titre, String reclamation) {
        this.titre = titre;
        this.reclamation = reclamation;
    }

    public Reclamation(int id, String titre, String reclamation) {
        this.id = id;
        this.titre = titre;
        this.reclamation = reclamation;
    }
    
    public Reclamation(){
    }

    @Override
    public String toString() {
        return "Reclamation{" + "id=" + id + ", titre=" + titre + ", reclamation=" + reclamation + '}';
    }

   
 
    
    
}
