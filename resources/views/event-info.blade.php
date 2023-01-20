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

    <style>

        body{
            height:100%;
            width: 100%;
            margin:0;
        }

        .container2{
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
        }

        .left-column{
            width:40%;
            position:relative;
        }

        .left-column img{

            width: 100%;
            position: static;
            margin-top: 40px;
        }

        .right-column{
            width: 60%;
            margin-top:30px;
            float: right;
        }

        .single-event{
            width: 100%;
            margin-left: 100px;
        }

        .event-title h2{
            font-size: 50px;
        }

        .event-date h3{
            font-size: 20px;
        }

        .event-description p{
            font-size: 16px;
            line-height: 24px;
        }

        @media(max-width: 940px){
            .container2{
                flex-direction: column;
                margin-top:60px;
            }

            .left-column, .right-column {
            width: 100%;
            }

            .left-column img {
                width: 300px;
                right: 0;
                top: -65px;
                left: initial;
            }
        }

        @media (max-width: 535px) {
        .left-column img {
            width: 220px;
            top: -85px;
        }
        }


    </style>

  </head>


  <body>
    <div class = "container2" >

        <div class="left-column">
            <img src="{{asset('my_custom_symlink_1/'. $eventDetails->file_path)}}">
        </div>

        <div class="right-column">
            <div class="single-event">
                <div class="event-title">
                    <h2>{{$eventDetails->event_name}}</h2>
                </div>
                <div class="event-date">
                    <h3>Date: {{$eventDetails->event_date}}</h3>
                    <h3>Time: {{$eventDetails->event_time}} hours</h3>
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
  </body>

</html>

@endsection
