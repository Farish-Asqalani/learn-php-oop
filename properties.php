<?php 
require_once "data/Murid.php";

$data = new Murid();
// untuk memanipulasi properties itu sama seperti kita memanipulasi variable
// untuk mengakses proeprties/field kita bisa menggunakan kata kunci -> setelah nama object
// dan diikuti dengan nama properties nya
$data->nama = "Farish";
$data->kelas = "11";
$data->jurusan = "PPLG";

// var_dump($data);
echo PHP_EOL;

echo "Nama : ". $data->nama. PHP_EOL;
echo "kelas : ". $data->kelas. PHP_EOL;
echo "jurusan : ". $data->jurusan. PHP_EOL;

$data2 = new Murid();
$data2->nama = "Lana";
$data2->kelas = "11";
$data2->jurusan = "PPLG";

// var_dump($data2);

echo "Nama : ". $data2->nama. PHP_EOL;
echo "kelas : ". $data2->kelas. PHP_EOL;
echo "jurusan : ". $data2->jurusan. PHP_EOL;