<?php
    defined("BASEPATH") OR exit("No direct script access allowed");

    class control extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
            $this->load->model("model");
            $this->load->library('form_validation');
        }
        
        public function index(){
            $data["laporan"] = $this->model->getAll();
            $this->load->view("home", $data); 
        }

        public function tambah(){
            $laporan = $this->model;
            $validation = $this->form_validation;
            $validation->set_rules($laporan->rules());

            if ($validation->run()) {
                $laporan->save();
                $this->session->set_flashdata('success', 'Berhasil ditambah');
                redirect('');
            }

            $this->load->view("create");
        }

        public function edit($id = null){
            if (!isset($id)) redirect('home');
        
            $laporan = $this->model;
            $validation = $this->form_validation;
            $validation->set_rules($laporan->rules());

            if ($validation->run()) {
                $laporan->update();
                $this->session->set_flashdata('success', 'Berhasil diubah');
                redirect('');
            }

            $data["laporan"] = $laporan->getById($id);
            if (!$data["laporan"]) show_404();
            
            $this->load->view("edit", $data);
        }

        public function detail($id = null){
            if (!isset($id)) redirect('home');
            $laporan = $this->model;
            $data["laporan"] = $laporan->getById($id);
            $this->load->view("detail", $data);
        }

        public function delete($id=null){
            if (!isset($id)) show_404();
            
            if ($this->model->delete($id)) {
                $data["laporan"] = $this->model->getAll();
                $this->load->view("home", $data);
            }
        }

    }
