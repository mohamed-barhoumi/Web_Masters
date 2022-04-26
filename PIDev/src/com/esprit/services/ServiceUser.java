/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.services;

import java.security.MessageDigest;
//import java.security.NoSuchAlgorithmException;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import com.esprit.modeles.Admin;
//import com.esprit.modeles.Livreur;
import com.esprit.modeles.Membre;
import com.esprit.modeles.User;
import com.esprit.utils.DataSource;
import java.util.List;

import java.util.Properties;
import java.util.regex.Matcher;
import java.util.regex.Pattern;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.scene.control.Alert;
//import javax.mail.Session;
//import javax.mail.internet.InternetAddress;
//import javax.mail.internet.MimeMessage;
import javax.xml.bind.DatatypeConverter;

/**
 *
 * @author elbarhoumi
 */
public class ServiceUser implements IService<User> {

    Connection cnx = DataSource.getInstance().getCnx();

    @Override
    public void ajouter(User u) {

        String req = "INSERT INTO `user`(`nom_user`, `prenom_user`,  `tel_user`,`email_user`, `mdp_user`, `role`,`pdp` )VALUES (?,?,?,?,?,?,?) ";
        try {
            String mdp = Hash();

            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, u.getNom_user());
            ps.setString(2, u.getPrenom_user());
            ps.setInt(3, u.getTel_user());
            ps.setString(4, u.getEmail_user());
            ps.setString(5, mdp + u.getMdp_user());
            if (u instanceof Admin) {
                ps.setString(6, "admin");
                ps.setString(7, "");
            } else if (u instanceof Membre) {
                ps.setString(6, "membre");
                ps.setString(7, u.getPdp());
            }/* else if (u instanceof Livreur) {
                ps.setString(6, "livreur");
                ps.setString(7, "");

            }*/ else {
                return;
            }
            ps.executeUpdate();
            System.out.println("user added !");
        } catch (Exception ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public ObservableList<User> getAll() {
        ObservableList<User> list = FXCollections.observableArrayList();
        try {

            String req = "SELECT * FROM `user`";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(req);
            while (rs.next()) {
                User u = new User();
                u.setId_user(rs.getInt("id_user"));
                u.setNom_user(rs.getString("nom_user"));
                u.setPrenom_user(rs.getString("prenom_user"));
                u.setTel_user(rs.getInt("tel_user"));
                u.setEmail_user(rs.getString("email_user"));
                u.setMdp_user(rs.getString("mdp_user"));
                u.setRole(rs.getString("role"));

                list.add(u);
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;

    }

    @Override
    public boolean modifier(User u) {
        String req = "update user set nom_user = ? , prenom_user = ? ,tel_user = ?  where id_user = ? ";
        try {
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setString(1, u.getNom_user());
            ps.setString(2, u.getPrenom_user());
            ps.setInt(3, u.getTel_user());
            ps.setInt(4, u.getId_user());
            ps.executeUpdate();
            System.out.println("user Modifyed !");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return false;
    }

    @Override
    public boolean supprimer(User u) {
        String req = "DELETE FROM user WHERE id_user = ? ";
        try {
            PreparedStatement ps = cnx.prepareStatement(req);
            ps.setInt(1, u.getId_user());
            ps.executeUpdate();
            System.out.println("User Deleted");
            ps.close();
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return false;
    }

    public String Hash() throws Exception {

        String mdp_user = "";

        MessageDigest md = MessageDigest.getInstance("SHA-256");
        md.update(mdp_user.getBytes());

        byte byteData[] = md.digest();

        StringBuilder sb = new StringBuilder();
        for (int i = 0; i < byteData.length; i++) {
            sb.append(Integer.toString((byteData[i] & 0xff) + 0x100, 16).substring(1));
        }
        return sb.toString();

    }

    public ObservableList<User> getUser(String nom) {
        ObservableList<User> list = FXCollections.observableArrayList();
        try {

            String req = "SELECT * FROM `user` where nom_user like '%" + nom + "%' ";
            PreparedStatement st = cnx.prepareStatement(req);

            ResultSet rs = st.executeQuery(req);
            while (rs.next()) {
                User u = new User();
                u.setId_user(rs.getInt("id_user"));
                u.setNom_user(rs.getString("nom_user"));
                u.setPrenom_user(rs.getString("prenom_user"));
                u.setTel_user(rs.getInt("tel_user"));
                u.setEmail_user(rs.getString("email_user"));
                u.setMdp_user(rs.getString("mdp_user"));

                list.add(u);
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return list;

    }

    /*public void sendMail(String receveursList, String object, String corps) {
        Properties properties = new Properties();

        properties.put("mail.smtp.auth", "true");
        properties.put("mail.smtp.starttls.enable", "true");
        properties.put("mail.smtp.host", "smtp.gmail.com");
        properties.put("mail.smtp.port", "25");

        String MonEmail = "fatma.trabelsi@esprit.tn";
        String password = "191JFT3488";

        Session session = Session.getInstance(properties, new javax.mail.Authenticator() {

            @Override
            protected javax.mail.PasswordAuthentication getPasswordAuthentication() {
                return new javax.mail.PasswordAuthentication(MonEmail, password);
            }

        });

        javax.mail.Message message = prepareMessage(session, MonEmail, receveursList, object, corps);

        try {
            javax.mail.Transport.send(message);
        } catch (javax.mail.MessagingException ex) {
            System.out.println();
        }

        System.err.println("Message envoye avec succes");
    }*/

  /*  private static javax.mail.Message prepareMessage(Session session, String email, String receveursList, String object, String corps) {
        javax.mail.Message message = new MimeMessage(session);

        try {
            message.setFrom(new InternetAddress(email));

            message.setSubject(object);
            message.setRecipient(javax.mail.Message.RecipientType.TO, new InternetAddress(receveursList));
            message.setText(corps);

            return message;
        } catch (javax.mail.MessagingException ex) {
            System.out.println(ex.getMessage());
        }

        return null;
    }*/

    public String getAlphaNumericString(int n) {

        // chose a Character random from this String 
        String AlphaNumericString = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
                + "0123456789"
                + "abcdefghijklmnopqrstuvxyz";

        // create StringBuffer size of AlphaNumericString 
        StringBuilder sb = new StringBuilder(n);

        for (int i = 0; i < n; i++) {

            // generate a random number between 
            // 0 to AlphaNumericString variable length 
            int index
                    = (int) (AlphaNumericString.length()
                    * Math.random());

            // add Character one by one in end of sb 
            sb.append(AlphaNumericString
                    .charAt(index));
        }

        return sb.toString();
    }

    public boolean verifierEmailBd(String email) { //Controle De Saisie si mail existe
        PreparedStatement stmt = null;
        ResultSet rst = null;
        try {
            String sql = "SELECT * FROM user WHERE email_user=?";
            stmt = cnx.prepareStatement(sql);
            stmt.setString(1, email);
            rst = stmt.executeQuery();
            if (rst.next()) {
                return true;
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return false;
    }

    public void information_Box(String title, String message) {
        Alert dg = new Alert(Alert.AlertType.INFORMATION);
        dg.setTitle(title);
        dg.setContentText(message);
        dg.show();
    }
    public static final Pattern VALID_EMAIL_ADDRESS_REGEX = Pattern.compile("^[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,6}$", Pattern.CASE_INSENSITIVE);

    public boolean testEmail(String mail) {
        Matcher matcher = VALID_EMAIL_ADDRESS_REGEX.matcher(mail);
        return matcher.find();
    }

    public void alert_Box(String title, String message) {
        Alert dg = new Alert(Alert.AlertType.WARNING);
        dg.setTitle(title);
        dg.setContentText(message);
        dg.show();
    }

    public static final Pattern VALID_PASSWORD_REGEX = Pattern.compile("^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#&()–[{}]:;',?/*~$^+=<>]).{8,20}$", Pattern.CASE_INSENSITIVE);

    public boolean testPassword(String password) {
        Matcher matcher = VALID_PASSWORD_REGEX.matcher(password);
        return matcher.find();
    }

   /* public String crypterPassword(String password) {
        String hashValue = "";
        try {

            MessageDigest messageDigest = MessageDigest.getInstance("MD5");
            messageDigest.update(password.getBytes());
            byte[] digestedBytes = messageDigest.digest();
            hashValue = DatatypeConverter.printHexBinary(digestedBytes).toLowerCase();

        } catch (Exception e) {
        }

        return hashValue;
    }
*/
    public void modifierPassword(String mail, String password) {
        PreparedStatement stmt;
        try {

            String sql = "UPDATE user SET mdp_user=? WHERE email_user=?";
            stmt = cnx.prepareStatement(sql);
            stmt.setString(1, password);
            stmt.setString(2, mail);
            stmt.executeUpdate();

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }

    @Override
    public User getById(int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<User> getAllByUser(int t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public User findById(int id) {
        User r = new User();
        try {
            String req = "SELECT * FROM user where id_user=" + id;
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(req);

            while (rs.next()) {

                r.setId_user(rs.getInt("id_user"));
                r.setNom_user(rs.getString("nom_user"));
                r.setPrenom_user(rs.getString("prenom_user"));
                r.setEmail_user(rs.getString("email_user"));

            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return r;
    }
}
