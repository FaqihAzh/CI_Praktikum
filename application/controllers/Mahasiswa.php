<?php
class Mahasiswa extends CI_Controller{
    // membbuat method index
    public function index(){
        $this->load->model('mahasiswa_model','mhs1');

        // buat objek model 1 dan nilainya
        $this->mhs1->id=1;
        $this->mhs1->nim='0111';
        $this->mhs1->nama='Amirul';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.85;

        $this->load->model('mahasiswa_model', 'mhs2');

        // buat objek model 2 dan nilainya
        $this->mhs2->id=2;
        $this->mhs2->nim='0222';
        $this->mhs2->nama='nurul';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.45;

        // simpan objek yang kita buat diatas ke dalam array
        $list_mhs = [$this->mhs1, $this->mhs2];
        // siapkan data untuk dikirim kedalam view, dimana data nya diambil dari objek yang kita buat
        $data['list_mhs'] = $list_mhs;
        // render data dan kirim data kedalam view
        $this->load->view('mahasiswa/index', $data);
    }     
    // Method Dosen
    public function dosen(){
        $this->load->model('dosen_model','ds1');
        // buat objek dosen1
        $this->ds1->nidn='011';
        $this->ds1->pendidikan='S1';

        $this->load->model('dosen_model','ds2');
        // buat objek dosen2
        $this->ds2->nidn='012';
        $this->ds2->pendidikan='S2';

        $this->load->model('dosen_model','ds3');
        // buat objek dosen1
        $this->ds3->nidn='013';
        $this->ds3->pendidikan='S3';

        $list_ds = [$this->ds1, $this->ds2, $this->ds3];
        $data2['list_ds'] = $list_ds;
        $this->load->view('mahasiswa/dosen', $data2);
    }
    // Method Matakuliah
    public function matakuliah(){
        $this->load->model('dosen_model', 'mk1');
        // buat objek matakuliah1
        $this->mk1->nama='Pemweb';
        $this->mk1->sks='3';
        $this->mk1->kode='PW2';

        $list_mk = [$this->mk1];
        $data3['list_mk'] = $list_mk;
        $this->load->view('mahasiswa/matakuliah', $data3);
    }
}
?>