<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class form_controller extends CI_Controller{

        public function index(){
            $this->load->helper(array('form', 'url'));
            $this->load->view("form");
        }

        public function form_validation(){
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules("USER_Name","Name","required|alpha");
            $this->form_validation->set_rules("USER_Address","Address","required");
            $this->form_validation->set_rules("USER_Email","Email ID","required|valid_email");
            $this->form_validation->set_rules("USER_Dob","DOB","required");
            $this->form_validation->set_rules("USER_Phone_No","PhoneNum","required|numeric");

            /* unused field
            $this->form_validation->set_rules("age","Age","required|integer");
            $this->form_validation->set_rules("password","Password",
            "required|alpha_numeric|max_length[12]|min_length[6]");*/

            if ($this->form_validation->run())
            {

                $this->load->model("User_model");
                    $data = array(
                        "USER_Name" => $this->input->post("USER_Name"),
                        "USER_Email" => $this->input->post("USER_Email"),
                        "USER_Address" => $this->input->post("USER_Address"),
                        "USER_Dob" => $this->input->post("USER_Dob"),
                        "USER_Phone_No" => $this->input->post("USER_Phone_No")
                    );

                    $this->User_model->insert_data($data);
                    redirect(base_url() . "form_controller/inserted");
            }
            else
            {
                $this->index();
            }
        }

        public function inserted(){
            echo '<script language="javascript">';
            echo 'alert("Successfully Registered"); location.href="index"';
            echo '</script>';
        }
    }
?>