package com.company.test;


import com.company.tools.Transcoder;
import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Test;

import java.sql.SQLOutput;

public class test {
    //Methode decrypte
    @Test
    public void decrypte(){
        String keyCrypted = "6Qe0IsEEH1utWRe7UKzGMiDTytOB3HS1dEfIB4imna3IRHXHRn5ZrvKFEcPjmPgKYGuytG+gDAl1m2DdHalJQg==";
        Transcoder transcoder = new Transcoder(keyCrypted);
        String msgCode = "BYAPASBNBGAPASBGASBNASAFBHBGBNAHAJBNAZAFBLADBNAPASASAJAMAPADBNBJBJBJ";
        Assertions.assertEquals("Les tests sont la pour essayer !!!",transcoder.decrypte(msgCode));
    }

    //Methode crypte
    @Test
    public void crypte(){
        String keyCrypted = "6Qe0IsEEH1utWRe7UKzGMiDTytOB3HS1dEfIB4imna3IRHXHRn5ZrvKFEcPjmPgKYGuytG+gDAl1m2DdHalJQg==";
        Transcoder transcoder = new Transcoder(keyCrypted);
        String msgDecode = "Les tests sont la pour essayer !!!";
        Assertions.assertEquals("BYAPASBNBGAPASBGASBNASAFBHBGBNAHAJBNAZAFBLADBNAPASASAJAMAPADBNBJBJBJ",transcoder.crypte(msgDecode));
    }





}
