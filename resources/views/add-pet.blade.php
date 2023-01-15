@extends('master.layout')
@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add New Pet</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        h1 {
            font-family: 'Nunito';
        }
    </style>
</head>


<body>
<!-- if validation in the controller fails, show the errors -->
@if ($errors->any())
   <div class="alert alert-danger">
     <ul>
     @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
     </ul>
   </div>
@endif

<h1>Add New Pet</h1>
<br>

<div>

<form action="addpet" method="post" enctype="multipart/form-data">
        <!-- Add CSRF Token -->
        @csrf
    <div class="form-group">
        <label>Pet's Name</label>
        <input type="text" class="form-control" name="petName" required>
    </div>
    <div class="form-group">
        <label>Pet's Type</label>
        <input type="text" class="form-control" name="petType" required>
    </div>
    <div class="form-group">
        <label>Pet's Age</label>
        <input type="number" class="form-control" name="petAge" required>
    </div>
    <div class="form-group">
        <p>Pet's Sex</p>
        <input type="radio" class="form-control" name="petSex" value='male' required>
        <label>Male Sex</label>
        <input type="radio" class="form-control" name="petSex" value='female' required>
        <label>Female Sex</label>
    </div>
    <div class="form-group">
        <label>Event's thumbnail picture</label>
        <input type="file" name="file" required>
    </div>
    <button type="submit">Submit</button>
</form>

</div>
</body>
</html>

@endsection
