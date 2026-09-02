<?php

class Member {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function pinjam($book) {
        if ($book->isAvailable) {
            $book->isAvailable = false;
            echo "-> $this->name BERHASIL meminjam: $book->title\n";
        } else {
            echo "-> $this->name GAGAL meminjam: $book->title (Sedang dipinjam)\n";
        }
    }

    public function info() {
        echo "Member: $this->name\n";
    }
}