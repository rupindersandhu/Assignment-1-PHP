<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends Application 
{
    function index() 
    {
       $this->load->library('session');
       $this->data['pagebody'] = 'Login/login';
       
//       if($this->input->post('field-username')) {
//            $nData = array('username' => $this->input->post('field-username'));
//            $this->session->set_userdata($nData);
//            $this->data['login-menu'] = $this->parser->parse("Login/logout_menu", $this->data, true);
//            $this->index();
//        } else {
//            $this->data['pagetitle'] = "Login";
//            $this->data['page'] = 'Login/login';
//            $this->data['content'] = 'Login/login';
//            $this->render();
//        }
        
        
            $this->session->unset_userdata('username');
            //$this->data['login-menu'] = $this->parser->parse("Login/login_menu", $this->data, true);
            $this->index();
        
    
    }
}