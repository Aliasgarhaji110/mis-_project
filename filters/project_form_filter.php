<?php
	require_once '../db_connect.php'
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form id="#project_form" method="post" enctype="multipart/form-data" action="actions/project_action.php">
				<h4 class="col-md-12" style="font-weight:bolder;">Enter your Project Details:</h4>
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
		                        <label>Year during activity performed</label>
		                        <select name="stu_year" class="form-control" required="true">
		                            <option value="0">Please Select </option>
		                            <option value="1">FE</option>
		                            <option value="2">SE</option>
		                            <option value="3">TE</option>
		                            <option value="4">BE</option>
		                        </select>
		            </div>
				    <div class="form-group col-md-6">
					        <label>Mention your Project Title</label>
					        <input type="text" class="form-control" name="project_title" placeholder="Enter your Project Title.">
					        <div class="invalid-feedback">Mention your Project Title.</div>
				    </div>
				</div>
				<div class="form-group col-md-12">
				        <label>Describe the Aim of your of Project</label>
				        <textarea class="form-control" rows="4" name="project_description" placeholder="Describe the Aim of your of Project"></textarea>
			        	<div class="invalid-feedback">Describe the Aim of your of Project</div>
				</div>
				<div class="form-row col-md-12">
					<div class="form-group col-md-6">
	                    <label>Upload your Project Abstract(Pdf format only)</label>
	                    <input type="file" class="form-control" name="project_abstract" required="true">
	                </div>
					<div class="form-group col-md-6">
	                    <label>Copy of your Project Report(Pdf format only)</label>
	                    <input type="file" class="form-control" name="project_report" required="true">
	                </div>
	            </div>
	            <input type="submit" id="project_submit" value="Submit">
			</form>	
		</div>	
	</div>
</div>