<?php

/* 
 * Ajax controller
 */

namespace App\Controller;

class AjaxController extends AppController {
    
    public function initialize() {
        parent::initialize();
//        $this->autoRender = false;
    }
    
    /**
     * Product detail
     */
    public function productdetail() {
        $data = $this->request->data();
        $this->set('data', $data);
    }
    
    /**
     * Add to cart
     */
    public function addtocart() {
        $this->autoRender = false;
        include ('Bus/Ajax/addtocart.php');
    }
    
    /**
     * Update cart
     */
    public function post() {
        include ('Bus/Ajax/post.php');
    }
    
    /**
     * Update cart
     */
    public function postview() {
        $this->autoRender = false;
        include ('Bus/Ajax/postview.php');
    }
}