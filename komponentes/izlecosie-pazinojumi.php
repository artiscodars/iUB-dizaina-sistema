<?php
$parent = "komponentes";
$title = "Izlecošie paziņojumi";

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
            <p>Izlecošie paziņojumi tiek izmantoti, lai informētu lietotāju par kaut kādām darbībām, kas notiek sistēmā. Tās var būt gan lietotāja iniciētas, gan automātiskas.</p>

            <div class="bd-example">

                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="opacity:1">
                    <div class="toast-header">

                        <strong class="me-auto">Paziņojuma virsraksts</strong>
                        <small>3 minūtes atpakaļ</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Šeit paziņojuma teksts ne pārāk garš.
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
</div>
<?php include '../includes/footer.php'; ?>
