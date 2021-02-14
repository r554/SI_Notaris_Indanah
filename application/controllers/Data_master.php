<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_master extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('M_admin');
        $this->load->library(array('form_validation', 'session'));
    }

    public function index()
    {
        //if ($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
        // redirect('Dashboard/tampil'); // Redirect ke page home

        $this->load->view('Dashboard'); // Load view login.php
    }
}
