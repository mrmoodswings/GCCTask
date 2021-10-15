<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	public function addTransaction(){
		$data = $this->input->post(null,true);
		if($this->HomeModel->addTransaction($data)){
			return redirect('/');
		}
		
	}
}
