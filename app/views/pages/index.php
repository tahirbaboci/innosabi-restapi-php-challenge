<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3"><?php echo $data['title']; ?></h1>
        <p class="lead"><?php echo $data['description']; ?></p>
    </div>
</div>


<input type="button" value="Projects" id="btnProjects" />
<input type="button" value="Highlighting" id="btnHighlight" />

<script>
    document.getElementById("btnProjects").onclick = function () {
        location.href = '<?php echo URLROOT;?>/Projects';
    };
    document.getElementById("btnHighlight").onclick = function () {
        location.href = '<?php echo URLROOT;?>/pages/highlight';
    };
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>