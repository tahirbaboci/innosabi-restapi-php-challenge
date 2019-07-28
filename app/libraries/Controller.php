<?php

/*
* Base Controller
* Loads the models and views
*/
    class Controller {
        //Load Model
        public function model($model){
            //require model file 
            require_once '../app/models/'.$model.',php';
            
            //Instatiate model
            return new $model();
        }

        //Load View
        public function view($view, $data = []){
            // Check for the view file
            if(file_exists('../app/views/'.$view.'.php')){
                require_once '../app/views/'.$view.'.php';
            }
            else{
                //view does not exists
                die('View does not exists');
            }
        }
    }


?>