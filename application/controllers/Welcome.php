<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

        $data['main_content'] = 'index';
        $this->load->view('includes/template', $data);

	}

	public function driver_signup(){
        $this->load->helper('form');

        $this->load->view('driver_signup');
    }

    public function d_signup(){
        $this->load->helper('form');
        $now = date("Y-m-d H:i:s");
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        if (!empty($_FILES['license']['name'])) {
            $file_name = "driver" . time() . ".jpg";
            $config = array(
                'upload_path' => "./uploads/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "2048000",
                'file_name' => $file_name,
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('license');
            $this->upload->display_errors();
        }

        $age = $this->input->post('age');
        $newPass = md5($password);
        $name = $this->input->post('name');
        $surname = $this->input->post('surname');
        $phone = $this->input->post('phone');
        $address = $this->input->post('address');
        $transport = $this->input->post('transport');
        $gender = $this->input->post('gender');
        $accept = $this->input->post('acceptTerms');
        if($accept == 'on'){
            $agree = 1;
        }else{
            $agree = 0;
        }

        $data = array(
            'email' => $email,
            'password' => $newPass,
            'name' => $name,
            'surname' => $surname,
            'phone' => $phone,
            'address' => $address,
            'transport' => $transport,
            'gender' => $gender,
            'acceptterms' => $agree,
            'age' => $age,
            'license' => $file_name,
            'add_date' => $now,
        );
        $this->db->set($data);
        $this->db->insert('glogc_driver');

        redirect('index', 'refresh');
    }

    public function user_signup(){
        $this->load->helper('form');

        $this->load->view('user_signup');
    }

    public function u_signup(){
        $now = date("Y-m-d H:i:s");
        $this->load->helper('form');
        $language = $this->input->post('language');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $newPass = md5($password);
        $name = $this->input->post('name');
        $surname = $this->input->post('surname');
        $phone = $this->input->post('phone');
        $nric = $this->input->post('nric');
        $transport = $this->input->post('transport');
        $category = $this->input->post('category');
        $accept = $this->input->post('acceptTerms');
        if($accept == 'on'){
            $agree = 1;
        }else{
            $agree = 0;
        }

        $data = array(
            'email' => $email,
            'password' => $newPass,
            'name' => $name,
            'surname' => $surname,
            'phone' => $phone,
            'nric' => $nric,
            'transport' => $transport,
            'category' => $category,
            'accepterms' => $agree,
            'language' => $language,
            'add_date' => $now,
        );
        $this->db->set($data);
        $this->db->insert('glogc_user');

        redirect('index', 'refresh');
    }

    public function subscribe(){
        $now = date("Y-m-d H:i:s");
        $this->load->helper('form');
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');

        $data = array(
            'email' => $email,
            'name' => $name,
            'phone' => $phone,
            'add_date' => $now,
        );
        $this->db->set($data);
        $this->db->insert('subsription');

        redirect('index', 'refresh');
    }

}

