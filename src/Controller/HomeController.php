<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class HomeController extends AppController {
    /**
     * People top page
     */
    public function index() {
        $data = array();
        $params = $this->getParams(array(
            'limit' => 24,
            'page' => 1
        ));
        $data = Api::call(Configure::read('API.url_settings_gethomedata'), $params);
        $this->set('data', $data);
        $this->set('params', $params);
//        echo '<pre>';
//        print_r($data);
//        die();
    }
}