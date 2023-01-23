@extends('master.layout')
@section('content')

<!DOCTYPE html>
<style>
    h1
    {
        font-family: 'Nunito';
    }

    .form-container{
        display:flex;
        justify-content: center;
    }

    .form-control{
        margin-bottom: 20px;
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
<body>
<div class='form-container'>
    <form action="report" method="POST" id = "new-report">
        @csrf
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" style="width: 500px" required>
        </div>

        <div class="form-group">
            <label>Report Title</label>
            <input type="text" class="form-control" name="report_title" style="width: 500px" required>
        </div>

        <div class="form-group">
            <label>Report Details</label>
            <br>
            <textarea class="detail-input" rows="10" cols="63" name="report_details" required></textarea>
            {{-- <input type="text" class="form-control" name="eventDetail" style="width: 500px; height:400px" required> --}}
        </div>
        <button class="button-class" type="submit" onclick="reportFunction()">Submit</button>
</div>
    </form>
</body>
<script>
    var form = document.getElementById('new-report');

function reportFunction()
{
      if(form.checkValidity()){
        alert("Your report is submitted.")
         }
    }
</script>
@endsection;
