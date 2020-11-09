<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  @extends('layout')
  @section('content')

<div class="container">
  <h2>Your Information</h2>         
  <table class="table">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Student E-mail</th>
        <th>Student Enrollment-No </th>
        <th>mobile</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>       
        <tr>
        <td>{{ $id->name }}</td>
        <td>{{ $id->email }}</td>
        <td>{{ $id->enroll_no }}</td>
        <td>{{ $id->mobile }}</td>
        <td>{{ $id->password }}</td>
      </tr>
    </tbody>
  </table>
</div>
 @endsection
</body>
</html>
