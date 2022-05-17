  /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.modeles;

/**
 *
 * @author a
 */
public class Coach {
    int id;
    String nom;
    String prenom;
    String photo;
    
    Integer numero;

    public Coach() {
     
    }

    public int getId() {
        return id;
    }

    public String getNom() {
        return nom;
    }

    public String getPhoto() {
        return photo;
    }

    public String getPrenom() {
        return prenom;
    }

    public Integer getNumero() {
        return numero;
    }

    public Coach(int id, String nom, String prenom, String photo, Integer numero) {
        this.id = id;
        this.nom = nom;
        this.prenom = prenom;
        this.photo = photo;
        this.numero = numero;
    }

    public Coach(String nom, String prenom, String photo, Integer numero) {
        this.nom = nom;
        this.prenom = prenom;
        this.photo = photo;
        this.numero = numero;
    }

   

    

    public void setId(int id) {
        this.id = id;
    }

    @Override
    public String toString() {
        return "Coach{" + "id=" + id + ", nom=" + nom + ", photo=" + photo + ", prenom=" + prenom + ", numero=" + numero + '}';
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public void setPhoto(String photo) {
        this.photo = photo;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public void setNumero(Integer numero) {
        this.numero = numero;
    }
    
}
