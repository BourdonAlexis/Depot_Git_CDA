package com.company;
import com.company.GUI.Menu;
import com.company.model.Message;
import com.company.tools.Transcoder;

import java.io.IOException;
import java.lang.System;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.sql.SQLOutput;
import java.util.Map;


public class Main {


    public static void main(String[] args) throws IOException {

//        String home = System.getProperty("user.dir");
//        System.out.println(home);
        //Chemin initial
        String home = System.getProperty("user.dir");
        //récup la classe Menu()
        Menu menu = new Menu();
        //récup la method test dans la classe menu
        String test = menu.test();

        //Initialisation des strings et Path
        Path msgClearPath;
        Path msgClearEncoded;
        Path keyPath;
        String key;
        Transcoder transcoder;



        Message msg;
        Map<String,String> choix = menu.menu(test);


        //si crypte
        if (test.equals("crypte")) {
            System.out.println("2 Encode");

            msgClearPath = Paths.get(home, choix.get("decrypte") + ".txt");
            msgClearEncoded = Paths.get(home, "crypte.txt");
            keyPath = Paths.get(home, choix.get("key") + ".txt");
            msg = new Message(false, msgClearPath, msgClearEncoded, keyPath);
            msg.readAndWrite();

            System.out.println("Fin programme");
        }
        //Si décrypte
        else if (test.equals("decrypte")) {
            System.out.println("1 decrypte");

            msgClearPath = Paths.get(home, "decrypte.txt");
            msgClearEncoded = Paths.get(home, choix.get("crypte") + ".txt");
            keyPath = Paths.get(home, choix.get("key") + ".txt");
            msg = new Message(true, msgClearPath, msgClearEncoded, keyPath);
            msg.readAndWrite();

            System.out.println("Fin programme");

        }
        //sortie du prog
        else {
            System.out.println("3 sortie programme");

        }

    }

}
