<?php
$parent = "komponentes";
$title = "Padomu rīki ";
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
            <p>Padomu rīki ir izlecoši lodziņi, kas paskaidro pogas vai saites darbību. To izmanto gadījumos, kad saitē vai pogas tekstā nepietiek vietas, lai ar tās nosaukuma palīdzību skaidri pateiktu, kam tā domāta.</p>

            <div class="bd-example">
                <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Augšā">
                    Augšā
                </button>
            </div>
            <div class="bd-example">
                <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                    title="Pa labi">
                    Pa labi
                </button>
            </div>
            <div class="bd-example">
                <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    title="Apakšā">
                    Apakšā
                </button>
            </div>
            <div class="bd-example">
                <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="left"
                    title="Pa kreisi">
                    Pa kreisi
                </button>
            </div>
        </div>
    </div>
</div>
</div>
<?php include '../includes/footer.php'; ?>
