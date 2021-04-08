<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grocery extends CI_Controller {

	public function __construct()
	{
	parent::__construct();
	//$this->load->model('');
	$this->load->database();
	$this->load->helper('url_helper');
	$this->load->helper('url');
	$this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('session');
   	$this->load->helper('array');

	}
	public function index($page='home')
	{
		if(! file_exists(APPPATH.'views/grocery/'.$page.'.php'))
		{
			show_404();
		}

        $data['title'] = ucfirst($page);

        $this->load->view('include/header',$data);
        $this->load->view('include/search',$data);
        $this->load->view('include/footer',$data);
	}
}