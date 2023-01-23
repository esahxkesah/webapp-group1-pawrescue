@extends('master.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pet Sitting - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <div class = "container2" >
        <div class = "single-pet" style='margin-top: 80px; margin-bottom: 60px;height: 100%'>
            <div class ="row">
                <div class="col-6">
                    <div class="pet-image">
                        <div class="pet-image-main">
                            <img src="{{asset('my_custom_symlink_2/'. $petDetails->file_path)}}" style='margin-left: 200px; width: 450px'>
                        </div>
                    </div>
                </div>
                <div class="column-6">
                    <div class="pet">
                        <div class="pet-title">
                            <h2>{{$petDetails->pet_name}}</h2>
                        </div>
                        <div class="pet-detail">
                            <h3>{{$petDetails->pet_type}}</h3>
                            <h3>{{$petDetails->pet_breed}}</h3>
                            <h3>{{$petDetails->pet_age}}</h3>
                            <h3>{{$petDetails->pet_sex}}</h3>
                        </div>
                        <div class="event-btn-group">
                            {{-- <button type="submit">Adoption</button> --}}
                            <button class="button-class" type="submit" onclick="myFunction()" id="new-adopt">Adoption</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>
<script>
    var form = document.getElementById('new-adopt');

    function myFunction()
    {
          if(form.checkValidity()){
            alert("You have adopted a pet!")
          }
    }
        </script>
@endsection
