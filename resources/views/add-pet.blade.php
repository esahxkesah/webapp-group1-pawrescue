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

        .radio{

            width: 30px;
        }
       h1 {
            font-family: 'Nunito';
            display:flex;
            justify-content: center;
        }

        .form-container{
            display:flex;
            justify-content: center;
        }

        .form-control{
            margin-bottom: 20px;
        }

        .radio-class{

        }
        .button-class{
            background: #00bd56;
            border: 1px solid #00bd56;
            color: #fff;
            width: 100px;
            height: 50px;
            font-size: 18px;
            border-radius: 5px;
            margin-top: 30px;
        }

        .button-class:hover {
            border: 1px solid #00bd56;
            background: transparent;
            color: #00bd56;
            cursor: pointer;
            border-radius: 5px;
        }

        .detail-input{
            background: #fff;
            font-size: 14px;
            border-radius: 5px;
            -webkit-box-shadow: none;
            box-shadow: none;
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
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

<h1>Add New Pet</h1><br>
<div class='form-container'>

<form action="addpet" method="post" id="new-pet" enctype="multipart/form-data">
        <!-- Add CSRF Token -->
        @csrf
    <div class="form-group">
        <label>Pet's Name</label>
        <input type="text" class="form-control" name="petName" required>
    </div>
    <div class="form-group">
        <label>Pet's Type (eg: cat/dog/etc)</label>
        <input type="text" class="form-control" name="petType" required>
    </div>
    <div class="form-group">
        <label>Pet's Breed</label>
        <input type="text" class="form-control" name="petBreed" required>
    </div>
    <div class="form-group">
        <label>Pet's Age (month)</label>
        <input type="number" class="form-control" name="petAge" required>
    </div>
    <div class="form-group">
        <p>Pet's Sex</p>
        <input type="radio" class ="radio" class="form-control" name="petSex" value='Male' required>
        <label>Male Sex</label>
        <input type="radio" class ="radio" class="form-control" name="petSex" value='Female' required>
        <label>Female Sex</label>
    </div>
    <div class="form-group">
        <label>Pet's thumbnail picture</label>
        <input type="file" name="file" required>
    </div>
    <button class="button-class" type="submit" onclick="myFunction()">Submit</button>
</form>

</div>
</body>
</html>
<script>
var form = document.getElementById('new-pet');

function myFunction()
{
      if(form.checkValidity()){
        alert("New Pet added!")
      }
}
    </script>

@endsection
