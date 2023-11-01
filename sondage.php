<?php
    include_once('./templates/header.php');

    $error404 = false;

    if (isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $poll = getPollById($pdo, $id);

        // gestion de l'erreur lorsque le sondage n'existe pas
        if($poll){
            $results = getPollResultsById($pdo, $id);
        }else{
            $error404 = true;
        }
       // fin de la gesion de l'erreur lorsque le sondage n'existe pas

    } else{
      $error404 = true;
    }

if(!$error404) {
?>
<section class="container">
    <div class="row align-items-center g-5 py-5">
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold mb-3"><?=$poll['title']?></h1>
        <p class="lead text-justify"><?=$poll['description']?></p>
      </div>

      <div class="col-lg-6">
        <h2>Résultat</h2>
         <div class="results">
            <h3>Prop 1</h3>
            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-color-2" style="width: 25%">PROP1 25%</div>
            </div>
         </div>
      </div>
    </div>
  </section>

<?php } else { ?>
    <h1>Le sondage n'existe pas</h1>
<?php } ?>


<?php
    include_once('./templates/footer.php');

?>   