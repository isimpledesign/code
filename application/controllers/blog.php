<?php

class Blog extends CI_Controller {

	public function index()
	{
		
		$this->load->model('blog_model');
		
		$data['rows'] = $this->blog_model->getAll();
		
		
		$data['title'] = 'hello samuel';
		$data['todo'] = array('1','2','3');
		
		$this->load->view('blog_view',$data);
	}
	
}