<?php

  class Movie{
    public $title;
    public $author;
    private $genres;

    public function __construct($_title, $_author){
      // nel costruttore valorizzo tutte le proprietà che reputo essere obbligatorie
      $this->title = $_title;
      $this->author = $_author;
    }

    public function setGenre($_genre){
       $this->genres = $_genre;
    }

    public function getGenre(){
      return $this->genres;
    }

  }




?>