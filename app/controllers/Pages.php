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

        public function highlight(){
            // get the words in sequence from textbox
            
            // get the words in sequence from TEXT
            
            // search for the first word in text
                    // if found { see the next word after the one who was found and if true repeat }
                    // if Notfound {search for the next word}
        
            
        }
    }
?>