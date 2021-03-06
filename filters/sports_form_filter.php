<?php  
	require_once '../db_connect.php';
?>
<div class="container">
	<div class="row">
   		<div class="col-md-12">
	     	<form id="sports_form" method="post" enctype="multipart/form-data" action="actions/
	     			sports_action.php">
			     
			    	<h4 class="col-md-12" style="font-weight:bolder;">Enter your Sport Details</h4>
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
				       		<input type="date" class="form-control" name="sports_start_date" required="true">
				    	</div>
				    	<div class="form-group col-md-6">
				       		<label>Select End Date</label>
				       		<input type="date" class="form-control" name="sports_end_date" required="true">		
				    	</div>
				    </div>
			        <div class="form-row col-md-12">
			        	<div class="form-group col-md-6">
				       		<label>Enter Name of the Sport </label>
				        	<input type="text" class="form-control" name="sports_name" placeholder="Enter the name of the sport">
				        	<div class="invalid-feedback">Enter Name of the sport.</div>
			    		</div>
				    	<div class="form-group col-md-6">
		                        <label>Year during sport performed</label>
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
				        <label>Describe the details of your sport:</label>
				        <!-- <input type="text" class="form-control" name="sports_description" placeholder="Enter your Position of Responsibility"> -->
				        <textarea class="form-control" rows="4" name="sports_description" placeholder="Describe your role in the team"></textarea>
			        	<div class="invalid-feedback">Describe the details of the sport</div>
				    </div>
				    <div class="form-group col-md-12">
	                    <label>Copy of Sport Certificate(Pdf format only)</label>
	                    <input type="file" class="form-control col-md-12" name="sports_certificate" required="true">
	                </div>
	                <input type="submit"id="sports_submit" value="Submit">
			</form>
		</div>
	</div>
</div>
