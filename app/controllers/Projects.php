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

            $dataToReturn = [];

            $ch = curl_init($host);
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


            $data = $result;
            $data = json_decode($data, true);

            $include = $_GET['include'];
            $parameters = explode(',', $include); 

            
            $output = '';
            $print = '';
            $count = 0;
            foreach ($data['data'] as $key => $value) {

                $name = $value["name"];
                $image = $value["media"][0]["hash"];

                foreach ($parameters as $key => $paramVal) {
                    if($paramVal == 'startDate'){
                        $print .= '<p>'.$paramVal.' : '.$value[$paramVal]['date'].'</p>';    
                    }
                    else{
                        $print .= '<p>'.$paramVal.' : '.$value[$paramVal].'</p>';
                    }
                }

                if($count == 0)
                {
                    $output .= '<div class="item active">';
                }
                else
                {
                    $output .= '<div class="item">';
                }
                $output .= '
                    <img class="d-block w-100" src="https://demo.innosabi.com/media/crop/'.$image.'/300/200/1" alt="'.$name.'" style="width:100%; height:100%;"/>
                    <div class="carousel-caption">
                        '.$print.'
                    </div>
                    </div>
                ';
                $print = '';
                $count = $count + 1;
            }

            $SlideshowOutput = '';
            $countSlieds = 0;
            foreach ($data['data'] as $key => $value) {
            
                if($countSlieds == 0)
                {
                    $SlideshowOutput .= '
                        <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
                    ';
                }
                else
                {
                $SlideshowOutput .= '
                    <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
                ';
                }
                $countSlieds = $countSlieds + 1;
            }
            $dataToReturn[0] = $output;
            $dataToReturn[1] = $SlideshowOutput;

            $this->view('projects/show', $dataToReturn);
        }
    }
?>