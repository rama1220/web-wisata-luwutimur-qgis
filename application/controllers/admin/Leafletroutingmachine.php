<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Leafletroutingmachine extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('WisataModel');
		$this->load->model('KecamatanModel');
	}

	public function index()
	{
		$datacontent['url'] = 'admin/leafletroutingmachine';
		$datacontent['title'] = 'Halaman Leaflet Routing Machine';
		$data['content'] = $this->load->view('admin/leafletroutingmachine/mapView', $datacontent, TRUE);
		$data['js'] = $this->load->view('admin/leafletroutingmachine/js/mapJs', $datacontent, TRUE);
		$data['title'] = $datacontent['title'];
		$this->load->view('admin/layouts/html', $data);
	}
}
