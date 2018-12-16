<?php
class Jajaran_genjang extends CI_Model {
   
    //atribut model
    private $alas;
    private $tinggi;
    private $sisiA;
    private $sisiB;

    //metode untuk menentukan nilai
    public function set_alas($a) {
        $this->alas = $a;
    }
    public function set_tinggi($t) {
        $this->tinggi = $t;
    }
    public function set_sisiA($sa) {
        $this->sisiA = $sa;
    }
    public function set_sisiB($sb) {
        $this->sisiB = $sb;
    }

    //metode untuk mengambil nilai
   public function get_alas(){
       return $this->alas;
   }
   public function get_tinggi(){
       return $this->tinggi;
   }
   public function get_sisiA(){
       return $this->sisiA;
   }
   public function get_sisiB(){
       return $this->sisiB;
   }


    //metode untuk menghitung luas Jajaran Genjang
    //rumus luas lingkaran = Alas * Tinggi
    public function hitung_luas (){
        Return $this->alas * $this->tinggi;
    }

    //metode untuk menghitung keliling Jajaran genjang
    //rumus Keliling jajaran genjang = 2 * (sisiA + sisiB)
    public function hitung_keliling(){
        Return 2 * ($this->sisiA + $this->sisiB);
    }

}
?>