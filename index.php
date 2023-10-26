<?php
    include_once('./templates/header.php');

    $polls = getpools($pdo);

?>
<!-- hero -->
<section class="container">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?=PATH_ASSETS_IMAGES?>logo-votit.png" class="d-block mx-lg-auto img-fluid" alt="logo" width="500">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold mb-3">Votez sur des sujets de l'actualités IT</h1>
        <p class="lead text-justify">VotIt est la plateforme sur laquelle la communauté tech s'exprime. De la préférence entre frameworks front-end aux débats sur les meilleures pratiques DevOps, nous vous offrons une plateforme pour créer, participer et analyser des sondages spécifiquement centrés sur le monde du développement, de l'IT et du DevOps. Rejoignez-nous, partagez vos opinions et restez à jour avec les tendances de notre industrie!</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="#" class="btn btn-primary btn-lg px-4 me-md-2">Voir les sondages</a>
        </div>
      </div>
    </div>
  </section>

  <!-- cards -->
   <section class="container">
        <div class="row">
            <h2>Les derniers sondages</h2>

            <?php foreach($polls as $poll){ 
            
                require('./templates/partials.php');
            }?>
            
        </div>
   </section>
       



<?php
    include_once('./templates/footer.php');

?>   