<?php
$parent = "visparigi";
$title = "Krāsas";
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

            <p>Sistēmās jāizmanto zemāk uzskaitītās krāsas. Krāsām SCSS ir definēti mainīgie, piemēram, <b>$tonis</b>.
            </p>
            <p></p>

            <h2 class="ds">
                Primārās krāsas
            </h2>

            <div class="row justify-content-center no-gutters">

                <div class="col-4">
                    <div class="card">
                        <div class="card-body text-center tonis-bg">
                            $tonis
                        </div>
                    </div>

                </div>


            </div>

            <h2 class="ds">
                Sekundārās krāsas
            </h2>

            <div class="row justify-content-center no-gutters">
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center sarkans-bg">
                            $sarkans
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center zals-bg">
                            $zals
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center oranzs-bg">
                            $oranzs
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <div class="row justify-content-center no-gutters">
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center zils-bg">
                            $zils
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center gaisi-peleks-bg">
                            $gaisi-peleks
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center tumsi-peleks-bg">
                            $tumsi-peleks
                        </div>
                    </div>
                </div>

            </div>



            <h2 class="ds">
                Palīgkrāsas
            </h2>
            <p>Papildus esošajām krasām dizaina sistēma tiek papildināta ar pelēkajiem toņiem, kas var tik izmantoti pēc nepieciešamības.</p>

            <div class="row justify-content-center no-gutters">
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center tonis-peleks-500-bg">
                            $peleks-500
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center  tonis-peleks-400-bg">
                            $peleks-400
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center tonis-peleks-300-bg">
                            $peleks-300
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center tonis-peleks-200-bg">
                            $peleks-200
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center tonis-peleks-100-bg">
                            $peleks-100
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
</div>
<?php include '../includes/footer.php'; ?>
