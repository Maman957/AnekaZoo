<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Animal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Animal_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('Animal_model');
        $data['animals'] = $this->Animal_model->get_all_animals();
        $data['content'] = 'animal/index';
        $this->load->view('layout', $data);
    }

    public function detail($id)
    {
        $this->load->model('Animal_model');
        $animal = $this->Animal_model->get_animal($id);

        if (!$animal) {
            show_404();
        }

        $data['animal'] = $animal;
        $data['content'] = 'animal/detail';
        $this->load->view('layout', $data);
    }

    public function create()
    {
        $this->load->model('Animal_model');

        if ($this->input->post()) {
            $name = $this->input->post('name');
            $class = $this->input->post('class');
            $legs = $this->input->post('legs');

            if ($this->Animal_model->is_name_exists($name)) {
                $data['error'] = "Animal with the name '$name' already exists!";
            } else {
                $animal_data = array(
                    'name' => $name,
                    'class' => $class,
                    'legs' => $legs,
                );
                $this->Animal_model->insert_animal($animal_data);
                redirect('animal');
            }
        }

        $data['content'] = 'animal/create';
        $this->load->view('layout', $data);
    }

    public function edit($id)
    {
        $this->load->model('Animal_model');
        $animal = $this->Animal_model->get_animal($id);

        if (!$animal) {
            show_404();
        }

        if ($this->input->post()) {
            $name = $this->input->post('name');
            $class = $this->input->post('class');
            $legs = $this->input->post('legs');

            if ($this->Animal_model->is_name_exists($name, $id)) {
                $data['error'] = "Animal with the name '$name' already exists!";
            } else {
                $animal_data = array(
                    'name' => $name,
                    'class' => $class,
                    'legs' => $legs,
                );
                $this->Animal_model->update_animal($id, $animal_data);
                redirect('animal');
            }
        }

        $data['animal'] = $animal;
        $data['content'] = 'animal/edit';
        $this->load->view('layout', $data);
    }

    public function delete($id)
    {
        $this->load->model('Animal_model');
        $this->Animal_model->delete_animal($id);
        redirect('animal');
    }
}
