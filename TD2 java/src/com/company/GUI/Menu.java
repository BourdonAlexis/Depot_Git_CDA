package com.company.GUI;

import java.util.Scanner;

public class Menu {

    public String test(){
        Scanner sc = new Scanner(System.in);
        String result;
        String msgMenu;
        do{
            System.out.println("""
                    ╔══════════════════════════════════════╗
                    ║   System d'encodage et de décodage   ║
                    ║             de messages              ║
                    ╠══════════════════════════════════════╣
                    ║       1) Décoder un message          ║
                    ║       2) Encode un message           ║
                    ║       3) Quitter                     ║
                    ╚══════════════════════════════════════╝
                    """);

            result = sc.next();
            switch (result) {
                case "1" -> msgMenu = "decrypte";
                case "2" -> msgMenu = "encrypte";
                case "3" -> msgMenu = "sort";
                default -> throw new IllegalStateException("Unexpected value: " + result);
            }
        }while(msgMenu == null);
        
    return (test());
    }
}
