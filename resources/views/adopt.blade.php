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

    {{-- header --}}
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-0 bread">Adoption</h1>
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Bring them to their beloved homes<i class="ion-ios-arrow-forward"></i></a></span></p>
          </div>
        </div>
      </div>
    </section>

    {{-- Content --}}

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @foreach($pets as $pet)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch">
                                <img src="{{asset('my_custom_symlink_2/'. $pet->file_path)}}" style='height: 100%; width: 100%; object-fit: contain'/>
                                <li><a href="{{route('pet.details', $pet->id)}}"></li>
                            </div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>{{$pet->pet_name}}</h3>
                            <div class="faded">
                                <p>{{$pet->pet_type}}</p>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


  </body>
</html>

@endsection
