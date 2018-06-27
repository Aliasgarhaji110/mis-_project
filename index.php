<?php
  require_once 'header.php';
  if(!isset($_SESSION['user_name'])){
    require_once 'banner.php';
    // print_r($_SESSION);
  }


?>

<!-- Main Content -->
<div class="container">
  <div style="height: 300px"></div>
</div>

<?php
  require_once 'footer.php';
?>