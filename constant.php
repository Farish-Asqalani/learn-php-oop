<?php 
require "data/Murid.php";

// dalam versi php terbaru untuk membuat variable constant tidak diperlukan lagi menggunakana define() tapi bisa menggunakan cosnt

// contoh
const nama = "farish";

// untuk memanggil constant kita menggunakan nama class itu sendiri dengan kata kunci :: NAMA CONSTANT
echo Murid::AUTHOR. PHP_EOL;