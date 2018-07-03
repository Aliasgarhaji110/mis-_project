<?php
  require_once 'header.php';
  if(!isset($_SESSION['user_name'])){
    require_once 'banner.php';
    // print_r($_SESSION);
  }


?>

<!-- Main Content -->
<div class="container">
  <?php if((isset($_SESSION['user_status']))&&($_SESSION['user_status']==1)): ?>
  		<div style="height: 50px"></div>
  <?php  
  	endif;
  ?>
  	
  <!-- <div style="height: 300px"></div> -->
  <?php if(isset($_SESSION['user_id'])): ?>
  <div class="row" style="margin-top: 20px">
  	<div class="col-md-3" style="">
  		<div id="accordion">
			<div class="card">
				<div class="card-header" id="headingOne">
				  <h5 class="mb-0">
				    <button class="btn btn-link" id="pd_button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				    Personal Details
				    </button>
				  </h5>
				</div>

				<div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">

				</div>
			</div>
			<div class="card">
				<div class="card-header" id="heading2">
				  <h5 class="mb-0">
				    <button class="btn btn-link" id="sa_button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
				    Student Activity
				    </button>
				  </h5>
				</div>

				<div id="collapse2" class="collapse " aria-labelledby="heading2" data-parent="#accordion">
				  <div class="card-body">
				    <ul style="list-style: none">
					    <li id="sa_act_edit"><a href="#">Add</a></li>
					    <li><a href="#">View/Edit</a></li>
				    </ul>
				  </div>
				</div>
			</div>
			<!-- <div class="card">
				<div class="card-header" id="headingOne">
				  <h5 class="mb-0">
				    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				    Personal Details
				    </button>
				  </h5>
				</div>

				<div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
				  <div class="card-body">
				    <ul>
				    	<li>persnal details</li>
				    	<li>persnal details</li>
				    	<li>persnal details</li>
				    	<li>persnal details</li>

				    </ul>
				  </div>
				</div>
			</div> -->				
		</div>
  	</div>
  	<div class="col-md-9" style="min-height: 500px">
  		<div class="row" id="element_entry"></div>
  	</div>

  </div>
  <?php endif; 
  ?>
</div>

<?php
  require_once 'footer.php';
?>