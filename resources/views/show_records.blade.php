<!DOCTYPE html>
<html lang="en">
<head>
  <title>Display Records</title>
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
  <h2>Records</h2>         
  <table class="table">
    <thead>
      <tr>
        <th>Sr No.</th>
        <th>Student Name</th>
        <th>Student E-mail</th>
        <th>Student Enrollment-No </th>
        <th>mobile</th>
        <th>Password</th>
        <th colspan="3">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $student)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->enroll_no }}</td>
        <td>{{ $student->mobile }}</td>
        <td>{{ $student->password }}</td>
        <td>
          <form action="{{Route('delete',$student->id)}}" method="post">
            <a href="{{Route('info',$student->id)}}" class="btn btn-info">info</a>
            <a href="{{Route('edit',$student->id)}}" class="btn btn-primary">Edit</a>
             @csrf
             <button type="submit" class="btn btn-danger">delete</button>
          </form>
        </td>
      </tr>
@endforeach
<span>{{$students->links()}}</span>
    </tbody>
  </table>
</div>
 @endsection
</body>
</html>
