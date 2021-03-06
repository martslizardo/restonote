<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Views extends CI_Controller {
    

    public function __construct() {
        
        parent :: __construct();	
        $this->session->unset_userdata('author_id');

        if (!$this->user_model->is_login()) {
            redirect(LOGIN_URL);
        }
    }


    public function index() {
		
		$data['author_id']		= $this->session->user->id;
		$data['user_id']		= $this->session->user->id;
		$data['user_name']		= $this->session->user->first_name.' '.$this->session->user->last_name;
        $data['email']			= $this->session->user->email_address;
        $data['avatar_url']		= $this->session->user->avatar_url;
		$data['colors']			= unserialize(COLORS);

		$this->load->view('include/header', $data);
		$this->load->view('include/modal', $data);
		$this->load->view('include/tutorial', $data);
		$this->load->view('cards/index', $data);
		$this->load->view('include/footer', $data);
	}


	public function index2() {
		
		$data['author_id']		= $this->session->user->id;
		$data['user_id']		= $this->session->user->id;
		$data['user_name']		= $this->session->user->first_name.' '.$this->session->user->last_name;
        $data['email']			= $this->session->user->email_address;
        $data['avatar_url']		= $this->session->user->avatar_url;
		$data['teams']			= $this->team_model->get_all($this->session->user->id);
		$data['colors']			= unserialize(COLORS);
		$data['task_type']		= 'personal';

		$this->load->view('include/header', $data);
		$this->load->view('include/modal', $data);
		$this->load->view('task/personal', $data);
		$this->load->view('include/footer', $data);
	}
}