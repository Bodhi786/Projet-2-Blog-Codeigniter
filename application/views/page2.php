

    

<!-- la partie card -->

<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
<div class="row grid">

<?php foreach ($article_photo_auteur as $row) {?>

<!--<div class="col-sm-6 element-item </?php echo $row->nom_categorie ?>">-->
<div class="card" >

  <div class="card-header"><h5 class="card-title"><?php echo $row->titre ?></h5></div>
  <div class="card-body">
  <div class="row">
   
   <div class="col-md-6">

    <span class="</?php echo badgecolor($row->id_categorie) ?>"><?php echo $row->nom_categorie?></span>
    <br>
    <span class="badge badge-success"> <?php echo $row->nom_auteur ?></span>
    <br>
    <span class="badge badge-primary"> <?php echo @dateGdFr($row->date_parution) ?></span>
    <br>
    
  
   <p class="card-text"> <?php echo $row->texte_intro ?></p>
   <a href="<?php echo base_url().'test/articleUnique/'.$row->id_article ?>" class="btn btn-secondary active" role="button">Lire la suite</a>
   </div>
   <br>
   
    <div class="col-md-6">
   <span>
    <img class="img-fluid" src="<?php echo base_url().'media/img/'.newPath($row->nom_img1) ?>">
    <br>
    </span>
    </div>
    
    </div>
    </div>
    
    <br>
<!--    </div>-->
  </div>
  <hr>
  <?php } ?>
  
  
</div>
</div>



