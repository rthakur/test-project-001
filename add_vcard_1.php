<?php include('header.php'); ?>
<div class="app-container">
  <h3 class="text-center"> Setup Vcard </h3>
  <hr>
  <div class="row">
    <div class="col-md-3">
      <ul class="list-group">
        <li class="list-group-item"> <a href="?selected=about">About</a> </li>
        <li class="list-group-item"> <a href="?selected=service">Service</a> </li>
        <li class="list-group-item"> <a href="?selected=gallery">Gallery</a> </li>
      </ul>
    </div>
    <div class="col-md-9">
        <?php 
              $page = isset($_GET['selected'])? $_GET['selected'] : '';  
              if (  $page  == 'service' ){
                  include('service.php');
              }elseif ( $page  == 'gallery' ) {
                  include('gallery.php');
              }else{
                  include('about.php');
              } 
         ?>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>