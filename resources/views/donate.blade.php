@extends('master.layout')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <title> Donation Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
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

        .jumbotron {
            background-color: #ffff;
        }

    </style>

</head>
<body>


    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/donate.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
              <h1 class="mb-0 bread">Donate</h1>
                <p class="breadcrumbs mb-2"><span class="mr-2"></i></a></span> <span>We need your support in taking care of these cuties!<i class="ion-ios-arrow-forward"></i></span></p>
            </div>
          </div>
        </div>
      </section>

    <div class="jumbotron">
        <form action="donate" method="post" id="donate">
            @csrf

            <div class="row">

                <div class="col-md-4 offset-md-4">
                    <h4 class="text-center" >Donation Form</h4>
                </div>

                <div class="col-md-4 offset-md-4">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name"  required/>

                    <label>Email</label>
                    <input type="text" class="form-control" name="email"  required/>

                    <label>Donation Amount</label>
                    <input type="number" name="amount" class="form-control" value="10" required/>


                    <div class="form-group">
                        <label>Proof of payment</label>
                        <br>
                        <input type="file" name="file" required>
                    </div>


                    <label>Notes</label>
                    <textarea class="form-control" rows="10" cols="63" name="notes" required></textarea>

                </div>


                <div class="col-md-4 offset-md-4">
                    <br>
                    <input type="submit" class="button-class" value="Donate" >
                </div>
            </div>
        </form>
    </div>
</body>

</html>

@endsection
