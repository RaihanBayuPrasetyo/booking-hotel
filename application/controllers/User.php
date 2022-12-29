<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Room Listing';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['fasilitas'] = $this->db->get('facility')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['fasilitas'] = $this->db->get_where('facility', array('id' => $id))->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/footer');
    }

    public function booking()
    {
        $id = $this->session->userdata('id');
        $name = $this->session->userdata('name');
        $start = $this->input->post('start', true);
        $finish = $this->input->post('finish', true);
        $room = $this->input->post('kamar', true);
        $status = "waiting";

        if ($start == $finish) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                      Minimum booking is 1 day !</div>');
            redirect('user');
        }

        $data = array(
            'room' => $room,
            'start_date' => $start,
            'finish_date' => $finish,
            'name' => $name,
            'id_name' => $id,
            'status' => $status
        );
        $this->db->insert('booking', $data);
        redirect('user/bookinglist');
    }

    public function bookinglist()
    {
        $data['title'] = 'Booking List';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['book'] = $this->db->get('booking')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/bookinglist', $data);
        $this->load->view('templates/footer');
    }

    public function bookingpage()
    {
        $data['title'] = 'Booking Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['book'] = $this->db->get('facility')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/bookingpage', $data);
        $this->load->view('templates/footer');
    }
}
