/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;

import com.esprit.modeles.Membre;
import com.esprit.modeles.User;
import com.esprit.services.ServiceUser;
//import com.twilio.Twilio;
//import com.twilio.rest.api.v2010.account.Message;
//import com.twilio.type.PhoneNumber;
import java.io.ByteArrayOutputStream;
import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URL;
import java.nio.file.CopyOption;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.nio.file.StandardCopyOption;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.stage.Stage;
import javax.swing.JFileChooser;
import javax.swing.filechooser.FileNameExtensionFilter;
//import net.glxn.qrgen.QRCode;
//import net.glxn.qrgen.image.ImageType;

/**
 * FXML Controller class
 *
 * @author Faty
 */
public class SingUpMembreController implements Initializable {

    @FXML
    private Button add_membre_btn;
    @FXML
    private TextField prenom_membre;
    @FXML
    private TextField nom_membre;
    @FXML
    private TextField tel_membre;
    @FXML
    private TextField email_membre;
    @FXML
    private TextField mdp_membre;
    @FXML
    private Button switch_signin_membre_btn;

    private Stage stage;
    private Scene scene;
    private Parent root;

    public static final String ACCOUNT_SID = "ACd3d0d4b5a338f627cac6f0a71f9851d7";
    public static final String AUTH_TOKEN = "bd8e9d382e7643ed17fc75e54062d1c3";
    @FXML
    private ImageView qr;
    @FXML
    private TextField src;
    @FXML
    private ImageView img;

    /**
     * Initializes the controller class.
     */
   /* @Override
    public void initialize(URL url, ResourceBundle rb) {

    }

    @FXML
    private void action_add_membre(ActionEvent event) {

        ServiceUser sp = new ServiceUser();
        
        if (prenom_membre.getText().isEmpty()) {

            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("Erreur");
            alert.setContentText("What's your name ?");
            alert.showAndWait();
            return;
        }
        if (nom_membre.getText().isEmpty()) {

            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("Erreur");
            alert.setContentText("What's your name ?");
            alert.showAndWait();
            return;
        }
        if (!(tel_membre.getText().matches("\\d{8}")) && tel_membre.getText().isEmpty() ) {
            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("Erreur");
            alert.setContentText("What 's your telephone number ?");
            alert.showAndWait();
            return;

        }
        if (email_membre.getText().isEmpty()
                || !email_membre.getText().contains("@")
                || !email_membre.getText().contains(".")
                || email_membre.getText().indexOf("#", 0) >= 0
                || email_membre.getText().indexOf("&", 0) >= 0
                || email_membre.getText().indexOf("(", 0) >= 0
                || email_membre.getText().indexOf("Â§", 0) >= 0
                || email_membre.getText().indexOf("!", 0) >= 0
                || email_membre.getText().indexOf("Ã§", 0) >= 0
                || email_membre.getText().indexOf("Ã ", 0) >= 0
                || email_membre.getText().indexOf("Ã©", 0) >= 0
                || email_membre.getText().indexOf(")", 0) >= 0
                || email_membre.getText().indexOf("{", 0) >= 0
                || email_membre.getText().indexOf("}", 0) >= 0
                || email_membre.getText().indexOf("|", 0) >= 0
                || email_membre.getText().indexOf("$", 0) >= 0
                || email_membre.getText().indexOf("*", 0) >= 0
                || email_membre.getText().indexOf("â‚¬", 0) >= 0
                || email_membre.getText().indexOf("`", 0) >= 0
                || email_membre.getText().indexOf("\'", 0) >= 0
                || email_membre.getText().indexOf("\"", 0) >= 0
                || email_membre.getText().indexOf("%", 0) >= 0
                || email_membre.getText().indexOf("+", 0) >= 0
                || email_membre.getText().indexOf("=", 0) >= 0
                || email_membre.getText().indexOf("/", 0) >= 0
                || email_membre.getText().indexOf("\\", 0) >= 0
                || email_membre.getText().indexOf(":", 0) >= 0
                || email_membre.getText().indexOf(",", 0) >= 0
                || email_membre.getText().indexOf("?", 0) >= 0
                || email_membre.getText().indexOf(";", 0) >= 0
                || email_membre.getText().indexOf("Â°", 0) >= 0
                || email_membre.getText().indexOf("<", 0) >= 0
                || email_membre.getText().indexOf(">", 0) >= 0) {

            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("Erreur");
            alert.setContentText("Invalid mail !");
            alert.showAndWait();
            return;
        }
        if (mdp_membre.getText().isEmpty()) {

            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("Erreur");
            alert.setContentText("What's your password ?");
            alert.showAndWait();
            return;
        }
        User m = new Membre(prenom_membre.getText(), nom_membre.getText(), Integer.parseInt(tel_membre.getText()), email_membre.getText(), mdp_membre.getText(),src.getText());
        sp.ajouter(m);
       // SendSms();
        CodeQr(event);
        affichImage();
        affichpdp();

    }

    @FXML
    private void action_switch_signin_membre(ActionEvent event) throws IOException {
        root = FXMLLoader.load(getClass().getResource("SignInMembre.fxml"));

        stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        scene = new Scene(root);
        stage.setScene(scene);
        stage.show();
    }

    public void SendSms() {
        String nom = nom_membre.getText();
        String prenom = prenom_membre.getText();
        Twilio.init(ACCOUNT_SID, AUTH_TOKEN);
        Message message = Message.creator(new com.twilio.type.PhoneNumber("+21692065042"),
                new com.twilio.type.PhoneNumber("+17622274359"),
                " Gongratulation " + nom + " " + prenom + "\n"+"  welcome to PLEsports").create();

        System.out.println(message.getSid());
    }

    /*private void CodeQr(ActionEvent event) {
        String Id_stat = nom_membre.getText();

        String LoginCode = email_membre.getText() + " " + mdp_membre.getText();
        ByteArrayOutputStream out = QRCode.from(LoginCode)
                .to(ImageType.PNG).stream();
        String f_name = Id_stat;
        String Path_name = new File("src/QrCode/").getAbsolutePath();
        try {
            FileOutputStream fout = new FileOutputStream(new File(Path_name + "/" + (f_name + ".PNG")));
            fout.write(out.toByteArray());
            fout.flush();
            System.out.println(Path_name);

        } catch (Exception e) {
            System.out.println(e);

        }

    }*/

    public void affichImage() {
        String Id_stat = nom_membre.getText();
        String f_name = Id_stat;
        String Path_name = new File("src/QrCode/").getAbsolutePath();
        String image = Path_name + "\\" + Id_stat + ".PNG";
        //System.out.println(image);
        ImageView i = new ImageView();
        File f = new File(image);
        Image im = new Image(f.toURI().toString());
        qr.setImage(im);
    }

    @FXML
    private String importImg(ActionEvent event) {
         String id =email_membre.getText();
          Path to = null;
         String  m = null;
         String path = "src/imagesUser/";
         JFileChooser chooser = new JFileChooser();
        
        FileNameExtensionFilter filter = new FileNameExtensionFilter(
                "JPG & PNG Images", "jpg","jpeg","PNG");
        chooser.setFileFilter(filter);
        int returnVal = chooser.showOpenDialog(null);
        if(returnVal == JFileChooser.APPROVE_OPTION) {
           m = chooser.getSelectedFile().getAbsolutePath();
//            System.out.println("You chose to open this file: " +m
//                    );
            
            if(chooser.getSelectedFile() != null){
                
               try {
                   Path from = Paths.get(chooser.getSelectedFile().toURI());
                    to = Paths.get(path+"\\"+id+".png");
                   CopyOption[] options = new CopyOption[]{
                       StandardCopyOption.REPLACE_EXISTING,
                       StandardCopyOption.COPY_ATTRIBUTES
                   };
                   Files.copy(from, to, options);
                   System.out.println("added");
//                saveSystem(selectedFile, )
                       System.out.println(to);

               } catch (IOException ex) {
                   System.out.println();
               }
            }
             src.setText(to.toString());
        
    }
      return to.toString(); 
    }
        public void affichpdp() {
        String Id_stat = email_membre.getText();
        String f_name = Id_stat;
        String Path_name = new File("src/imagesUser/").getAbsolutePath();
        String image = Path_name + "\\" + Id_stat + ".PNG";
        //System.out.println(image);
        ImageView i = new ImageView();
        File f = new File(image);
        Image im = new Image(f.toURI().toString());
        img.setImage(im);
    }

    @Override
    public void initialize(URL location, ResourceBundle resources) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
}
