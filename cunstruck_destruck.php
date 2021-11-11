<?php
// buat class mobil
class data {
  
   private $nama;
   private $tempattinggal;
   private $tanggallahir;
  
   // constructor sebagai pembuat nilai awal
   public function __construct($nama, $tempat_tinggal, $tanggal_lahir) {
     $this->nama = $nama;
     $this->tempat_tinggal = $tempat_tinggal;
     $this->tanggal_lahir = $tanggal_lahir;
   }
  
   public function data_diri() {
     return "Data diri $this->nama $this->tempat_tinggal $this->tanggal_lahir .lengkap";
   }
}
  
// buat objek dari class mobil (instansiasi)
$data_budi = new data("Budi,", "sukabumi,", "2 agustus 2000");
  
echo $data_budi->data_diri();
echo "<br>";
  
$data_dina = new data("Dina,", "sukabumi,", "22 maret 2001");
  
echo $data_dina->data_diri();

?>