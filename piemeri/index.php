<?php
$parent = "piemeri";
$title = "Par piemēriem";
include '../includes/header.php'; ?>


<div class="page_header">
<div class="row g-0  align-items-center">

<div class="col align-self-center"><h1><?php echo $title;?></h1></div>

</div>
</div>



<div class="content">
  <div class="container">
    <div class="row">
        <div class="col">



          <p>Šajā sadaļā ir uzskaitītas interneta sistēmas sadaļas, kurām ir atšķirīgs dizains. </p>


          <div class="mt-5 row d-flex align-items-stretch ds-sadalas">

            <div class="col-md-3 mb-3">
                <div class="card">
              <div class="card-body">
                <h2>Autorizācija</h2><a href="/piemeri/autorizacija.php" target="_blank">Atvērt <i class="ri-arrow-right-line"></i></a></div>
            </div>
            </div>


            <div class="col-md-3 mb-3">
                <div class="card">
              <div class="card-body">
                <h2>Darbvirsma</h2><a href="/piemeri/sakums.php" target="_blank">Atvērt <i class="ri-arrow-right-line"></i></a></div>
            </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card">
              <div class="card-body">
                <h2>Organizācijas profils</h2><a href="/piemeri/organizacijas_profils.php" target="_blank">Atvērt <i class="ri-arrow-right-line"></i></a></div>
            </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card">
              <div class="card-body">
                <h2>Publikāciju saraksts</h2><a href="/piemeri/publikaciju_saraksts.php" target="_blank">Atvērt <i class="ri-arrow-right-line"></i></a></div>
            </div>
            </div>

          </div>




            </div>
        </div>
    </div>
  </div>


    <?php include '../includes/footer.php'; ?>
