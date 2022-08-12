<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends Single_Model {

    public $table = 'contact';

    public function __construct() {
        parent::__construct();
    }
}
