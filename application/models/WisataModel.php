<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WisataModel extends CI_Model
{
    function get()
    {
        $data = $this->db->select('*')
            ->from('t_wisata a')
            ->join('m_kecamatan b', 'a.id_kecamatan=b.id_kecamatan', 'LEFT')
            ->join('m_kategori_wisata c', 'a.id_kategori_wisata=c.id_kategori_wisata', 'LEFT')
            ->get();
        return $data;
    }
    function insert($data = array())
    {
        $this->db->insert('t_wisata', $data);
        $info = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4> Data Sukses Ditambah </div>';
        $this->session->set_flashdata('info', $info);
    }
    function insert_batch($data = array())
    {
        $this->db->insert_batch('t_wisata', $data);
        $info = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4> Data Sukses Ditambah </div>';
        $this->session->set_flashdata('info', $info);
    }
    function update($data = array(), $where = array())
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        $this->db->update('t_wisata', $data);
        $info = '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Sukses!</h4> Data Sukses diubah </div>';
        $this->session->set_flashdata('info', $info);
    }
    function delete($where = array())
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        $this->db->delete('t_wisata');
        $info = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4> Data Sukses dihapus </div>';
        $this->session->set_flashdata('info', $info);
    }
}
