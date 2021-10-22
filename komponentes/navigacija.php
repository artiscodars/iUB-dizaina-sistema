<?php
$parent = "komponentes";
$title = "Galvenā navigācija ";
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

            <div class="bd-example">

                <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/menu.php'; ?>

            </div>

        </div>
    </div>
</div>
</div>
<?php include '../includes/footer.php'; ?>
