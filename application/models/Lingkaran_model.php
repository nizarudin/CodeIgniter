<?php
class Lingkaran_model extends CI_Model {
    //mendefinisikan konstanta untuk PI
    Const PI = 3.14;

    //atribut model
    private $radius;

    //metode untuk menentukan nilai $radius
    public function set_radius($r) {
        $this->radius = $r;
    }

    //metode untuk mengambil nilai $radius
   public function get_radius(){
       return $this->radius;
   }

    //metode untuk menghitung luas lingkaran
    //rumus luas lingkaran = 3.14 x jari-jari x jari-jari
    public function hitung_luas (){
         return self::PI * $this->radius * $this->radius;
    }

    //metode untuk menghitung keliling lingkaran
    public function hitung_keliling(){
         return 2 * self::PI *$this->radius;
    }

}
?>