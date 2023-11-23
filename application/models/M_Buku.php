<?php
class M_Buku extends CI_Model {

    public function Tampil() {
        $query = $this->db->get('tblbuku');
        return $query->result();
    }

    public function save($judul, $penerbit, $pengarang) {
        $data = array(
            'judul' => $judul,
            'penerbit' => $penerbit,
            'pengarang' => $pengarang
        );
        $this->db->insert('tblbuku', $data);
    }

    public function pilih_buku($id) {
        $query = $this->db->get_where('tblbuku', array('id' => $id));
        return $query->row_array();
    }

    public function edit($id, $judul, $penerbit, $pengarang) {
        $data = array(
            'judul' => $judul,
            'penerbit' => $penerbit,
            'pengarang' => $pengarang
        );
        $this->db->where('id', $id);
        $this->db->update('tblbuku', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('tblbuku');
    }
}
?>
