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

            $searchString = '';
            $theTextString = '';
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Sanitize POST
                $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


                // get the words in sequence from textbox
                $searchString = $_POST['search'];
                $searchString = preg_replace("#[\s]+#", " ", $searchString);
                $searchStringWords = explode(" ", $searchString);

                // get the words in sequence from TEXT
                $theTextString = $_POST['body'];
                $theTextString = preg_replace("#[\s]+#", " ", $theTextString);
                $textStringWords = explode(" ", $theTextString);
                // search for the first word in text
                        // if found { see the next word after the one who was found and if true repeat }
                        // if Notfound {search for the next word}
                for ($i=0; $i < count($textStringWords); $i++) { 
                    foreach ($searchStringWords as $key => $value) {
                        if($textStringWords[$i] == $value){
                            $textStringWords[$i] = '<b>'.$textStringWords[$i].'</b>';
                        }
                    }
                }
                
                $data[0] = implode(" ", $textStringWords);
                $this->view('pages/highlight', $data);  
            }
            else {
                $data[0] = $theTextString;
                $this->view('pages/highlight', $data);
              } 
        }
    }
?>