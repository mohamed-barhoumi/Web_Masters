/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;

/**
 *
 * @author Lenovo
 */
public class Avis {
    int id;
    
    int rating;
    String commentaire;

    public Avis() {
    }

    
    public Avis( int rating, String commentaire) {
        
        this.rating = rating;
        this.commentaire = commentaire;
    }

    public Avis(int id, int rating, String commentaire) {
        this.id = id;
        
        this.rating = rating;
        this.commentaire = commentaire;
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

    @Override
    public String toString() {
        return "Avis{" + "id=" + id + ", rating=" + rating + ", commentaire=" + commentaire + '}';
    }
    
    
    
}
