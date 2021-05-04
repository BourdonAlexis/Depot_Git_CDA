package com.company.model;

import com.company.tools.Transcoder;

import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.StandardOpenOption;
import java.util.List;


public class Message {
    //encoded un booléen qui dit si le message est encodé ou non
    private boolean encoded;
    //msgClear, msgEncodded deux listes de chaines qui correspondent aux messages que l'on aura découpé en lignes.
    private List<String> msgClear;
    private List<String> msgEncoded;
    private Path msgClearPath;
    private Path msgClearEncoded;
    private Path keyPath;
    private String key;
    private Transcoder transcoder;

    /**
     *
     * @param encoded
     * @param msgClearPath
     * @param msgClearEncoded
     * @param keyPath
     * @throws IOException
     */
    public Message(boolean encoded, Path msgClearPath, Path msgClearEncoded, Path keyPath) throws IOException {
        this.encoded = encoded;
        this.msgClearPath = msgClearPath;
        this.msgClearEncoded = msgClearEncoded;
        this.keyPath = keyPath;
        this.key = Files.readString(keyPath);
        this.transcoder = new Transcoder(key);
    }

  //Methode pour lire et ecrire le fichier
    public void readAndWrite(){
        if (encoded) {
            //Lis le contenu du fichier
            try {
                this.msgEncoded = Files.readAllLines(msgClearEncoded);
            } catch (IOException e) {
                e.printStackTrace();
            }
            System.out.println("décrypt");

            //décrypte le fichier par contenu
            for(String contenu : msgEncoded){
                //Lance la méthode de décryptage du transcoder
                String contenuDecrypt = transcoder.decrypte(contenu);
                System.out.println(contenuDecrypt);
                //écris les lignes dans le fichier
                try {
                    //Crée le fichier
                    Files.writeString(msgClearPath, contenuDecrypt + System.lineSeparator(), StandardOpenOption.CREATE, StandardOpenOption.APPEND);
                } catch (IOException e) {
                    e.printStackTrace();
                }
            }
            System.out.println("Message: " + msgClearPath.toString());
        }

        else {
            try {
                //Lis le contenu du fichier
                this.msgClear = Files.readAllLines(msgClearPath);
            } catch (IOException e) {
                e.printStackTrace();
            }

            for (String contenu : msgClear) {
                //lance la méthode de cryptage dans le transcoder
                String contenuCrypt = transcoder.crypte(contenu);
                try {
                    //Crée le fichier
                    Files.writeString(msgClearEncoded, (contenuCrypt + System.lineSeparator()), StandardOpenOption.CREATE,StandardOpenOption.APPEND);
                } catch (IOException e) {
                    e.printStackTrace();
                }
            }
            System.out.println("Message crypté: " + msgClearEncoded.toString());

        }
    }
}