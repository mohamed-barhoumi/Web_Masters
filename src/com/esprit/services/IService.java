/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.services;
import java.util.List;
/**
 *
 * @author ACER
 */
public interface IService<T> {
   

    public void ajouter(T t);
    public T getById(int id);
    public List<T> getAll();
    public boolean modifier(T t);
    public boolean supprimer(T t);
    List<T> getAllByUser(int t);
    public T findById(int t);
  //  public ObservableList<U> getAll();
    
    public void ajouterEvent( T t);
  public void supprimerEvent( int t);
  public void modifierEvent( T t);
  public List<T> afficherEvent();
  
  //
       
   


  
    
    
}
