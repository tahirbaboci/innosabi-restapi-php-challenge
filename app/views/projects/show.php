<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
    <?php 
        $data = json_decode($data, true);
        
        /*
        function showData($data){
            $output = ''; 
            foreach ($data['data'] as $key => $value) {
                $name = $value["name"];
                $description = $value["description"];
                
                $output .= '
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><b>name</b> : '.$name.' </li>
                        <li class="list-group-item"><b>description</b> : '.$description.' </li>
                    </ul>        
                ';

            }
        }
        */
        function make_slide_indicators($data)
        {
            $output = ''; 
            $count = 0;
            foreach ($data['data'] as $key => $value) {
            
                if($count == 0)
                {
                    $output .= '
                        <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
                    ';
                }
                else
                {
                $output .= '
                    <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
                ';
                }
                $count = $count + 1;
            }
            return $output;
        }


        function make_slides($data)
        {
            $output = '';
            $count = 0;
            foreach ($data['data'] as $key => $value) {

                $name = $value["name"];
                $image = $value["media"][0]["hash"];
                $description = $value["description"];

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
                        <h2>'.$name.'</h2>
                        <p>'.$description.'</p>
                    </div>
                    </div>
                ';
                $count = $count + 1;
            }
            return $output;
        }

        //call function showData
        //showData($data);
    ?>
    </div>
</div>




<br />
  <div class="container" style="width:60%; height:90%;">
   <h2 align="center">Slider and proxy</h2>
   <br />
   <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php echo make_slide_indicators($data); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo make_slides($data); ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

   </div>
  </div>


<?php require APPROOT . '/views/inc/footer.php'; ?>