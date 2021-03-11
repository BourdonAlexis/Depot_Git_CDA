<?php


class Artist extends Model
{
    public function __construct()
    {
        $this->table = 'artist';
        $this->getConnection();
    }
}