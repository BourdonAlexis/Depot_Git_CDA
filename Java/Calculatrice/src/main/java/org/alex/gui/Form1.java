package org.alex.gui;


import javafx.fxml.FXML;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;



public class Form1 {

    @FXML
    public TextField screen;


    String op = "";
    long number1;
    long number2;

    //Methode Nombre

    public void Number(javafx.event.ActionEvent ae) {
        String no = ((Button)ae.getSource()).getText();
        screen.setText(screen.getText()+no);
    }

    //Methode Operateur
    public void Operation(javafx.event.ActionEvent ae) {
        String operation = ((Button)ae.getSource()).getText();
        if (!operation.equals("=")){

            if(!op.equals("")){
                return;
            }
            op = operation;
            number1 = Long.parseLong(screen.getText());
            screen.setText("");
        }
        else {
            if(op.equals("")){
                return;
            }
            number2 = Long.parseLong(screen.getText());
            calculate(number1, number2, op);
            op="";
        }
    }

    //Creation methode de calcule selon opérateur

    public void calculate(long n1, long n2, String op){

        switch (op){
            case "+" : screen.setText(n1 + n2 + "");break;
            case "-" : screen.setText(n1 - n2 + "");break;
            case "*" : screen.setText(n1 * n2 + "");break;
            case "/" :
                //Gère le cas si n = 0
                if (n2 == 0){
                    //affiche 0 sur l'écran
                    screen.setText("0");break;
                }
                //Si ne rentre pas dans la condition calcule
                screen.setText(n1 / n2 + "");break;
        }
    }

    //Creation methof Clear

    public void Clear() {

            //Si numéro 1 différent de 0 remet à 0
            if(number1!=0){
                number1 = 0;
            }
        //affiche vide
        screen.setText("");

    }

}
