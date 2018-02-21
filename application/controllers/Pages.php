<?php
/**
 * Created by IntelliJ IDEA.
 * User: phama
 * Date: 02/20/2018
 * Time: 12:46
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index() {
		echo 'Hello world';
	}

	public function view($page = 'home') {
		if ( ! file_exists(APPPATH."views/pages/".$page.".php"))
		{
			echo APPPATH.'views/pages/'.$page.'.php';
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);

	}
}
