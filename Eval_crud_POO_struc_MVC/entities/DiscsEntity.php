<?php



class DiscsEntity extends Model {

    public string $id;
    public string $disc_title;
    public int $artist_id;
    public int $disc_year;
    public string $disc_genre;
    public string $disc_label;
    public string $disc_price;
    public string $disc_picture;


    //Fonction id
    public function getId(): int
    {
        return $this->id;
    }

    //Fonction title
    public function getDiscTitle(): string
    {
        return $this->disc_title;
    }

    public function setDiscTitle(string $title) {
        $this->disc_title = $title;
        return $this;
    }

    // Fonction artist ID
    public function getArtist(): int
    {
        return $this->artist_id;
    }

    public function setArtist(int $artist_id)
    {
        $this->artist_id = $artist_id;
        return $this;
    }

    //fonction year
    public function getYear(): int
    {
        return $this->disc_year;
    }

    public function setYear(int $disc_year)
    {
        $this->disc_year = $disc_year;
        return $this;
    }

    //Fonction genre
    public function getGenre(): string
    {
        return $this->disc_genre;
    }

    public function setGenre(string $disc_genre)
    {
        $this->disc_genre = $disc_genre;
        return $this;
    }

    //Fonction lable
    public function getLabel(): string
    {
        return $this->disc_label;
    }

    public function setLabel(string $disc_label)
    {
        $this->disc_label = $disc_label;
        return $this;
    }

    //fonction prix
    public function getDiscPrice(): string
    {
        return $this->disc_price;
    }

    public function setDiscPrice(string $disc_price)
    {
        $this->disc_price = $disc_price;
        return $this;
    }

    //fonction picture
    public function getDiscPicture(): string
    {
        return $this->disc_picture;
    }

    public function setDiscPicture(string $disc_picture)
    {
        $this->disc_picture = $disc_picture;
        return $this;
    }


}