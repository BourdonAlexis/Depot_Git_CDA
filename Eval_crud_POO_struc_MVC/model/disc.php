<?php

class disc extends DiscsEntity
{

    public function __construct()
    {
        $this->table = 'disc';
        $this->getConnection();
    }

    /**
     * récupération de toutes les données des voiture
     * @return array
     */
    public function getDiscInformations(): array
    {
        $query = 'SELECT ' . $this->table . '.`id`, `disc_title`, `disc_year`,`artist_name`, `disc_picture` , `disc_label` , `disc_genre`,`disc_price`,`artist_id` FROM ' . $this->table . ' INNER JOIN `artist` ON ' . $this->table . '.`artist_id` = `artist`.`id`';
        $result = $this->_con->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_OBJ);

    }

    /**
     * récupération des données d'une voiture selon son id
     * @param $id
     * @return mixed
     */
    public function getOneDiscById($id)
    {
        $query = 'SELECT ' . $this->table . '.`id`, `disc_title`, `disc_year`, `disc_picture` , `disc_label` , `disc_genre`,`disc_price`,`artist_id` FROM ' . $this->table . ' INNER JOIN `artist` ON ' . $this->table . '.`artist_id` = `artist`.`id` WHERE ' . $this->table . '.`id` = :id';
        $result = $this->_con->prepare($query);
        $result->bindValue(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_OBJ);
    }

    /**
     * modification des données dans la table voiture
     * @param $id
     * @return bool
     */
    public function updateDisc($id): bool
    {
        // a remettre dans la requête quand upload image fait : , `disc_picture` = :picture
        $query = 'UPDATE ' . $this->table . ' SET `disc_title` = :title, `artist_id` = :artist, `disc_year` = :year  , `disc_label` = :label , `disc_genre` = :genre , `disc_price` = :price , `disc_picture` = :picture WHERE `id` = :id';
        $result = $this->_con->prepare($query);
        $result->bindValue(':title', $this->disc_title, PDO::PARAM_STR);
        $result->bindValue(':year', $this->disc_year, PDO::PARAM_INT);
        $result->bindValue(':genre', $this->disc_genre, PDO::PARAM_STR);
        $result->bindValue(':label', $this->disc_label, PDO::PARAM_STR);
        $result->bindValue(':price', $this->disc_price, PDO::PARAM_STR);
        $result->bindValue(':picture', $this->disc_picture, PDO::PARAM_STR);
        $result->bindValue(':artist', $this->artist_id, PDO::PARAM_INT);
        $result->bindValue(':id', $id, PDO::PARAM_INT);
//        var_dump($this);
//        die();
        return $result->execute();
    }

    /**
     * ajout de données dans la table voiture
     * @return bool
     */
    public function addDisc(): bool
    {
        $query = 'INSERT INTO  `disc`(`disc_title`,`disc_year`,`disc_genre`,`disc_label`,`disc_price`,`artist_id`,`disc_picture`) VALUES (:disc_title,:disc_year,:disc_genre,:disc_label,:disc_price,:artist_id,:disc_picture)';
        $result = $this->_con->prepare($query);
        $result->bindValue(':disc_title', $this->disc_title, PDO::PARAM_STR);
        $result->bindValue(':disc_year', $this->disc_year, PDO::PARAM_INT);
        $result->bindValue(':disc_genre', $this->disc_genre, PDO::PARAM_STR);
        $result->bindValue(':disc_label', $this->disc_label, PDO::PARAM_STR);
        $result->bindValue(':disc_price', $this->disc_price, PDO::PARAM_STR);
        $result->bindValue(':disc_picture', $this->disc_picture, PDO::PARAM_STR);
        $result->bindValue(':artist_id', $this->artist_id, PDO::PARAM_INT);

        return $result->execute();

    }

    /**
     * Suppression d'une ligne de la table voiture
     * @param $id
     * @return bool
     */
    public function delDisc($id): bool
    {
        $query = 'DELETE FROM `disc` WHERE `id` = :id';
        $result = $this->_con->prepare($query);
        $result->bindValue(':id', $id, PDO::PARAM_STR);
        return $result->execute();
    }
}