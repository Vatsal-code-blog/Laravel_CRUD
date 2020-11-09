<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    .Validation{
  background-color: #FFF3EF;
}
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
<div class="container">
  <h4>Your Information <br><br> You Can Update It...<br><br></h4>         
  <table class="table">
    <thead>
      <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Student E-mail</th>
        <th>Student Enrollment-No </th>
        <th>mobile</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <tr>
      <form action="{{Route('update',$editid->id)}}" method="post">
        @csrf
        <td><input type="text" name="id" value="{{ $editid->id }}" readonly></td>
        <td><input type="text" name="name" value="{{ $editid->name }}"></td>
        <td><input type="text" name="email" value="{{ $editid->email }}"></td>
        <td><input type="text" name="enroll_no" value="{{ $editid->enroll_no }}"></td>
        <td><input type="text" name="mobile" value="{{ $editid->mobile }}"></td>
        <td><input type="text" name="password" value="{{ $editid->password }}"></td>
        <td><input class="btn btn-primary" type="submit" name="btnsumit"></td>
      </form>
      </tr>
    </tbody>
  </table>
</div>
 @endsection
</body>
</html>
