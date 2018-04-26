<?php

	class Test extends CI_Controller {

		public function __construct() {
                parent::__construct();

                $this->load->helper('general');
                $this->load->helper('yellowpagesapi');
				$this->load->model('State_model');
				$this->load->model('City_model');
				$this->load->model('Page_model');
				$this->load->model('Configuration_model');
				$this->load->library('Foursquare');
				$this->load->helper('api');
        }

		// public function index($page = 'home') {

		// 	if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
		// 		show_404();
		// 	} else {

		// 		$data['term'] = 'locksmith';
		// 		$data['location'] = 'California';
		// 		$api = getDataApi($data['location']);
		// 		if($api) {
		// 			$data['api'] = $api['items'];
		// 		} else {
		// 			$data['api'] = 0;
		// 		}

		// 		$data['title'] = the_config('site_title');
		// 		// META
		// 		$data['meta_title'] = the_config('meta_title');
		// 		$data['meta_keyword'] = the_config('meta_keyword');
		// 		$data['meta_description'] = the_config('meta_description');

		// 		$popular_cities = $this->City_model->get_popular_city();
				
		// 		$this->load->view('templates/header', $data);
		// 		$this->load->view('pages/'.$page, $data);
		// 		$this->load->view('templates/footer');
		// 	}

		// }

		public function index() {
			echo 'Hello World';
		}

	}

