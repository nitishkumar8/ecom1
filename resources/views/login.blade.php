@extends('master')

@section('content')
<style type="text/css">
 .custom-login{
 	height:500px;
 	padding-top:30px;
 }	
</style>
<div class="container custom-login col-sm-4 offset-md-4">
  <h2>Login form</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <!-- <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div> -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection

