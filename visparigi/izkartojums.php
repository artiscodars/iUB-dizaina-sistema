<?php
$parent = "visparigi";
$title = "Izkārtojums";

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

            <h2 class="st-title">Datora ekrāna izmērā</h2>

            <p>Datora ekrāna sadalījums nosaka, ka kreisajā pusē tiek novietota sistēmu izvēlne, kas satur nepieciešamās dadaļas divos līmeņos. Līmeņu skaits var būt lielāks, bet vēlams izvērtēt līmeņu skaita nepieciešamību katrā konkrētā gadījumā.</p>

            <p>Lai palielinātu izmanojamo darba ekrānu ir ieviesta izvēles sakļaušanas funkcionalitāte, kas samazina kreisās puses izvēlni, atstājot vizuāli pieejamas sadaļu ikonas.</p>

            <p>Sistēmu galvene, ekrāna augšējā josla, satur sadaļas nosaukumu kreisajā pusē un darbību ikonas labajā pusē. Darbības ikonu skaits un veids dažādās sistēmās var atškirties.</p>



            <div class="bd-example">

                <iframe src="/index.php" class="izkartojums"></iframe>

            </div>

            <h2 class="st-title">Mobilā telefona ekrāna izmērā līdz 1024px platuma ekrāniem</h2>

            <p>Mobilo ierīču darbvirsma ir sadalīta augšējā joslā, ka satur izvēlnes pogu, kas no kreisās puses izslidina izvēlni, satura blokā un kājenē, kas satur EU fondu logotipus.</p>

            <p>Tā kā ekrāna izmērs ir ierobežots visas ikonu pgas, kas redzamas datoru izmēra ekrānos ir apvienotas vienā izslīdošajā izvēlnē, ka sapzīmēta ar ikonu <i class="ri-more-2-fill"></i>.</p>

            <div class="bd-example">

                <iframe src="/index.php" class="izkartojums mob"></iframe>

            </div>

        </div>
    </div>
</div>
</div>
<?php include '../includes/footer.php'; ?>
