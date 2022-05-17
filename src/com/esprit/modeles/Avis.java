/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.modeles;

/**
 *
 * @author Lenovo
 */
public class Avis {
    int id;
    
    int rating;
    String commentaire;
    int blog_id;

    public Avis() {
    }

    
    public Avis( int rating, String commentaire) {
        
        this.rating = rating;
        this.commentaire = commentaire;
    }

    public Avis(int id, int rating, String commentaire, int blog_id) {
        this.id = id;
        this.rating = rating;
        this.commentaire = commentaire;
        this.blog_id = blog_id;
    }


    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    

    public int getRating() {
        return rating;
    }

    public void setRating(int rating) {
        this.rating = rating;
    }

    public String getCommentaire() {
        return commentaire;
    }

    public void setCommentaire(String commentaire) {
        this.commentaire = commentaire;
    }

    public int getBlog_id() {
        return blog_id;
    }

    public void setBlog_id(int blog_id) {
        this.blog_id = blog_id;
    }

    @Override
    public String toString() {
        return "Avis{" + "id=" + id + ", rating=" + rating + ", commentaire=" + commentaire + ", blog_id=" + blog_id + '}';
    }


    
    
}
