<?php
  require_once 'header.php';
?>

<!-- Main Content -->
<div class="container">
	<div class="row">
   		<div class="col-md-6">
	     	<form id="temp_add_intership_form" method="post" enctype="multipart/form-data" action="actions/temp_internship_action.php">
			     
		    	<h4 class="col-md-12" style="font-weight:bolder;">Enter your Intership Details</h4>
		    	<hr>

		      	<div class="form-row col-md-12">	
			    	<div class="form-group col-md-6">
				        <label > Enter Roll-no.</label>
				        <input type="text" class="form-control" name="stu_id" placeholder="Enter rollno">
			    	</div>
			      	<div class="form-group col-md-6">
			          <label>Intership Type</label>
			          <select name="intership_season" class="form-control" required="true">
			        	<option value="0">Please select </option>
			        	<option value="1">Summer Intership </option>
			        	<option value="2">Winter Intership</option>
			       	  </select>
			    	</div>
			    	<div class="form-group col-md-6">
			       		<label>Select Start Date</label>
			       		<input type="date" class="form-control" name="intership_start_date">
			    	</div>
			    	<div class="form-group col-md-6">
			       		<label>Select End Date</label>
			       		<input type="date" class="form-control" name="intership_end_date">		
			    	</div>
			    	<div class="form-group col-md-6">
			          <label>Select Activity Type</label>
			          <select name="add_type_act_id" class="form-control" required="true">
			        	<option value="0">Please select </option>
			        	<option value="1">Extra-Curricular</option>
			        	<option value="2">Co-Curricular</option>
			       	  </select>
			    	</div>
			    	<div class="form-group col-md-6">
			       		<label>Enter Duration in months</label>
			       		<input type="text" class="form-control" name="intership_duration" placeholder="Eg: 2 ">		
			    	</div>
			    </div>
		        <div class="form-group col-md-12">
			        <label>Enter Name of the Organization/Institute:</label>
			        <input type="text" class="form-control" name="intership_org" placeholder="Enter the name of the organization">
		    	</div>
		        <div class="form-group col-md-12">
			        <label>Enter Name of Supervisor:</label>
			        <input type="text" class="form-control" name="intership_super_name" placeholder="Enter name of Supervisor">
		        </div>
		      	<div class="form-group col-md-12">
			        <label>Email id of Supervisor:</label>
			        <input type="email" class="form-control" name="intership_super_email" placeholder="Enter email-id of Supervisor">
		      	</div>
		      	<div class="form-row col-md-12">	
			      	<div class="form-group col-md-6">
				        <label>Contact number of Supervisor:</label>
				        <input type="text" class="form-control" name="intership_super_number" placeholder="Enter number of Supervisor">
			      	</div>
					<div class="form-group col-md-6">
                            <label>Copy of LOR/LOA(Pdf format)</label>
                            <input type="file" class="form-control" name="intership_lor" required="true">
                    </div>
                </div>
                <input type="submit" id="intership_submit" value="submit">
			</form>
		</div>
	</div>
</div>