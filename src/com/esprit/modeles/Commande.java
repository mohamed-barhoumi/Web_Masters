/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.modeles;

import java.util.Date;

/**
 *
 * @author amiraaissaoui
 */
public class Commande {

    public static Object getUser() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    private int id_commande;
    private int total_points;
    private int id_user;
    private Date date_commande;
    private String adresse;
    private String etat;
    private String nomPrenom;

    public Commande() {
    }

    public Commande(int id_commande, int total_points, int id_user, Date date_commande, String adresse, String etat) {
        this.id_commande = id_commande;
        this.total_points = total_points;
        this.id_user = id_user;
        this.date_commande = date_commande;
        this.adresse = adresse;
        this.etat = etat;
    }

    public Commande(int id_commande, int total_points, int id_user, Date date_commande) {
        this.id_commande = id_commande;
        this.total_points = total_points;
        this.id_user = id_user;
        this.date_commande = date_commande;
    }

    public Commande(int total_points, int id_user, Date date_commande) {
        this.total_points = total_points;
        this.id_user = id_user;
        this.date_commande = date_commande;
    }

    public Commande(int aInt, int aInt0, int aInt1, int aInt2, Date date) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public int getId_commande() {
        return id_commande;
    }

    public void setId_commande(int id_commande) {
        this.id_commande = id_commande;
    }

    public int getTotal_points() {
        return total_points;
    }

    public void setTotal_points(int total_points) {
        this.total_points = total_points;
    }

    public int getId_user() {
        return id_user;
    }

    public void setId_user(int id_user) {
        this.id_user = id_user;
    }

    public Date getDate_commande() {
        return date_commande;
    }

    public void setDate_commande(Date date_commande) {
        this.date_commande = date_commande;
    }

    public String getAdresse() {
        return adresse;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public String getEtat() {
        return etat;
    }

    public void setEtat(String etat) {
        this.etat = etat;
    }

    public String getNomPrenom() {
        return nomPrenom;
    }

    public void setNomPrenom(String nomPrenom) {
        this.nomPrenom = nomPrenom;
    }
    
    

    @Override
    public String toString() {
        return "Commande{" + "id_commande=" + id_commande + ", total_points=" + total_points + ", id_user=" + id_user + ", date_commande=" + date_commande + '}';
    }

}
