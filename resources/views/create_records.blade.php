<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.Validation{
  background-color: #FFF3EF;
}
.error{
  color: red;
}
</style>
</style>
</head>
<body>
   @extends('layout')
   @section('content')  
<div class="Validation">
  @if($errors->any())
  <strong class="error"><h3>OOPS !!!! Some Thing Went Wrong...</h3></strong>
  <ul class="error">
    @foreach($errors->all() as $error)
    <li>
      {{ $error }}
    </li>
    @endforeach
  </ul>
  @endif
</div>

<form action="/insert_records" method="post" style="max-width:500px;margin:auto">
  @csrf
  <h2>Register Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Student Name" name="stud_name">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Enter Email" name="stud_email">
  </div>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Enter Enrollment Number" name="stud_en_roll">
  </div>

  <div class="input-container">
 <i class="fas fa-mobile icon"></i>
    <input class="input-field" type="text" placeholder="Student mobile" name="stud_mobile">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="pass">
  </div>

  <button type="submit" class="btn">Register</button>
</form>
@endsection
</body>
</html>
