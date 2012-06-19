<?php

class Json extends CI_Controller {
	
	
	public function index(){
		
		
		$this->load->model('json_model');
		
		$data['videos'] = $this->json_model->getVideos('lost');
		 
		$this->load->view('json_view',$data);
		
	}
	
	
}