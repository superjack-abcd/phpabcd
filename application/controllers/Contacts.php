<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('contacts/index');
        $this->load->view('footer');
    }

    public function create() {
        $this->load->view('header');
        $this->load->view('contacts/create');
        $this->load->view('footer');
    }

    public function store() {
        $rules = array(
            array(
                'field' => 'contact_name',
                'label' => 'Contact Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'contact_number',
                'label' => 'Contact Number',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'email_address',
                'label' => 'Email Address',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header');
            $this->load->view('contacts/create');
            $this->load->view('footer');
        } else {
            redirect(base_url('contacts'));
        }
    }

    public function edit($id) {
        $this->load->view('header');
        $this->load->view('contacts/edit');
        $this->load->view('footer');
    }

    public function update($id) {
        $this->load->view('header');
        $this->load->view('contacts/update');
        $this->load->view('footer');
    }

    public function delete($id) {
        $this->load->view('header');
        $this->load->view('contacts/delete');
        $this->load->view('footer');
    }
}