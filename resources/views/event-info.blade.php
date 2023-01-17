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

    <link rel="stylesheet" href="/css/animate.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">


    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">

    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/style.css">

  </head>


  <body>
    <div class = "container2" >
        <div class = "single-event" style='margin-top: 80px; margin-bottom: 60px;height: 100%'>
            <div class ="row">
                <div class="col-6">
                    <div class="event-image">
                        <div class="event-image-main">
                            <img src="{{asset('my_custom_symlink_1/'. $eventDetails->file_path)}}" style='margin-left: 200px; width: 450px'>
                        </div>
                    </div>
                </div>
                <div class="column-6">
                    <div class="event">
                        <div class="event-title">
                            <h2>{{$eventDetails->event_name}}</h2>
                        </div>
                        <div class="event-date">
                            <h3 style="font-size: 16px">Date: {{$eventDetails->event_date}}</h3>
                            <h3 style="font-size: 16px">Time: {{$eventDetails->event_time}} hours</h3>
                        </div>
                        <div class="event-description">
                            <p>{{$eventDetails->details}}</p>
                        </div>
                        <div class="event-btn-group">
                            <button type="submit">Participate</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </body>

</html>

@endsection
