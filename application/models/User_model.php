<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class User_model extends CI_Model{
        function test_main() {
            echo "This si model function";
        }

        function insert_data($data){
            $this->db->insert("user", $data);
        }
    }
?>