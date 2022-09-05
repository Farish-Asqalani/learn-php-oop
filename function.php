<?php 
require_once "data/Murid.php";

$farish = new Murid();
$farish->nama = "Farish";
$farish->sapaan("Lana");

$lana = new Murid();
$lana->nama = "lana";
$lana->sapaan(null);

$farish->info();
echo PHP_EOL;
$lana->info();