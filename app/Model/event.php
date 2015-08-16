<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of event
 *
 * @author Sandaruwan
 */
class event extends AppModel{
    public  $name = 'event';
    public $useTable = 'event';
	public $primaryKey = 'event_id';
    public $belongsTo = array(
        'log_user' => array(
            'className' => 'log_user',
            'foreignKey' => 'pb_log_user_lg_id'
        )
    );
    
}
