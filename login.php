<?php
  require_once 'header.php';

?>


    <div class="container" style="margin-top: 100px;">
  <div class="row">
    <div class="col-md-6">
      <form id="stu_credentials" >
      <h4 class="col-md-12" style="font-weight:bolder;">Login/Sign in</h4>
      <hr>
      <div class="form-group col-md-12">
      <label> Enter Login Email-id</label>
        <input type="email" class="form-control" name="stu_email" placeholder="Eg :abcd@somaiya.edu">
        <label> Password</label>
        <input type="password" class="form-control" name="stu_password" placeholder="Enter your password">
      </div>
       <button type="submit" class="btn btn-primary">Login</button>