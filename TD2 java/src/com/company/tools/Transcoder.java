package com.company.tools;


import org.germain.tool.ManaBox;

import java.security.Key;
import java.util.Map;
import java.util.HashMap;

public class Transcoder {

//    HashMap stocke des paires clé/valeur
//    De chaine à caractere
    private Map<String,Character> crypte = new HashMap<String, Character>();

    //    De caractère à chaine
    private Map<Character,String> decrypte = new HashMap<Character, String>();

    private Map<Character,String> getDecrypte() {
        return decrypte;
    }

    private Map<String,Character> getCrypte() {
        return crypte;
    }

    //constructeur de transcoder
    //Y générer les maps
    public Transcoder(String KeyCrypted) {
      String Key = ManaBox.decrypt(KeyCrypted);
      //toCharArray() convertit la chaîne donnée en une séquence de caractères. La longueur du tableau retourné est égale à la longueur de la chaîne.
        char[] tab = Key.toCharArray();
        char letter1 = 'A';
        char letter2 = 'A';
        for(char test : tab){
            HashMap.put(test,letter1.toString()+letter2.toString());
        }
    }

    // Methode encodage
    public String encode(String msg){
        // méthode qui prend une string codée et qui renvoie
        // une string codée
    }

    //methode decodage
    public String decode(String msg){
        // méthode qui prend une string et qui renvoie
        // une string décodée
    }

}


