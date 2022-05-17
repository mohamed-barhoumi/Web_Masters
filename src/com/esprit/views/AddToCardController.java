/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.views;



import com.esprit.modeles.Commande;
import com.esprit.modeles.LigneCommande;
import com.esprit.modeles.Produit;

import com.esprit.services.CommandeService;
import com.esprit.services.LigneCommandeService;
import com.esprit.services.ServicePoduit;
import com.esprit.utils.Mailer;
import java.io.IOException;



import java.net.URL;

import java.time.LocalDate;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXMLLoader;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import javafx.scene.layout.AnchorPane;
import javafx.scene.web.WebEngine;
import javafx.scene.web.WebEvent;
import javafx.scene.web.WebView;
import javafx.util.Callback;


/**
 * FXML Controller class
 *
 * @author amiraaissaoui
 */
public class AddToCardController implements Initializable {

    private Map<Produit, Integer> productMap = new HashMap<>();
    private CommandeService commandeService = new CommandeService() {
        @Override
        public void ajouter(Commande t) {
            throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        }
    };
    private LigneCommandeService ligneCommandeService = new LigneCommandeService();

    private ServicePoduit produitService = new ServicePoduit();
    @FXML
    private TableView<Produit> tabProd;
    @FXML
    private TableColumn<Produit, String> colNomProd;
    @FXML
    private TableColumn<Produit, Integer> colPtProd;
    @FXML
    private Label labelTotal;
    @FXML
    private DatePicker dateCmd;
    @FXML
    private TextField textAdr;
    @FXML
    private WebView webView;
    WebEngine webEngine;
    @FXML
    private Button btnOK;
    int sum = 0;
    String s="0";
    @FXML
    private AnchorPane rootPane3;
    @FXML
    private Button acceuilbtn;
    @FXML
    private Button magasinbtn;
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        dateCmd.setValue(LocalDate.now());
        dateCmd.setDisable(true);
        List<Produit> produits = produitService.getAll();

       
        
        productMap.forEach((key, value) ->
        {
               sum += value * key.getNb_pts() ;
        }
        );
     
        labelTotal.setText("" + sum);

        colNomProd.setCellValueFactory(new PropertyValueFactory<>("nom_produit"));
        colPtProd.setCellValueFactory(new PropertyValueFactory<>("nb_pts"));

        tabProd.getItems().addAll(produits);
        addQuantityColumn();
        // TODO
        webEngine = webView.getEngine();

        final URL urlGoogleMaps = getClass().getResource("map.html");
        webEngine.load(urlGoogleMaps.toExternalForm());
        webEngine.setOnAlert(new EventHandler<WebEvent<String>>() {
            @Override
            public void handle(WebEvent<String> e) {
                System.out.println(e.toString());
            }
        });
        //webEngine.getLoadWorker().stateProperty().addListener(new );
    }

    private void addQuantityColumn() {
        TableColumn<Produit, Void> colBtn = new TableColumn("Quantite");

        Callback<TableColumn<Produit, Void>, TableCell<Produit, Void>> cellFactory = new Callback<TableColumn<Produit, Void>, TableCell<Produit, Void>>() {
            @Override
            public TableCell<Produit, Void> call(final TableColumn<Produit, Void> param) {
                final TableCell<Produit, Void> cell = new TableCell<Produit, Void>() {
                    Button btnMinus = new Button("-");
                    private final Button btnPlus = new Button("+");
                    private final Label label = new Label("0");
                    Integer qte = 0;

                    {
                        btnMinus.setOnAction(new EventHandler<ActionEvent>() {
                            @Override
                            public void handle(ActionEvent event) {
                                qte = Integer.parseInt(label.getText());
                                if (qte > 0) {
                                    qte--;
                                    label.setText("" + qte);
                                    Produit data = getTableView().getItems().get(getIndex());
                                    int sum = Integer.parseInt(labelTotal.getText()) - data.getNb_pts();
                                    labelTotal.setText("" + sum);
                                    productMap.put(data, qte);
                                }
                            }
                        });

                        btnPlus.setOnAction((ActionEvent event) -> {

                            qte = Integer.parseInt(label.getText());
                            qte++;
                            label.setText("" + qte);
                            Produit data = getTableView().getItems().get(getIndex());
                            int sum = Integer.parseInt(labelTotal.getText()) + data.getNb_pts();
                            labelTotal.setText("" + sum);
                            productMap.put(data, qte);
                        });
                    }

                    @Override
                    public void updateItem(Void item, boolean empty) {
                        super.updateItem(item, empty);
                        if (empty) {
                            setGraphic(null);
                        } else {

                            AnchorPane panel = new AnchorPane();
                            AnchorPane.setLeftAnchor(btnMinus, 40.0);
                            AnchorPane.setLeftAnchor(label, 90.0);
                            AnchorPane.setLeftAnchor(btnPlus, 120.0);
                            panel.getChildren().addAll(btnMinus, label, btnPlus);
                            // panel.getChildren().add(btnPlus);

                            setGraphic(panel);
                        }
                    }
                };
                return cell;
            }
        };

        colBtn.setCellFactory(cellFactory);

        tabProd.getColumns().add(colBtn);

    }

    @FXML
    private void passerCommande(ActionEvent event) throws IOException, Exception {
      
        if (textAdr.getText().length() == 0 ) {
            Alert alert = new Alert(Alert.AlertType.ERROR);
            textAdr.setStyle("-fx-border-color: red");
            alert.setTitle("Erreur");
            alert.setHeaderText("Erreur de saisie !");
            alert.setContentText("Veuillez saisir votre adresse");
            alert.show();
    
        }
        else if (labelTotal.getText().equals(s)){   {
             Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setTitle("Erreur");
              labelTotal.setStyle("-fx-border-color: red");
              alert.setHeaderText("AUCUN PRODUIT CHOISI");
            alert.setContentText("Il faut au minimum un produit pour passer commande");
            alert.show();
                    } }
           
         else {

            Commande cmd = new Commande();
             Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
             alert.setTitle("Succés");
             alert.setHeaderText("Ajoutée");
             alert.setContentText("Commande Ajoutée Avec Succès !");
             alert.show();
            cmd.setAdresse(textAdr.getText());
            cmd.setDate_commande(new java.util.Date());
            cmd.setId_user(10);
            cmd.setTotal_points(Integer.parseInt(labelTotal.getText()));
            cmd.setEtat("En attente");
            System.out.println("commande"+cmd.toString());
            int idCmd = commandeService.ajouterr(cmd);
            productMap.forEach((key, value)
                    -> {
                if (value != 0) {
                    System.out.println("**********************");
                    LigneCommande ligne = new LigneCommande();
                    int total = value * key.getNb_pts();
                    ligne.setNb_pts(total);
                    ligne.setQuantite(value);
                    ligne.setId_commande(idCmd);
                    ligne.setId_produit(key.getId_produit());
                    System.out.println("ligne"+ligne.toString());
                    ligneCommandeService.ajouter(ligne);
                }

            }
            );
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/CommandeFront.fxml"));
        

        rootPane3.getChildren().setAll(pane);
        
        Mailer.sendMail ("aissaouiamira91@gmail.com","Detail commande","<!DOCTYPE html>\n" +
"<html xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" lang=\"en\">\n" +
"\n" +
"<head>\n" +
"	<title></title>\n" +
"	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n" +
"	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n" +
"	<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->\n" +
"	<style>\n" +
"		* {\n" +
"			box-sizing: border-box;\n" +
"		}\n" +
"\n" +
"		body {\n" +
"			margin: 0;\n" +
"			padding: 0;\n" +
"		}\n" +
"\n" +
"		a[x-apple-data-detectors] {\n" +
"			color: inherit !important;\n" +
"			text-decoration: inherit !important;\n" +
"		}\n" +
"\n" +
"		#MessageViewBody a {\n" +
"			color: inherit;\n" +
"			text-decoration: none;\n" +
"		}\n" +
"\n" +
"		p {\n" +
"			line-height: inherit\n" +
"		}\n" +
"\n" +
"		@media (max-width:500px) {\n" +
"			.icons-inner {\n" +
"				text-align: center;\n" +
"			}\n" +
"\n" +
"			.icons-inner td {\n" +
"				margin: 0 auto;\n" +
"			}\n" +
"\n" +
"			.row-content {\n" +
"				width: 100% !important;\n" +
"			}\n" +
"\n" +
"			.column .border {\n" +
"				display: none;\n" +
"			}\n" +
"\n" +
"			table {\n" +
"				table-layout: fixed !important;\n" +
"			}\n" +
"\n" +
"			.stack .column {\n" +
"				width: 100%;\n" +
"				display: block;\n" +
"			}\n" +
"		}\n" +
"	</style>\n" +
"</head>\n" +
"\n" +
"<body style=\"background-color: #569b7b; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;\">\n" +
"	<table class=\"nl-container\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #569b7b; background-image: none; background-position: top left; background-size: auto; background-repeat: no-repeat;\">\n" +
"		<tbody>\n" +
"			<tr>\n" +
"				<td>\n" +
"					<table class=\"row row-1\" align=\"center\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">\n" +
"						<tbody>\n" +
"							<tr>\n" +
"								<td>\n" +
"									<table class=\"row-content stack\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #434349; color: #000000; width: 480px;\" width=\"480\">\n" +
"										<tbody>\n" +
"											<tr>\n" +
"												<td class=\"column column-1\" width=\"100%\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\">\n" +
"													<table class=\"image_block\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">\n" +
"														<tr>\n" +
"															<td style=\"width:100%;padding-right:0px;padding-left:0px;\">\n" +
"																<div align=\"center\" style=\"line-height:10px\"><img src=\"https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/BeeProAgency/793429_777221/278394201_5372761256070360_4008695436604101531_n.png\" style=\"display: block; height: auto; border: 0; width: 240px; max-width: 100%;\" width=\"240\"></div>\n" +
"															</td>\n" +
"														</tr>\n" +
"													</table>\n" +
"												</td>\n" +
"											</tr>\n" +
"										</tbody>\n" +
"									</table>\n" +
"								</td>\n" +
"							</tr>\n" +
"						</tbody>\n" +
"					</table>\n" +
"					<table class=\"row row-2\" align=\"center\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">\n" +
"						<tbody>\n" +
"							<tr>\n" +
"								<td>\n" +
"									<table class=\"row-content stack\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #434349; color: #000000; width: 480px;\" width=\"480\">\n" +
"										<tbody>\n" +
"											<tr>\n" +
"												<td class=\"column column-1\" width=\"100%\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\">\n" +
"													<table class=\"heading_block\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">\n" +
"														<tr>\n" +
"															<td style=\"text-align:center;width:100%;\">\n" +
"																<h1 style=\"margin: 0; color: #f9f3f3; direction: ltr; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 23px; font-weight: 700; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;\"><span class=\"tinyMce-placeholder\">Vous avez effectué une nouvelle commande !</span></h1>\n" +
"															</td>\n" +
"														</tr>\n" +
"													</table>\n" +
"												</td>\n" +
"											</tr>\n" +
"										</tbody>\n" +
"									</table>\n" +
"								</td>\n" +
"							</tr>\n" +
"						</tbody>\n" +
"					</table>\n" +
"					<table class=\"row row-3\" align=\"center\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">\n" +
"						<tbody>\n" +
"							<tr>\n" +
"								<td>\n" +
"									<table class=\"row-content stack\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #434349; color: #000000; width: 480px;\" width=\"480\">\n" +
"										<tbody>\n" +
"											<tr>\n" +
"												<td class=\"column column-1\" width=\"100%\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\">\n" +
"													<table class=\"paragraph_block\" width=\"100%\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\">\n" +
"														<tr>\n" +
"															<td>\n" +
"																<div style=\"color:#cfc9c9;direction:ltr;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-size:14px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:center;\">\n" +
"																	<p style=\"margin: 0; margin-bottom: 16px;\">connectez-vous pour suivre votre commande&nbsp;</p>\n" +
"																	<p style=\"margin: 0;\">l'équipe Jawek sport vous souhaite une bonne journée !</p>\n" +
"																</div>\n" +
"															</td>\n" +
"														</tr>\n" +
"													</table>\n" +
"												</td>\n" +
"											</tr>\n" +
"										</tbody>\n" +
"									</table>\n" +
"								</td>\n" +
"							</tr>\n" +
"						</tbody>\n" +
"					</table>\n" +
"					<table class=\"row row-4\" align=\"center\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">\n" +
"						<tbody>\n" +
"							<tr>\n" +
"								<td>\n" +
"									<table class=\"row-content stack\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #434349; color: #000000; width: 480px;\" width=\"480\">\n" +
"										<tbody>\n" +
"											<tr>\n" +
"												<td class=\"column column-1\" width=\"100%\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\">\n" +
"													<table class=\"divider_block\" width=\"100%\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">\n" +
"														<tr>\n" +
"															<td>\n" +
"																<div align=\"center\">\n" +
"																	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">\n" +
"																		<tr>\n" +
"																			<td class=\"divider_inner\" style=\"font-size: 1px; line-height: 1px; border-top: 1px solid #BBBBBB;\"><span>&#8202;</span></td>\n" +
"																		</tr>\n" +
"																	</table>\n" +
"																</div>\n" +
"															</td>\n" +
"														</tr>\n" +
"													</table>\n" +
"												</td>\n" +
"											</tr>\n" +
"										</tbody>\n" +
"									</table>\n" +
"								</td>\n" +
"							</tr>\n" +
"						</tbody>\n" +
"					</table>\n" +
"					<table class=\"row row-5\" align=\"center\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">\n" +
"						<tbody>\n" +
"							<tr>\n" +
"								<td>\n" +
"									<table class=\"row-content stack\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #434349; color: #000000; width: 480px;\" width=\"480\">\n" +
"										<tbody>\n" +
"											<tr>\n" +
"												<td class=\"column column-1\" width=\"100%\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\">\n" +
"													<table class=\"button_block\" width=\"100%\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">\n" +
"														<tr>\n" +
"															<td>\n" +
"																<div align=\"center\">\n" +
"																	<!--[if mso]><v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" href=\"http://127.0.0.1:8000/\" style=\"height:42px;width:135px;v-text-anchor:middle;\" arcsize=\"10%\" stroke=\"false\" fillcolor=\"#559474\"><w:anchorlock/><v:textbox inset=\"0px,0px,0px,0px\"><center style=\"color:#ffffff; font-family:Arial, sans-serif; font-size:14px\"><![endif]--><a href=\"http://127.0.0.1:8000/\" target=\"_blank\" style=\"text-decoration:none;display:inline-block;color:#ffffff;background-color:#559474;border-radius:4px;width:auto;border-top:1px solid #559474;border-right:1px solid #559474;border-bottom:1px solid #559474;border-left:1px solid #559474;padding-top:5px;padding-bottom:5px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;\"><span style=\"padding-left:20px;padding-right:20px;font-size:14px;display:inline-block;letter-spacing:normal;\"><span style=\"font-size: 16px; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;\"><span style=\"font-size: 14px; line-height: 28px;\" data-mce-style=\"font-size: 14px; line-height: 28px;\"><strong>JawekSport.tn</strong></span></span></span></a>\n" +
"																	<!--[if mso]></center></v:textbox></v:roundrect><![endif]-->\n" +
"																</div>\n" +
"															</td>\n" +
"														</tr>\n" +
"													</table>\n" +
"												</td>\n" +
"											</tr>\n" +
"										</tbody>\n" +
"									</table>\n" +
"								</td>\n" +
"							</tr>\n" +
"						</tbody>\n" +
"					</table>\n" +
"					<table class=\"row row-6\" align=\"center\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">\n" +
"						<tbody>\n" +
"							<tr>\n" +
"								<td>\n" +
"									<table class=\"row-content stack\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #434349; color: #000000; width: 480px;\" width=\"480\">\n" +
"										<tbody>\n" +
"											<tr>\n" +
"												<td class=\"column column-1\" width=\"100%\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\">\n" +
"													<table class=\"icons_block\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">\n" +
"														<tr>\n" +
"															<td style=\"vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;\">\n" +
"																<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">\n" +
"																	<tr>\n" +
"																		<td style=\"vertical-align: middle; text-align: center;\">\n" +
"																			<!--[if vml]><table align=\"left\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;\"><![endif]-->\n" +
"																			<!--[if !vml]><!-->\n" +
"																			<table class=\"icons-inner\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\">\n" +
"																				<!--<![endif]-->\n" +
"																				<tr>\n" +
"																					<td style=\"vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 6px;\"><a href=\"https://www.designedwithbee.com/\" target=\"_blank\" style=\"text-decoration: none;\"><img class=\"icon\" alt=\"Designed with BEE\" src=\"https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/BeeProAgency/53601_510656/Signature/bee.png\" height=\"32\" width=\"34\" align=\"center\" style=\"display: block; height: auto; margin: 0 auto; border: 0;\"></a></td>\n" +
"																					<td style=\"font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 15px; color: #9d9d9d; vertical-align: middle; letter-spacing: undefined; text-align: center;\"><a href=\"https://www.designedwithbee.com/\" target=\"_blank\" style=\"color: #9d9d9d; text-decoration: none;\">Designed with BEE</a></td>\n" +
"																				</tr>\n" +
"																			</table>\n" +
"																		</td>\n" +
"																	</tr>\n" +
"																</table>\n" +
"															</td>\n" +
"														</tr>\n" +
"													</table>\n" +
"												</td>\n" +
"											</tr>\n" +
"										</tbody>\n" +
"									</table>\n" +
"								</td>\n" +
"							</tr>\n" +
"						</tbody>\n" +
"					</table>\n" +
"				</td>\n" +
"			</tr>\n" +
"		</tbody>\n" +
"	</table><!-- End -->\n" +
"</body>\n" +
"\n" +
"</html> ");
        
                }
        

     
    }

    @FXML
    private void ActionAcceuilbtn(ActionEvent event) throws IOException {
         AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/InterfaceMembre.fxml"));
        rootPane3.getChildren().setAll(pane);
    }

    @FXML
    private void ActionMagasinbtn(ActionEvent event) throws IOException {
        AnchorPane pane = FXMLLoader.load(getClass().getResource("../views/ProduitMembre.fxml"));
        rootPane3.getChildren().setAll(pane); 
    }

    
      
    
}
