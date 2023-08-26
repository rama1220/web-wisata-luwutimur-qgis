<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$datacontent['title'] = 'Halaman Beranda';
		$data['content'] = $this->load->view('website/berandaView', $datacontent, TRUE);
		$data['title'] = 'Selamat Datang di Beranda';
		$this->load->view('website/layouts/head', $data);
		$this->load->view('website/layouts/header', $data);
		$this->load->view('website/berandaView', $data);


		$datacontent['title'] = 'Maps';
		$data['content'] = $this->load->view('admin/leafletroutingmachine/mapView', $datacontent, TRUE);
		$data['js'] = $this->load->view('admin/leafletroutingmachine/js/mapJs', $datacontent, TRUE);
		$this->load->view('admin/layouts/index', $data);
		$this->load->view('website/layouts/footer', $data);
	}
}
