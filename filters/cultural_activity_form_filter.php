<?php  
	require_once '../db_connect.php';
?>
<div class="container">
	<div class="row">
   		<div class="col-md-12">
	     	<form id="cultural_activity_form" method="post" enctype="multipart/form-data" action="actions/
	     			cultural_activity_action.php">
			     
			    	<h4 class="col-md-12" style="font-weight:bolder;">Enter your Cultural Activity Details</h4>
			    	<hr>

			      	<div class="form-row col-md-12">
				    	<div class="form-group col-md-6">
					        <label >Roll-no.</label>
					        <input type="text" class="form-control" name="stu_id" value="<?php echo($_SESSION['user_id']) ?>" readonly>
				    	</div>
				      	<div class="form-group col-md-6">
				          <label>Student Name</label>
				          <input type="text" class="form-control" name="stu_name" value="<?php echo($_SESSION['user_full_name']) ?>" readonly>
				    	</div>
				    </div>	
			      	<div class="form-row col-md-12">
				    	<div class="form-group col-md-6">
				       		<label>Select Start Date</label>
				       		<input type="date" class="form-control" name="cultural_activity_start_date" required="true">
				    	</div>
				    	<div class="form-group col-md-6">
				       		<label>Select End Date</label>
				       		<input type="date" class="form-control" name="cultural_activity_end_date" required="true">		
				    	</div>
				    </div>
			        <div class="form-row col-md-12">
			        	<div class="form-group col-md-6">
				       		<label>Enter Name of the Cultural Activity:</label>
				        	<input type="text" class="form-control" name="cultural_activity_name" placeholder="Enter the name of the activity">
				        	<div class="invalid-feedback">Enter Name of the Activity.</div>
			    		</div>
				    	<div class="form-group col-md-6">
		                        <label>Year during Activity performed</label>
		                        <select name="stu_year" class="form-control" required="true">
		                            <option value="0">Please Select </option>
		                            <option value="1">FE</option>
		                            <option value="2">SE</option>
		                            <option value="3">TE</option>
		                            <option value="4">BE</option>
		                        </select>
		                    </div>
				    </div>
			      	<div class="form-group col-md-12">
				        <label>Describe the details of your activity:</label>
				        <!-- <input type="text" class="form-control" name="cultural_activity_description" placeholder="Enter your Position of Responsibility"> -->
				        <textarea class="form-control" rows="4" name="cultural_activity_description" placeholder="Describe your role in the team"></textarea>
			        	<div class="invalid-feedback">Describe the details of the activity</div>
				    </div>
				    <div class="form-group col-md-12">
	                    <label>Copy of Cultural Activity Certificate(Pdf format only)</label>
	                    <input type="file" class="form-control col-md-12" name="cultural_activity_certificate" required="true">
	                </div>
	                <input type="submit"id="cultural_activity_submit" value="Submit">
			</form>
		</div>
	</div>
</div>
