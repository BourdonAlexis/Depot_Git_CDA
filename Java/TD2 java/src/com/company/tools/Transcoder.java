package com.company.tools;


import org.germain.tool.ManaBox;


import java.sql.SQLOutput;
import java.util.Map;
import java.util.HashMap;
import org.apache.commons.lang3.StringUtils;

public class Transcoder {

//    HashMap stocke des paires clé/valeur
//    De chaine à caractere
    private Map<String,Character> decrypte = new HashMap<String, Character>();
    //    De caractère à chaine
    private Map<Character,String> crypte = new HashMap<Character, String>();

    private Map<Character,String> getDecrypte() { return crypte; }
    public Map<String,Character> getCrypte() { return decrypte; }

    //constructeur de transcoder
    //Y générer les maps

    /**
     *
     * @param KeyCrypted
     */
    public Transcoder(String KeyCrypted) {
      String Key = ManaBox.decrypt(KeyCrypted);
      //toCharArray() convertit la chaîne donnée en une séquence de caractères. La longueur du tableau retourné est égale à la longueur de la chaîne.
        char[] tab = Key.toCharArray();
        char letter1 = 'A';
        char letter2 = 'A';
        for(char test : tab){
            //string valueOf () convertit différents types de valeurs en chaîne
            crypte.put(test, String.valueOf(letter1)+String.valueOf(letter2));
            decrypte.put(String.valueOf(letter1)+String.valueOf(letter2),test);
            // si letter2 différent de Z on ajout 1 exemple A + 1 = B
            if (letter2 != 'Z'){
                letter2++;
            }
            //sinon letter1 ++ et ont réinitialise letter 2 à A pour revérifier toutes les letter2 avec la nouvelle letter1
            else {
                letter1++;
                letter2 = 'A';
            }

        }
        System.out.println(crypte);
        System.out.println(decrypte);
    }


    // Methode encodage

    /**
     *
     * @param msg
     * @return
     */
    public String crypte(String msg){
        // sert à retirer tout les accents d'une chaine
      msg = StringUtils.stripAccents(msg);
      //convertir un tableau de chaînes de caractères
      char[] TabMsg = msg.toCharArray();
      //Crée une chaine modifiable à tout moment (permet d'être surchargé)
      StringBuffer msgResult = new StringBuffer();
      for(char test : TabMsg){
          //append ajoute la chaîne spécifiée à cette séquence de caractères
          msgResult.append(crypte.get(test));
      }
      //Renvoie la chaine de caractere
        System.out.println(msgResult);
        return msgResult.toString() ;

    }

    //methode decodage

    /**
     *
     * @param msg
     * @return
     */
    public String decrypte(String msg) {
        //reprend le message crypté (haut dessus)
        StringBuffer msgResult = new StringBuffer();
        //Reprend le tableau de charactere "TabMsg" le met dans un tableau chaine et le renvoie en chaine msg longueur/2
        String[] TabMsg = new String[msg.length() / 2];
        int x = 0;

        for (int i = 0; i < msg.length(); i++) {
            //La méthode substring() retourne une sous-chaîne de la chaîne courante, entre un indice de début et un indice de fin.
            TabMsg[x] = msg.substring(i, i + 2);
            x++;
            i++;
        }

        for(String test : TabMsg) {
            //append ajoute la chaîne spécifiée à cette séquence
            msgResult.append(decrypte.get(test));
        }
        System.out.println(msgResult);

        return msgResult.toString();
    }

}


