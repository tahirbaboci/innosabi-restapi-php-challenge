<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3"><?php echo $data['title']; ?></h1>
        <p class="lead"><?php echo $data['description']; ?></p>
    </div>
</div>

<input type="button" value="Show Projects" id="Show" />

<script>
    //projects controllera gecmeye calisiyorum ama olmuyor
    document.getElementById("Show").onclick = function () {
        location.href = '<?php echo URLROOT;?>/Projects/show?include=name,description';
    };
</script>


<?php require APPROOT . '/views/inc/footer.php'; ?>