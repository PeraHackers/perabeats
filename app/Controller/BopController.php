<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BopController
 *
 * @author Sandaruwan
 */
class BopController extends AppController{
    
    var $name = 'bop';
   
    //put your code here
    /**
     * To retrieve latest bop for other controllers
     */
    public function latest() {
        $params = array(
            'order' => array('bop.bop_id'=> 'DESC')
                );
        return $this->bop->find('first', $params);
    }
	
	public function index() {
        $this->layout = "view";
        $this->set('scripts', array(
            'pages/view.js'
        ));
        $this->set('css', array(
            'single.css',
            'font.css',
            'wrapper.css',
            'footer.css',
            'nav.css'
        ));
      //  $this->set('blogs', $this->blog->find('all'));
    
	}
    
}
