<?php

echo "<pre>";

require_once 'Book.php';
require_once 'Member.php';
require_once 'DigitalBook.php';

$buku1 = new Book("Pelangi", "Joko");
$buku2 = new Book("Dilan 1993", "Iqbal.R");
$bukuDigital = new DigitalBook("Belajar PHP OOP", "Admin", 5);

$member1 = new Member("Rama Wahyu");
$member2 = new Member("Budi");

echo "=== INFORMASI BUKU ===\n";
$buku1->info();
$buku2->info();
$bukuDigital->info();

echo "\n=== NAMA PEMINJAM ===\n";
$member1->info();
$member2->info();

echo "\n=== Alur PEMINJAMAN ===\n";
$member1->pinjam($buku1);
$member2->pinjam($buku1);
$member2->pinjam($buku2);
$member1->pinjam($bukuDigital);

echo "\n=== STATUS AKHIR BUKU ===\n";
$buku1->info();
$buku2->info();
$bukuDigital->info();

echo "</pre>";