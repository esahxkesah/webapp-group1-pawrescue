@extends('master.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>

    <title>PawRescue</title>

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

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/eventbg.jpeg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-0 bread">Events</h1>
          	<p class="breadcrumbs mb-2"><span class="mr-2"></i></a></span> <span>Participate in the events available <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    {{-- Content --}}

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @foreach($events as $event)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch">
                                <img src="{{asset('my_custom_symlink_1/'. $event->file_path)}}" style='height: 100%; width: 100%; object-fit: contain'/>
                                <li><a href="{{route('event.details', $event->id)}}"></li>
                            </div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>{{$event->event_name}}</h3>
                            <div class="faded">
                                <p>Date: {{$event->event_date}}</p>

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
