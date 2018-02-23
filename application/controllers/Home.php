<?php
/**
 * Created by IntelliJ IDEA.
 * User: phama
 * Date: 02/23/2018
 * Time: 21:16
 */

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index() {
		$this->view('home');
	}

	public function view($page) {
		$this->load->view("frontend/header");
		$this->load->view("frontend/menu");
		$this->load->view("frontend/".$page."/content");
		$this->load->view("frontend/footer");
		$this->load->view("frontend/jquery");
	}

	public function get_view_ajax() {
		$this->load->library('ajax');
		$page = $this->input->post('page');
		$data = $this->load->view('frontend/'.$page.'/content', '', TRUE);
		$this->ajax->output_ajax($data);
	}
}
