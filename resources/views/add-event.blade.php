@extends('master.layout')
@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add New Event</title>

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

<h1>Add New Event</h1>
<br>

<div>

<form action="addevent" method="post" enctype="multipart/form-data">
        <!-- Add CSRF Token -->
        @csrf
    <div class="form-group">
        <label>Event Name</label>
        <input type="text" class="form-control" name="eventName" required>
    </div>
    <div class="form-group">
        <label>Event Date</label>
        <input type="date" class="form-control" name="eventDate" min="2023-01-18" required>
    </div>
    <div class="form-group">
        <label>Event Time</label>
        <input type="time" class="form-control" name="eventTime" required>
    </div>
    <div class="form-group">
        <label>Details of the Event</label>
        <input type="text" class="form-control" name="eventDetail" required>
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
