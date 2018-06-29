<?php
  require_once 'header.php';
?>
<div class="container" style="margin-top:100px ">
  <div class="row">
    <div class="col-md-6">
      <form id="stu_temp" method="post" enctype="multipart/form-data">
        <div class="form-group col-md-12">
          <label> Enter Somaiya Email-id</label>
          <input type="text" class="form-control" name="stu_id" placeholder="Eg : abcd@somaiya.edu">
        </div>
        <div class="form-group col-md-12">
          <label> Enter Password</label>
          <input type="password" class="form-control" name="stu_password" placeholder="Enter new Password">
        </div>
        <div class="form-group col-md-12">
          <input type="submit" id="submit_temp" value="submit">
        </div>

      </form>
    </div>
  </div>
</div>


<?php require_once 'footer.php' ?>