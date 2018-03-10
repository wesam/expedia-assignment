<?php  

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Offers_model extends CI_Model {

        public function __construct() {
            parent::__construct();
            $this->load->library('rest', array('server' => EXPEDIA_REST_API_SERVER));
        }
        
        private function manipulate_search_params($params) {
            
            foreach($params as $paramKey => $paramValue) {
                
                $paramValue = trim($paramValue);
                
                if(empty($paramValue)) {
                    unset($params[$paramKey]);
                }
                else {
                    if(in_array($paramKey, array('destinationName', 'minTripStartDate', 'maxTripStartDate', 'lengthOfStay', 'destinationCity', 'destinationProvince', 'regionIds', 'minStarRating', 'maxStarRating', 'minGuestRating', 'maxGuestRating'))) {
                        
                        if($paramKey == 'minStarRating' && $params['minStarRating'] != 5 && intval($params['maxStarRating']) == 0) {
                            $params['maxStarRating'] = intval($params['maxStarRating']) + 0.5;
                        }
                        else if($paramKey == 'minGuestRating' && $params['minGuestRating'] != 5 && intval($params['maxGuestRating']) == 0) {
                            $params['maxGuestRating'] = intval($params['minGuestRating']) + 0.99;
                        }
                        
                    }
                    else {
                        unset($params[$paramKey]);
                    }
                }
            }
                                    
            return (array) $params + (array) json_decode(EXPEDIA_REST_API_DEFAULT_SEARCH_PARAMS, true);
            
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
