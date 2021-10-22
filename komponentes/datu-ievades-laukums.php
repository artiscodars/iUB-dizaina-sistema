<?php
$parent = "komponentes";
$title = "Datu ievades laukums";
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

                <div class="drop_in_area">

                    <h3>Ievelc datnes te</h3>
                    <div>vai</div>

                    <button class="btn btn-primary">Pārlūko datnes</button>

                    <div class="formats">
                        Atļautie daņu formāti: docx, doc, xlsx, xls, pdf
                    </div>
                    <div class="size">
                        Maksimālais datnes izmērs: 5MB
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
</div>
<?php include '../includes/footer.php'; ?>
