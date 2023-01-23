@extends('master.adminlayout')
@section('content')

<!DOCTYPE html>
<style>
    h2 {
  text-align: center;
  padding: 20px 0;
}

.table-bordered {
  border: 1px solid #ddd !important;
}

table caption {
  padding: .5em 0;
}

@media screen and (max-width: 767px) {
  table caption {
    display: none;
  }
}

.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
}
    </style>
<body>
    <h2>Reports by PawRescue members</h2>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="table-responsive" data-pattern="priority-columns">
        <table summary="This table shows how to create responsive tables using RWD-Table-Patterns' functionality" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>ReportID</th>
              <th data-priority="1">Username</th>
              <th data-priority="2">Report Title</th>
              <th data-priority="3">Report Details</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($reports as $report)
            <tr>
              <td>{{$report->id}}</td>
              <td>{{$report->username}}</td>
              <td>{{$report->report_title}}</td>
              <td>{{$report->report_details}}</td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div><!--end of .table-responsive-->
    </div>
  </div>
</div>

@endsection();
