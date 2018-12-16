<?php

class Pengguna_model extends CI_Model {
public $pengguna_id;
public $pengguna_nama;
public $pengguna_sandi;

public $labels=[];

public function __construct() {
    parent::__construct();
    $this->labels = $this->_attributeLabels();

    //memuat library database
    $this->load->database();
}
// metode untuk menambah baris data ke dalam table
public function insert() {
    $sql = sprintf ("INSERT INTO pengguna", 
    "VALUES ('%S','%S','PASSWORD('%S'))",
    $this->pengguna_id,
    $this->pengguna_nama,
    $this->pengguna_sandi
    );
    $this->db->query($sql);
}
//metode untuk mengubah baris data ke dalam table
public function update() {
    $sql = sprintf ("UPDATE pengguna SET pengguna_nama='%s',".
    "pengguna_password=PASSWORD('%s'))".
    "WHERE pengguna_id='%s'",
    $this->pengguna_nama,
    $this->pengguna_sandi,
    $this->pengguna_id);
    $this->db->query($sql);
}
//metode untuk meghapus baris data ke dalam table
public function delete() {
    $sql = sprintf ("DELETE FROM pengguna".
    "WHERE pengguna_id='$s'",
    $this->pengguna);
    $this->db->query($sql);
}
//Metode untuk melakukan otentikasi user
public function otentikasi() {
    $sql = sprintf ("SELECT COUNT(*) AS cnt FROM pengguna ".
    "WHERE pengguna_id='%s' AND ".
    "pengguna_sandi=PASSWORD('%s')",
    $this->pengguna_id,
    $this->pengguna_sandi);

    $query=$this->db->query($sql);
    $row = $query->row_array();
    return $row['cnt'] == 1;
}
private function _attributeLabels() {
    return [
        'pengguna_id' => 'ID User :',
        'pengguna_nama' => 'Nama User :',
        'pengguna_sandi' => 'Password :'
    ];
}
}
