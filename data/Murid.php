<?php 

class Murid 
{
    var string $nama;
    var string $kelas;
    var string $jurusan;

    function sapaan(?string $nama) {
        if(is_null($nama)) {
            echo "Hi my name is $this->nama". PHP_EOL;
        } else {
            echo "Hi $nama, my name is $this->nama". PHP_EOL;
        }
    }

}
 
// jika ingin membuat properties memiliki value null kita bisa menggunakan ?didepan tipe datanya