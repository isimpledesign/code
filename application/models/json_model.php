<?php

class Json_model extends CI_Model {
	
	
	public function getVideos($query){
		
		
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, "https://gdata.youtube.com/feeds/api/videos?q=".$query."&orderby=published&v=2&alt=json");
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		$response = curl_exec($curl);
		$response = str_replace('$','', $response);
		$status = curl_getinfo($curl);
		$output = json_decode($response);
		
		foreach($output->feed->entry as $row){
			
			$vdiz[] = array('title' => $row->title->t,'content' => $row->content->src);
			
		
		}
		
		return $vdiz;
		curl_close($curl);
		
	}
	
	
}