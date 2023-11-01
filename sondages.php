<?php
    include_once('./templates/header.php');

    $polls = getpools($pdo);

?>


  <!-- cards -->
   <section class="container">
        <div class="row">
            <h2>Les sondages</h2>

            <?php foreach($polls as $poll){ 
            
                require('./templates/partials.php');
            }?>
            
        </div>
   </section>
       



<?php
    include_once('./templates/footer.php');

?>   