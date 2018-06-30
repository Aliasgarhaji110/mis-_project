<?php
  require_once 'header.php';
  if(!isset($_SESSION['user_name'])){
    require_once 'banner.php';
    // print_r($_SESSION);
  }


?>

<!-- Main Content -->
<div class="container">
  <!-- <div style="height: 300px"></div> -->
  <?php if(isset($_SESSION['user_id'])): ?>
  <div class="row" style="margin-top: 20px">
  	<div class="col-md-3" style="">
  		<div id="accordion">
			<div class="card">
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
			</div>
			<div class="card">
				<div class="card-header" id="heading2">
				  <h5 class="mb-0">
				    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
				    Student Activity
				    </button>
				  </h5>
				</div>

				<div id="collapse2" class="collapse " aria-labelledby="heading2" data-parent="#accordion">
				  <div class="card-body">
				    <ul style="list-style: none;">
				    <?php  
				    	$cre_res=mysqli_query($conn,"select * from main_activity") or die(mysqli_error($conn));
						if($cre_res->num_rows>0):
							while($cre_ans=mysqli_fetch_assoc($cre_res)):
				    ?>
				    	<li for="<?php echo($cre_ans['main_act_id']) ?>"><?php echo($cre_ans['main_act_name']) ?></li>
				    <?php  
				    	endwhile;
				    	endif;
				    ?>
				    	
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
  	<div class="col-md-9">
  		<div class="row" id="element_entry"></div>
  	</div>

  </div>
  <?php endif; 
  ?>
</div>

<?php
  require_once 'footer.php';
?>