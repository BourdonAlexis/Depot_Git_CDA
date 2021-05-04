package com.company.GUI;

import java.util.HashMap;
import java.util.Map;
import java.util.Scanner;

public class Menu {


    /**
     *
     * @return
     */
    public String test(){
        Scanner sc = new Scanner(System.in);
        String result;
        String msgMenu;
        do{
            //Menu affiché par le system
            System.out.println(
                        "╔══════════════════════════════════════╗\n" +
                        "║   System d'encodage et de décodage   ║\n" +
                        "║             de messages              ║\n" +
                        "╠══════════════════════════════════════╣\n" +
                        "║       1) Décoder un message          ║\n" +
                        "║       2) Encode un message           ║\n" +
                        "║       3) Quitter                     ║\n" +
                        "╚══════════════════════════════════════╝\n" +
                                "Veulliez saisir un nombre :"
            );

            result = sc.next();
            switch (result) {
                //action utilisateur
                case "1" -> msgMenu = "decrypte";
                case "2" -> msgMenu = "crypte";
                case "3" -> msgMenu = "sortie";
                default -> throw new IllegalStateException("Unexpected value: " + result);
            }
        }while(msgMenu == null);

    //Return le msg utilisateur
    return (msgMenu);
    }

    /**
     *
     * @param choice
     * @return
     */

    public Map<String, String> menu(String choice){
        Scanner sc = new Scanner(System.in);
        Map<String, String> choix = new HashMap<String, String>();
        switch (choice) {
            case "crypte" -> {

                System.out.println("Nom fichier à crypter");
                choix.put("decrypte", sc.next());
                System.out.println("Nom du fichier avec la clé");
                choix.put("key", sc.next());
            }


            case "decrypte" -> {
                System.out.println("Nom fichier à décrypte");
                choix.put("crypte", sc.next());
                System.out.println("Nom du fichier avec la clé");
                choix.put("key", sc.next());
            }
        }

        //retourne le choix
        return choix;
    }


}
