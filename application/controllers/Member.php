<?php
/**
 * Created by IntelliJ IDEA.
 * User: phama
 * Date: 02/23/2018
 * Time: 23:13
 */

defined('BASEPATH') OR exit('No direct script access allowed');
class Member extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index() {
		$this->form_validation->set_rules('username', 'Username', 'trim|required');//|min_length[5]|max_length[20]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		//_print($this->form_validation->run() == false ? 0 : 1);
		if ($this->form_validation->run() == TRUE) {
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$data = array(
				'user' => $user,
				'pass' => $pass
			);
			$this->load->library('session');
			$this->session->set_flashdata('lolwut', $data);
			redirect('home?user='.$user);
			$this->session->flashdata('lolwut');
		}
		else $this->load->view('login/index');
	}

	public function get_ajax() {
		$this->load->library('ajax');
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		echo "success ".$user;
	}

}
