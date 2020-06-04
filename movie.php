<?php
/**
 * MOVIE CLASS
 */
class Movie {
    public $title;
    public $movieDirector;
    public $actors;
    public $genre;
    //construct
    public function __construct($_title, $_movieDirector, $_actors, $_genre) {
        $this->title = $_title;
        $this->movieDirector = $_movieDirector;
        $this->actors = $_actors;
        $this->genre = $_genre;
    }
}
?>