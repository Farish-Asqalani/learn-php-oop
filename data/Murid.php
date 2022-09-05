<?php 

// untuk membuat class didalam php kita bisa menggunakan kata kunci class

class Murid 
{
// properties adalah data yang bisa kita sisipkan kedalam object
// membuat field sama seperti saat kita membuat variable
// namun ditempatkan didalam class dan diawali dengan kata kunci var

// properties type declaration
// kita bisa membuat type declaration dengan menambahkan
// kata kunci tipe data setelah var dan sebelum properties
    var string $nama;
    var string $kelas;
    var string $jurusan;
    
    // jika ingin membuat properties memiliki value null kita bisa menggunakan ?didepan tipe datanya
    function sapaan(?string $nama) {
        if(is_null($nama)) {
            echo "Hi my name is $this->nama". PHP_EOL;
        } else {
            echo "Hi $nama, my name is $this->nama". PHP_EOL;
        }
    }

}
 