/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.services;

import java.util.List;

/**
 *
 * @author amiraaissaoui
 */
public interface IService2<T> {
     public int ajouter(T t);
    public T getById(int id);
    public List<T> getAll();
    public boolean modifier(T t);
    public boolean supprimer(T t);
  
    
}