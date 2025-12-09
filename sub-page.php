<?php

$PageTitle = "Ciencia Puerto Rico - Página Interna";
$page = "Página Interna";

function customPageHeader()
{ ?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('templates/header.php'); ?>

<div class="container-fluid">
  <div class="row header-bg-img py-xl-5 py-3">
    <h1 class="text-center text-white">Página Interna</h1>
  </div>
</div>

<div class="container-lg">
  <div class="row pt-100 pt-5 pb-3 pb-md-5 pb-64 d-flex">
    <div class="col-sm-6 mb-3">
      <img class="rounded-4 img-fluid" src="images/image-placeholder.jpg" alt="Image Example">
    </div>
    <div class="col-sm-6 ps-4 mb-md-5">
      <h2 class="fs-3 fw-bold text-primary  mb-4">Title Example</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempor efficitur tortor, id euismod mauris imperdiet ut. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras tincidunt lorem et nulla lobortis, ut efficitur urna elementum.</p>
      <p>Phasellus rutrum diam vitae sapien rutrum ullamcorper nec et eros. Vestibulum nec rhoncus arcu, nec aliquet lorem. Sed id dolor feugiat, convallis massa quis, maximus lacus.</p>
      <p>Nullam et dui feugiat, efficitur est id, suscipit augue. Donec faucibus rutrum lectus et tempor. Fusce viverra pellentesque turpis, molestie suscipit libero commodo nec. Pellentesque dictum interdum ipsum, sit amet fermentum lorem rhoncus et.</p>
    </div>
  </div>
</div>

<?php
include_once('templates/footer.php');
?>