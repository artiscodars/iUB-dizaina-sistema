<?php
$parent = "komponentes";
$title = "Tabulas ";
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

            <p>Tabulai ir jānorāda klase <b>.responsive</b>, lai tā būtu adaptīva visiem ekrāniem. Papildus katrai ailei
                ir
                jāpievieno <b>data-label="Kolonnas nosaukums"</b>, lai uz mazajiem ekrāniem katrai rindai būtu
                nosaukums.
            </p>

            <div class="bd-example">
                <table class="table responsive ">
                    <thead>
                        <tr>
                            <th>Numurs <i class="bi bi-caret-down-fill"></i></th>
                            <th>Vārds <i class="bi bi-caret-down-fill"></i></th>
                            <th>Uzvārds <i class="bi bi-caret-down-fill"></i></th>
                            <th>Birka <i class="bi bi-caret-down-fill"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Numurs">1</td>
                            <td data-label="Vārds"><a href="#">Jānis</a></td>
                            <td data-label="Uzvārds">Bērziņš</td>
                            <td data-label="Birka">@janis</td>
                        </tr>
                        <tr>
                            <td data-label="Numurs">2</td>
                            <td data-label="Vārds"><a href="#">Anna</a></td>
                            <td data-label="Uzvārds">Liepiņa</td>
                            <td data-label="Birka">@anna</td>
                        </tr>
                        <tr>
                            <td data-label="Numurs">3</td>
                            <td data-label="Vārds"><a href="#">Afrēds</a></td>
                            <td data-label="Uzvārds">Hičkoks</td>
                            <td data-label="Birka">@alfonso</td>
                        </tr>
                        <tr>
                            <td data-label="Numurs">4</td>
                            <td data-label="Vārds"><a href="#">Zane</a></td>
                            <td data-label="Uzvārds">Biedriņa</td>
                            <td data-label="Birka">@zanic</td>
                        </tr>
                        <tr>
                            <td data-label="Numurs">5</td>
                            <td data-label="Vārds"><a href="#">Olafs</a></td>
                            <td data-label="Uzvārds">Baiss</td>
                            <td data-label="Birka">@baisais</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
</div>
<?php include '../includes/footer.php'; ?>
