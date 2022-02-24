<?php
Class Model_select extends CI_Model
{
    function Level_satu()
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->from('reg_provinces')->get()->result();
    }

    function Level_dua($id)
    {
        $this->db->where('id_induk_wilayah', $id);
        $this->db->order_by('id_wil', 'ASC');
        return $this->db->from('data_wilayah_new')->get()->result();
    }
    function Level_tiga($id)
    {
        $this->db->where('id_induk_wilayah', $id);
        $this->db->order_by('id_wil', 'ASC');
        return $this->db->from('data_wilayah_new')->get()->result();
    }
    function Level_empat($id)
    {
        $this->db->where('id_induk_wilayah', $id);
        $this->db->order_by('id_wil', 'ASC');
        return $this->db->from('data_wilayah_new')->get()->result();
    }

    function Pilih_pengajar($id)
    {
        $this->db->select('*');
		$this->db->from('kelas');
		$this->db->join('program', 'program.prog_id = kelas.prog_id');
		$this->db->where(['kelas.jenis_kelamin' => $id, 'kelas.rq_id' => 1]);
		return $this->db->get()->result();
        
        // $this->db->where('jenis_kelamin', $id);
        // $this->db->order_by('nama_ketua', 'ASC');
        // return $this->db->from('kelas')->get()->result();
    }

}
?>