<div class="edit_window">

<div class="edit_form">

<div class="title">

  <h1><?php echo $title;?></h1>

<a href="#" class="close"></a>

</div>


<div class="form-content">
<?php
//mapes "formas" php faili ielasās atkarībā no tā kāds $slug definēts attiecīgajā sagatavē mapē piemēri.
include './formas/'.$slug.'.php'; ?>
</div>

<div class="modal-footer">

<a href="#" class="btn btn-primary">Saglabāt</a>

</div>


</div>

</div>
