<?php
  require_once 'header.php';
?>
<div class="container" style="margin-top:100px ">
  <div class="row">
    <div class="col-md-6">
      <form id="stu_temp" method="post">
        <div class="form-group col-md-12">
          <label> date</label>
          <input type="date" class="form-control" name="temp_stu_date" placeholder="Eg : abcd@somaiya.edu">
        </div>
        <div class="form-group col-md-12">
          <input type="button" id="submit_temp" value="submit">
        </div>

      </form>
    </div>
  </div>
</div>


<?php require_once 'footer.php' ?>