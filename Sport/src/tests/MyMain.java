/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package tests;

import entities.Avis;
import entities.Blog;
import java.sql.Date;
import java.time.LocalDate;
import services.AvisCRUD;
import services.BlogCRUD;
import java.lang.NullPointerException;
/**
 *
 * @author Lenovo
 */
public class MyMain {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
         BlogCRUD bcd = new BlogCRUD();
        Date ld = new Date(127,2,12);
        Blog b = new Blog(17,"maki","fsdsdfsdf",ld);
        System.out.println(b);
       // bcd.addBlog(b);
       // bcd.modifierBlog(b);
        //bcd.deleteBlog("maki");
         System.out.println(bcd.GetBlog());
        
       /* AvisCRUD acd = new AvisCRUD();
        Avis a = new Avis(32,4,"not good");
        int blog_id = 16;
      //  acd.addAvis(a,blog_id);
       //acd.modifierAvis(a);
       // acd.deleteAvis(32);
       // System.out.println(acd.GetAvis());*/
    }
    
}
