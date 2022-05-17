/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.modeles;

import java.sql.Date;

/**
 *
 * @author Lenovo
 */
public class Blog {
    int id ;
    String title;
    String description; 
    Date date;
    String image;

    public Blog() {
    }

    public Blog(int id, String title, String description, Date date) {
        this.id = id;
        this.title = title;
        this.description = description;
        this.date = date;
    }

    public Blog(String title, String description, Date date) {
        this.title = title;
        this.description = description;
        this.date = date;
    }

    public Blog(int id, String title, String description, Date date, String image) {
        this.id = id;
        this.title = title;
        this.description = description;
        this.date = date;
        this.image = image;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    @Override
    public String toString() {
        return "Blog{" + "id=" + id + ", title=" + title + ", description=" + description + ", date=" + date + ", image=" + image + '}';
    }
    
    
    
}

