<!DOCTYPE html>
<header>
  <link href="{{ asset('asset/css/bootstrap.css') }}" rel="stylesheet">
</header>
<html>
<body>
<h2></h2>
<form action="uploadimage" method="post" enctype="multipart/form-data">
  <label for="lname">UPLOAD IMAGE</label><br>
  <input type="FILE" id="" name="image[]" multiple value="Doe"><br>  
  <label for="lname"></label><br>
  <input type="submit" id="" name="submit" value="UPLOAD Image">
  @CSRF;
</form>

</body>
</html>