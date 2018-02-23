<?php
/**
 * Created by IntelliJ IDEA.
 * User: phama
 * Date: 02/23/2018
 * Time: 21:48
 */

class Lesson extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		$this->load->view("frontend/header");
		$this->load->view("frontend/menu");
		$this->load->view("frontend/home/content");
		$this->load->view("frontend/footer");
		$this->load->view("frontend/jquery");
	}
}
