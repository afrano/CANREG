<?php

Class Tes extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('tes');
    }
    function nano(){
        $this->load->view('newEmptyPHP');
    }

}
