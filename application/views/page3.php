

<?php foreach ($article_complet as $row) {?>


<div class="container">
    
    <h1><?php echo $row->titre ?></h1>
    <p><?php echo $row->article ?></p>
    <br>
    <div class="row justify-content-center img-fluid">
    <img class="img-fluid" src="<?php echo base_url().'media/img/'.newPath($row->nom_img1) ?>">
    </div>
    
</div>


<?php } ?>

