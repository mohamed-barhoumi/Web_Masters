/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.modeles;

import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Element;
import com.itextpdf.text.pdf.PdfWriter;
import com.itextpdf.text.Phrase;
import com.itextpdf.text.pdf.ColumnText;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPTable;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.sql.SQLException;
import java.util.Date;

/**
 *
 * @author amiraaissaoui
 */
public class Pdf {
    public Pdf() {

    }

    public void add(String file,String date_commande, int total_points, String adresse, String nomPrenom) throws FileNotFoundException,SQLException, DocumentException {
        
        Document my_pdf_report = new Document();
	
        PdfWriter writer = PdfWriter.getInstance(my_pdf_report, new FileOutputStream(file));
	my_pdf_report.open();
        ColumnText.showTextAligned(writer.getDirectContent(),Element.ALIGN_RIGHT , new Phrase("Date d'impression:" +(new Date())),my_pdf_report.right(),my_pdf_report.top()+20,0);
	my_pdf_report.add(new Phrase("Detail de la commande :"));
        //we have four columns in our table
	PdfPTable my_report_table = new PdfPTable(2);
	//create a cell object
	PdfPCell table_cell;   
        table_cell = new PdfPCell(new Phrase("Date de la commande"));
	my_report_table.addCell(table_cell);
	table_cell = new PdfPCell(new Phrase(date_commande));
	my_report_table.addCell(table_cell);
        table_cell = new PdfPCell(new Phrase("Total points"));
	my_report_table.addCell(table_cell);
	table_cell = new PdfPCell(new Phrase(String.valueOf(total_points)));
	my_report_table.addCell(table_cell);
	table_cell = new PdfPCell(new Phrase("Adresse"));
	my_report_table.addCell(table_cell);
	table_cell = new PdfPCell(new Phrase(adresse));
	my_report_table.addCell(table_cell);
        table_cell = new PdfPCell(new Phrase("Nom Prenom"));
	my_report_table.addCell(table_cell);
	table_cell = new PdfPCell(new Phrase(nomPrenom));
	my_report_table.addCell(table_cell);
       
        
	/* Attach report table to PDF */
	my_pdf_report.add(my_report_table);
	my_pdf_report.close();
        
	/* Close all DB related objects */
    }

    
    

 
}
