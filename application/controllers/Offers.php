<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Offers_model');
    }
    
	public function index() {
        
        $search_params = $this->input->get();

        $hotels = $this->Offers_model->search($search_params);
        
        $views['search_form'] = $this->load->view('search_form', $search_params, true);
        if(isset($hotels) && count($hotels)) {
            $views['hotels_list'] = $this->load->view('hotels_list', array('hotels' => $hotels), true);
        }
        else {
            $views['hotels_list'] = $this->load->view('empty_hotels_list', array(), true);
        }
        
		$this->load->view('page', $views);
                           
	}
}
