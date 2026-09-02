<?php

require_once 'Book.php';

class DigitalBook extends Book {
    public $fileSize;

    public function __construct($title, $author, $fileSize) {
        parent::__construct($title, $author);
        $this->fileSize = $fileSize;
    }

    // Override info untuk buku digital
    public function info() {
        $status = $this->isAvailable ? "Tersedia" : "Dipinjam";
        echo "Buku Digital: $this->title ($this->author) - Size: {$this->fileSize}MB - Status: $status\n";
    }
}