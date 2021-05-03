package com.company.model;

import com.company.tools.Transcoder;

import java.nio.file.Path;
import java.util.List;

public class Message {
    //encoded un booléen qui dit si le message est encodé ou non
    private boolean encoded;
    //msgClear, msgEncodded deux listes de chaines qui correspondent aux messages que l'on aura découpé en lignes.
    private List<String> msgClear;
    private List<String> msgEncoded;
    private Path msgClearPath;
    private Path msgClearEncoded;
    private Path KeyPath;
    private String Key;
    private Transcoder transcoder;

    public Message(boolean encoded, Path msgClearPath, Path msgClearEncoded, Path keyPath, String key, Transcoder transcoder) {
        this.encoded = encoded;
        this.msgClearPath = msgClearPath;
        this.msgClearEncoded = msgClearEncoded;
        this.KeyPath = keyPath;
        this.Key = key;
        this.transcoder = transcoder;
    }
}
