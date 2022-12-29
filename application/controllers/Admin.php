<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Room List';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['fasilitas'] = $this->db->get('facility')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function userlisting()
    {
        $data['title'] = 'User Listing';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['akun'] = $this->db->get('user')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/user', $data);
        $this->load->view('templates/footer');
    }

    public function tampilanUpdate($id)
    {
        $data['fasilitas'] = $this->db->get_where('facility', array('id' => $id))->row_array();
        $data['title'] = 'Update';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/facility_update', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Add Room';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('kamar', 'Room', 'required|trim|is_unique[facility.name]|min_length[5]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/facility_add', $data);
            $this->load->view('templates/footer');
        } else {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                         Unsupported File</div>');
                redirect('admin/add');
            } else {
                $image = $this->upload->data();
                $image = $image['file_name'];
                $name = $this->input->post('kamar', TRUE);
                $desc = $this->input->post('desc', TRUE);
                $l_desc = $this->input->post('l_desc', TRUE);
                $active = 1;
                $number = $this->input->post('number', TRUE);

                $data = array(
                    'name' => $name,
                    'description' => $desc,
                    'l_description' => $l_desc,
                    'image' => $image,
                    'active' => $active,
                    'count' => $number
                );
                $this->db->insert('facility', $data);
                redirect('admin');
            }
        }
    }

    public function update()
    {
        $id = $this->input->post('id');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $name = $this->input->post('kamar', TRUE);
            $desc = $this->input->post('desc', TRUE);
            $l_desc = $this->input->post('l_desc', TRUE);
            $number = $this->input->post('number', TRUE);

            $data = array(
                'name' => $name,
                'description' => $desc,
                'l_description' => $l_desc,
                'count' => $number
            );
            $this->db->where('id', $id);
            $this->db->update('facility', $data);
            redirect('admin');
        } else {
            $image = $this->upload->data();
            $image = $image['file_name'];
            $name = $this->input->post('kamar', TRUE);
            $desc = $this->input->post('desc', TRUE);
            $l_desc = $this->input->post('l_desc', TRUE);
            $number = $this->input->post('number', TRUE);

            $data = array(
                'name' => $name,
                'description' => $desc,
                'l_description' => $l_desc,
                'image' => $image,
                'count' => $number
            );
            $this->db->where('id', $id);
            $this->db->update('facility', $data);
            redirect('admin');
        }
    }

    public function del($id, $image)
    {
        $this->db->where('id', $id);
        unlink("uploads/" . $image);
        $this->db->delete('facility');
        redirect('admin');
    }

    public function updateUser()
    {
        $id = $this->input->post('id');
        $role = $this->input->post('role');
        $active = $this->input->post('active');
        $data = array(
            'role_id' => $role,
            'is_active' => $active
        );
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        redirect('admin/userlisting');
    }

    public function delUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
        redirect('admin/userlisting');
    }

    public function request()
    {
        $data['title'] = 'Book Request';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['book'] = $this->db->get('booking')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/request', $data);
        $this->load->view('templates/footer');
    }

    public function delRequest($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('booking');
        redirect('admin/request');
    }
}
