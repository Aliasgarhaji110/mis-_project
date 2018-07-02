<?php  
  require_once '../db_connect.php';
?>


<div class="container">
  <div class="row">
    <div class="col-md-6">
    	<h2 style="font-weight: bolder;">Add Activity </h2>
      <form id="add_type_act_form" method="post" enctype="multipart/form-data" style="margin-top: 20px;">
        <div class="form-group col-md-12">
          <label> Enter Activity Name</label>
          <input type="text" class="form-control" name="add_type_act_name" placeholder="Eg: Internship" required="true">
        </div>
        <div class="form-group col-md-12">
          <label> Select Activity Type</label>
          <select class="form-control" name="add_type_main_act_id" required="true">
            <option value="0">Please Select</option>
            <?php
              $cre_res= mysqli_query($conn,"select  * from main_activity")or die(mysqli_error($conn));
              if($cre_res->num_rows>0):
                while($cre_ans=mysqli_fetch_assoc($cre_res)):
            ?>
            <option value="<?php echo($cre_ans['main_act_id']) ?>"><?php echo($cre_ans['main_act_name']) ?></option>
            <?php  
              endwhile;
              endif;
            ?>
          </select>
        </div>
        <div class="form-group col-md-12">
          <input type="button" id="add_type_act_button" value="submit">
        </div>

      </form>
    </div>
  </div>
</div>

