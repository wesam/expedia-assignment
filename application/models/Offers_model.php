<?php  

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Offers_model extends CI_Model {

        public function __construct() {
            parent::__construct();
            $this->load->library('rest', array('server' => EXPEDIA_REST_API_SERVER));
        }
        
        private function manipulate_search_params($params) {
            
            $params = (array) $params + (array) json_decode(EXPEDIA_REST_API_DEFAULT_SEARCH_PARAMS, true);
            
            foreach($params as $paramKey => &$paramValue) {
                if(empty($paramValue)) {
                    unset($params[$paramKey]);
                }
            }
            
            //print_r($params); die;
            
            return $params;
            
        }
        
        private function call_rest_api($params) {
            
            $results = $this->rest->get(EXPEDIA_REST_API_DEFAULT_SEARCH_METHOD, $params, 'json');
            return (array) json_decode(json_encode($results), true);
            
        }
        
        public function search($params = array()) {
            
            $params = $this->manipulate_search_params($params);
            
            $results = $this->call_rest_api($params);
            
            if(isset($results['offers']['Hotel']) && count($results['offers']['Hotel'])) {
                return $results['offers']['Hotel'];
            }
            else {
                return array();
            }
            
        }
        
    }