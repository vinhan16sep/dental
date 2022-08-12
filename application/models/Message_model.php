<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Message_model extends Single_model{
	
	/**
	 * [$table description]
	 * @var string
	 */
	public $table = 'message';

	function __construct(){
		parent::__construct();
	}
}