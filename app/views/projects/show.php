<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
    </div>
</div>

<br />

  <div class="container" style="width:60%; height:90%;">
   <h2 align="center">Slider and proxy</h2>
   <br />
   <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php echo $data[1];?>
    </ol>

    <div class="carousel-inner">
     <?php echo $data[0]; ?>
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