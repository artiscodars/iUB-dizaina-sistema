<?php
$parent = "komponentes";
$title = "Koka skata navigācija ";
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

            <ul class="koks">
                <li>
                    <a href="#" class="with-children collapsed folder" data-bs-toggle="collapse"
                        data-bs-target="#p3_limenis_2_1" aria-expanded="false">Pirmā sadaļa</a>

                    <ul id="p3_limenis_2_1" class="collapse">
                        <li>
                            <a href="#" class="with-children collapsed folder" data-bs-toggle="collapse"
                                data-bs-target="#p3_limenis_3_1" aria-expanded="false">
                                Pirmās sadaļas apakšsadaļa
                            </a>

                            <ul id="p3_limenis_3_1" class="collapse">
                                <li>
                                    <a href="#" class="with-children collapsed folder" data-bs-toggle="collapse"
                                        data-bs-target="#p3_limenis_4_1" aria-expanded="false">Kaut kāda grupa

                                    </a>

                                    <ul id="p3_limenis_4_1" class="collapse">
                                        <li>
                                            <a href="#" class="excel">Excel</a>
                                        </li>
                                        <li>
                                            <a href="#" class="word">Word</a>

                                        </li>
                                        <li>
                                            <a href="#" class="pdf">PDF</a>

                                        </li>
                                        <li>
                                            <a href="#" class="csv">CSV</a>

                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="#" class="with-children collapsed list" data-bs-toggle="collapse"
                        data-bs-target="#p3_limenis_2_2"> Otrā sadaļa</a>

                    <ul id="p3_limenis_2_2" class="collapse">
                        <li>
                            <a href="#" class="with-children collapsed folder" data-bs-toggle="collapse"
                                data-bs-target="#p3_limenis_3_2">Paragrāfs Nr. 15</a>

                            <ul id="p3_limenis_3_2" class="collapse">
                                <li>
                                    <a href="#" class="with-children collapsed list" data-bs-toggle="collapse"
                                        data-bs-target="#p3_limenis_4_2">Paragrāfa nodaļas</a>

                                    <ul id="p3_limenis_4_2" class="collapse">
                                        <li>
                                            <a href="#" class="excel">Excel</a>
                                        </li>
                                        <li>
                                            <a href="#" class="word">Word</a>

                                        </li>
                                        <li>
                                            <a href="#" class="pdf">PDF</a>

                                        </li>
                                        <li>
                                            <a href="#" class="csv">CSV</a>

                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="#" class="with-children collapsed folder" data-bs-toggle="collapse"
                        data-bs-target="#p3_limenis_2_3">Trešā sadaļa</a>

                    <ul id="p3_limenis_2_3" class="collapse">
                        <li>
                            <a href="#" class="with-children collapsed list" data-bs-toggle="collapse"
                                data-bs-target="#p3_limenis_3_3">Paragrāfs Nr. 15</a>

                            <ul id="p3_limenis_3_3" class="collapse">
                                <li>
                                    <a href="#" class="with-children collapsed list" data-bs-toggle="collapse"
                                        data-bs-target="#p3_limenis_4_3">Paragrāfa nodaļas</a>

                                    <ul id="p3_limenis_4_3" class="collapse">
                                        <li>
                                            <a href="#" class="excel">Excel</a>
                                        </li>
                                        <li>
                                            <a href="#" class="word">Word</a>

                                        </li>
                                        <li>
                                            <a href="#" class="pdf">PDF</a>

                                        </li>
                                        <li>
                                            <a href="#" class="csv">CSV</a>

                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="#" class="with-children collapsed list" data-bs-toggle="collapse"
                        data-bs-target="#p3_limenis_2_4">Ceturtā sadaļa</a>

                    <ul id="p3_limenis_2_4" class="collapse">
                        <li>
                            <a href="#" class="with-children collapsed list" data-bs-toggle="collapse"
                                data-bs-target="#p3_limenis_3_4">Paragrāfs Nr. 15</a>

                            <ul id="p3_limenis_3_4" class="collapse">
                                <li>
                                    <a href="#" class="with-children collapsed list" data-bs-toggle="collapse"
                                        data-bs-target="#p3_limenis_4_4">Paragrāfa nodaļas</a>

                                    <ul id="p3_limenis_4_4" class="collapse">
                                        <li>
                                            <a href="#" class="excel">Excel</a>
                                        </li>
                                        <li>
                                            <a href="#" class="word">Word</a>

                                        </li>
                                        <li>
                                            <a href="#" class="pdf">PDF</a>

                                        </li>
                                        <li>
                                            <a href="#" class="csv">CSV</a>

                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </li>

            </ul>

        </div>

    </div>
</div>
</div>
</div>
<?php include '../includes/footer.php'; ?>
