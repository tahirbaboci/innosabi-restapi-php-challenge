<?php
    class Projects extends Controller {

        public function __construct(){
           
        }

        public function index(){
            $data = [
                'title' => 'Projects',
                'description' => 'Simple proxy to get data from api'
              ];    
              $this->view('projects/index', $data);  

        }

        public function show(){

            $host = 'https://demo.innosabi.com/api/v2/project/filter';
            $username = 'api@innosabi.com';
            $password = '0thRuch0';
            $ch = curl_init($host);
            //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml', $additionalHeaders));
            //curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $result = curl_exec($ch);
            if ($result === false) {
                throw new Exception('cURL error: ' . curl_error($crl));
                print_r('Failed to get data from URL. Failed with error : ' . curl_error($curl));
                return;
            }
            curl_close($ch);
            //$result = json_decode($result,true);
            //var_dump(json_decode($result, true));
            $data = $result;

            //$proxy = new Proxy;
            //$posts = $proxy->getPosts('https://demo.innosabi.com/api/v2/project/filter');
            $this->view('projects/show', $data);
        }
    }
?>