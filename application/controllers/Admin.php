<?php
/**
 * Created by IntelliJ IDEA.
 * User: phama
 * Date: 02/20/2018
 * Time: 14:45
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['sidebar'] = $this->load->view('admin/left-sidebar', '', true);
		$data['navbar'] = $this->load->view('admin/navbar', '', true);
		$data['content'] = $this->load->view('admin/content', '', true);
		$data['footer'] = $this->load->view('admin/footer', '', true);
		$this->load->view('admin/header');
		$this->load->view('admin/middle', $data);
		$this->load->view('admin/jquery');
	}

	public function view($page = '') {
		$data['sidebar'] = $this->load->view('admin/left-sidebar', '', true);
		$data['navbar'] = $this->load->view('admin/navbar', '', true);
		$data['content'] = $this->load->view('admin/'.$page.'/content', '', true);
		$data['footer'] = $this->load->view('admin/footer', '', true);
		$this->load->view('admin/header');
		$this->load->view('admin/middle', $data);
		$this->load->view('admin/jquery');
	}

	public function table() {
		$this->load->library('database');
		$this->load->model('account');
		$data['sidebar'] = $this->load->view('admin/left-sidebar', '', true);
		$data['navbar'] = $this->load->view('admin/navbar', '', true);
		$data['footer'] = $this->load->view('admin/footer', '', true);
		$this->db->select('username', 'email', 'level');
		$this->db->order_by('username', 'desc');
		$query = $this->db->get('account');
		$data['content'] = $this->load->view('admin/table/content', $query->result_array(), true);
		$this->load->view('admin/header');
		$this->load->view('admin/middle', $data);
		$this->load->view('admin/jquery');
	}

	public function get() {

	}
}
