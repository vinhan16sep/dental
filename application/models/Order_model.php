<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Order_model extends Single_model{
	
	/**
	 * [$table description]
	 * @var string
	 */
	public $table = 'order';

	function __construct(){
		parent::__construct();
	}
}