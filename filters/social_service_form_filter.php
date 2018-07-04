<?php  
	require_once '../db_connect.php';
?>
<div class="container">
	<div class="row">
   		<div class="col-md-12">
	     	<form id="social_service_form" method="post" enctype="multipart/form-data" action="actions/social_service_action.php">
			     
		    	<h4 class="col-md-12" style="font-weight:bolder;">Enter Social Service Details</h4>
		    	<hr>

		      	<div class="form-row col-md-12">	
			    	<div class="form-group col-md-6">
				        <label >Roll-no.</label>
				        <input type="text" class="form-control" name="stu_id" value="<?php echo($_SESSION['user_id']) ?>" >
			    	</div>
			      	<div class="form-group col-md-6">
			          <label>Student Name</label>
			          <input type="text" class="form-control" name="stu_name" value="<?php echo($_SESSION['user_full_name']) ?>" disabled>
			    	</div>
			    	<div class="form-group col-md-6">
			       		<label>Select Start Date</label>
			       		<input type="date" class="form-control" name="social_service_start_date" required="true">
			    	</div>
			    	<div class="form-group col-md-6">
			       		<label>Select End Date</label>
			       		<input type="date" class="form-control" name="social_service_end_date" required="true">		
			    	</div>
			    	
			    </div>
		        <div class="form-group col-md-12">
			        <label>Enter Name of the Organization/Institute:</label>
			        <input type="text" class="form-control check_name" name="social_service_org" placeholder="Enter the name of the organization">
			        <div class="invalid-feedback">Enter Name of the Organization/Institute</div>
		    	</div>
		        <div class="form-group col-md-12">
			        <label>Enter Name of Person Incharge:</label>
			        <input type="text" class="form-control check_name" name="social_service_incharge_name" placeholder="Enter name of Person Incharge">
			        <div class="invalid-feedback">Enter Name of Person Incharge</div>
		        </div>
		      	<div class="form-group col-md-12">
			        <label>Email id of Person Incharge:</label>
			        <input type="email" class="form-control check_email" name="social_service_incharge_email" placeholder="Enter email-id of Person Incharge">
			        <div class="invalid-feedback">Enter Email of Person Incharge</div>
		      	</div>
		      	<div class="form-group col-md-12">
			        <label>Contact number of Person Incharge:</label>
			        <input type="text" class="form-control check_number" name="social_service_incharge_number" placeholder="Enter number of Person Incharge">
		        	<div class="invalid-feedback">Enter Contact Number of Person Incharge</div>
			    </div>
			    <div class="form-group col-md-12">
			        <label>Description of the Service:</label>
			        <textarea class="form-control check_description" name="social_service_description" placeholder="Enter Descriptiion of the Service"></textarea>
		        	<div class="invalid-feedback">Enter Proper Descriptiion</div>
			    </div>
		      	<div class="form-row col-md-12">	
					<div class="form-group col-md-6">
                            <label>Copy of Certificate(Pdf format only)</label>
                            <input type="file" class="form-control" name="social_service_certificate" required="true">
                    </div>
                    <div class="form-group col-md-6">
                            <label>Copy of Report(Pdf format only)</label>
                            <input type="file" class="form-control" name="social_service_report" required="true">
                    </div>
                </div>
                <input type="submit" id="social_service_submit" value="submit">
			</form>
		</div>
	</div>
</div>