<?php

class Book {
    public $title;
    public $author;
    public $isAvailable = true;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function info() {
        $status = $this->isAvailable ? "Tersedia" : "Dipinjam";
        echo "Buku: $this->title ($this->author) - Status: $status\n";
    }
}