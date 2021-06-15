package org.client.classe;


import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class ClientDAO {
    private final String url;
    private final String userName;
    private final String password;

    public ClientDAO() {
        this.url = "jdbc:mysql://localhost:3306/hotel?serverTimezone=UTC";
        this.userName = "root";
        this.password = "80010";
    }

    public void insert(Client cli) {
        // méthode d'insertion
        try {
            //param de connection
            Connection con = DriverManager.getConnection(url, "root", "80010");
            //commande d'insertion
            PreparedStatement statement = con.prepareStatement("INSERT INTO client (cli_nom, cli_prenom, cli_ville) VALUES (?, ?, ?)");
            //récup les infos en get depuis client (getters)
            statement.setString(1, cli.getNom());
            statement.setString(2, cli.getPrenom());
            statement.setString(3, cli.getVille());

            statement.execute();

            statement.close();
            con.close();
            System.out.println("Insertion");

        }
        catch (Exception e) {
            //message erreur
            System.out.println("Erreur insertion");
            System.out.println(e.getMessage());
        }
    }

    public void update(Client cli) {
        // méthode d'édition
        try {
            //Connexion à la bdd
            Connection con = DriverManager.getConnection(url, userName ,password);
            //requête sql
            PreparedStatement statement = con.prepareStatement("UPDATE client SET cli_nom = ?, cli_prenom = ?, cli_ville = ? WHERE cli_id = ?;");
            //Récup les nom grace getter dans Client
            statement.setString(1, cli.getNom());
            statement.setString(2, cli.getPrenom());
            statement.setString(3, cli.getVille());
            statement.setInt(4, cli.getId());

            statement.execute();

            statement.close();
            con.close();

        }
        //Si erreur
        catch (Exception e) {
            System.out.println("Erreur Modif");
            System.out.println(e.getMessage());
        }
    }

    public void delete(Client cli) {
        // méthode de suppression
        try {
            //connexion à la bdd
            Connection con = DriverManager.getConnection(url, userName ,password);
            //requête sql
            PreparedStatement statement = con.prepareStatement("DELETE FROM client WHERE cli_id = ?;");
            //récup l'id
            statement.setInt(1, cli.getId());

            statement.execute();

            statement.close();
            con.close();
            System.out.println("la suppression s’est bien effectuée");

        }
        //Si erreur
        catch (Exception e) {
            System.out.println("Erreur lors de la suppression 'client': ce client a des réservations en cours!");
            System.out.println(e.getMessage());
        }
    }

    //affichage de la liste des client
    public List<Client> liste(){
        //methode liste
        //Creation de la liste client
        List<Client> resultat = new ArrayList<Client>();
        //test la connection
        try {
            //param connection
            Connection con = DriverManager.getConnection(url, userName ,password);
            Statement statement = con.createStatement();
            //requête sql
            ResultSet resultSet = statement.executeQuery("SELECT * FROM client");
            System.out.println ("ça marche ");

//            while (resultSet.next()){
//                System.out.println("id: "+resultSet.getInt("hot_id"));
//                System.out.println("nom: "+resultSet.getString("hot_nom"));
//
//            }
            //boucle affichage des infos
            while (resultSet.next()) {
                Client c = new Client();
                c.setId(resultSet.getInt("cli_id"));
                c.setNom(resultSet.getString("cli_nom"));
                c.setPrenom(resultSet.getString("cli_prenom"));
                c.setVille(resultSet.getString("cli_ville"));
                resultat.add(c);
            }

            statement.close();
            resultSet.close();
            con.close();
        //si erreur
        } catch (SQLException e) {
            e.printStackTrace();
            System.out.println ("la connexion a échoué");
        }

        return resultat;
    }

}
