<?php
class Mahasiswa_model extends CI_Model{
    // buat property atau variabel
    public $id, $nama, $gender, $tmp_lahir,$tgl_lahir,$ipk;

    public function predikat(){
        // contoh ternary operator
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
}
?>