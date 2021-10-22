<?php
$parent = "komponentes";
$title = "Navigācijas ceļš ";
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

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Sākums</li>
                    </ol>
                </nav>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Sākums</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sadaļa</li>
                    </ol>
                </nav>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Sākums</a></li>
                        <li class="breadcrumb-item"><a href="#">Sadaļa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sadaļa</li>
                    </ol>
                </nav>

            </div>

        </div>
    </div>
</div>
</div>
<?php include '../includes/footer.php'; ?>
