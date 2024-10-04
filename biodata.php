<?php
require_once 'BiodataPage.php'; 

$biodataPage = new BiodataPage(
    "Muhammad Bayu Andhika Putra",
    "223443017",
    "Bandung, 11 Desember 2004",
    "Laki-Laki",
    "Islam",
    "Indonesia",
    "08987182309",
    "mbayuandhika12@gmail.com",
    "komp permata biru"
);

$biodataPage->render();
?>
