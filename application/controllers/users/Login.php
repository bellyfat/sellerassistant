<?php 
/**
 * Login
 * 
 * @package 	CI
 * @subpackage 	Controller 
 * @author 		MD TARIQUE ANWER | mtarique@outlook.com
 */
defined('BASEPATH') or exit('No direct script access allowed.'); 

class Login extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct(); 
    }

    public function index()
    {
        $page_data['title'] = "";
        $page_data['descr'] = ""; 

        $this->load->view('users/login_view', $page_data);
    }
}
?>