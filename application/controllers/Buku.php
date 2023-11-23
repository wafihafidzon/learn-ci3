<?php
class Buku extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Buku');
    }

    public function index() {
        $this->select();
    }

    public function select() {
        $data['judul'] = "Data Buku Perpustakaan";
        $data['buku'] = $this->M_Buku->Tampil();
        $this->load->view('template/header', $data);
        $this->load->view('buku/view_data', $data);
        $this->load->view('template/footer');
    }

    public function tambah() {
        $data['judul'] = "Tambah Data Buku Perpustakaan";
        $this->load->view('template/header', $data);
        $this->load->view('buku/form_tambah');
        $this->load->view('template/footer');
    }

    public function insert() {
        $judul = $this->input->post('judul');
        $penerbit = $this->input->post('penerbit');
        $pengarang = $this->input->post('pengarang');
        $this->M_Buku->save($judul, $penerbit, $pengarang);
        redirect('buku');
    }

    public function get_edit($id) {
        $hasil = $this->M_Buku->pilih_buku($id);
        $data = array(
            'judul' => $hasil['judul'],
            'penerbit' => $hasil['penerbit'],
            'pengarang' => $hasil['pengarang'],
            'idbuku' => $id
        );
        $this->load->view('template/header', $data);
        $this->load->view('buku/form_ubah', $data);
        $this->load->view('template/footer');
    }

    public function update() {
        $id = $this->input->post('idbuku');
        $judul = $this->input->post('judul');
        $penerbit = $this->input->post('penerbit');
        $pengarang = $this->input->post('pengarang');
        $this->M_Buku->edit($id, $judul, $penerbit, $pengarang);
        redirect('buku');
    }

    public function hapus($id) {
        $this->M_Buku->delete($id);
        redirect('buku');
    }
}
?>
