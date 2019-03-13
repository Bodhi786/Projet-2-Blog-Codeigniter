<?php
$cache = uniqid();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>BLOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!--    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>media/css/style.css?<?php echo $cache; ?>">
    <link rel="stylesheet" href="<?php echo base_url() ?>media/css/animate.css?<?php echo $cache; ?>">
    


</head>

<body>

<style>
    body{
        font-family: 'Roboto', sans-serif;
    }
    </style>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">BLOG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">


<!--
        
                  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catégorie</a>
    <div class="dropdown-menu bg-dark " aria-labelledby="navbarDropdown">
    < ?php foreach (listeCategorie() as $row) {?>
      <a class="dropdown-item" href="categorie_front.php?id=< ?php echo $row['id_categorie'] ?>">< ?php echo $row['nom_categorie']?></a>
      < ?php } ?>
    </div>
  </li>
-->
                <li class="nav-item">
                    <a class="nav-link " href="contact.php" tabindex="-1" aria-disabled="true">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="a_propos.php" tabindex="-1" aria-disabled="true">A PROPOS</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">

                <button class="btn btn-outline-light my-2 my-sm-0" type="button"data-toggle="modal" data-target="#exampleModal">CONNEXION</button>
            </form>
        </div>
    </nav>
 
