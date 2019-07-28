<?php
    class Pages extends Controller {

        public function __construct(){
           
        }

        public function about(){
            $data = ['version' => '1.0.0'];
            $this->view('pages/about', $data);
        }

        public function index(){
            $data = [
                'title' => 'Welcome To phpchallenge',
                'description' => 'Simple proxy to get data from api'
              ];    
              $this->view('pages/index', $data);  

        }
    }
?>