<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detailwisata extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DetailwisataModel', 'Model');
        $this->load->model('KecamatanModel');
    }

    public function index()
    {
        $datacontent['url'] = 'admin/Detailwisata';
        $datacontent['title'] = 'Halaman Detail wisata';
        $datacontent['datatable'] = $this->Model->get();
        $data['content'] = $this->load->view('admin/detailwisata/tableView', $datacontent, TRUE);
        $data['title'] = $datacontent['title'];
        $this->load->view('admin/layouts/html', $data);
    }
    public function form($parameter = '', $id = '')
    {
        $datacontent['url'] = 'admin/Detailwisata';
        $datacontent['parameter'] = $parameter;
        $datacontent['id'] = $id;
        $datacontent['title'] = 'Form Edit Wisata';
        $data['content'] = $this->load->view('admin/detailwisata/formView', $datacontent, TRUE);
        $data['js'] = $this->load->view('admin/detailwisata/js/formJs', $datacontent, TRUE);
        $data['title'] = $datacontent['title'];
        $this->load->view('admin/layouts/html', $data);
    }
    public function simpan()
    {
        if ($this->input->post()) {
            $data = [
                'id_detailwisata' => $this->input->post('id_detailwisata'),
                'nm_wisata' => $this->input->post('nm_wisata'),
                'id_kecamatan' => $this->input->post('id_kecamatan'),
                'foto' => $this->input->post('foto'),
                'keteranganwisata' => $this->input->post('keteranganwisata'),

            ];
            // upload
            if ($_FILES['foto']['name'] != '') {
                $upload = upload('foto', 'foto', 'image');
                if ($upload['info'] == true) {
                    $data['foto'] = $upload['upload_data']['file_name'];
                } elseif ($upload['info'] == false) {
                    $info = '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Error!</h4> ' . $upload['message'] . ' </div>';
                    $this->session->set_flashdata('info', $info);
                    redirect('admin/detailwisata');
                    exit();
                }
            }
            // upload

            if ($_POST['parameter'] == "tambah") {
                $this->Model->insert($data);
            } else {
                $this->Model->update($data, ['id_detailwisata' => $this->input->post('id_detailwisata')]);
            }
        }
        redirect('admin/detailwisata');
    }

    public function liat($parameter = '', $id = '')
    {

        $datacontent['url'] = 'admin/Detailwisata';
        $datacontent['parameter'] = $parameter;
        $datacontent['id'] = $id;
        $datacontent['title'] = 'Form Detail Wisata';
        $data['content'] = $this->load->view('admin/detailwisata/formIsi', $datacontent, TRUE);
        $data['js'] = $this->load->view('admin/detailwisata/js/formJs', $datacontent, TRUE);
        $data['title'] = $datacontent['title'];
        $this->load->view('admin/layouts/html', $data);
    }

    public function hapus($id = '')
    {
        // hapus file di dalam folder
        $this->db->where('id_detailwisata', $id);
        $get = $this->Model->get()->row();
        $marker = $get->marker;
        unlink('assets/unggah/marker/' . $marker);
        // end hapus file di dalam folder
        $this->Model->delete(["id_detailwisata" => $id]);
        redirect('admin/Detailwisata');
    }
}
