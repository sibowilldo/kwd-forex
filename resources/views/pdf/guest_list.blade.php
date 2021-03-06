@extends('layouts.pdf')

@section('content')
    <header class="clearfix">
        <div id="logo">
            {{ Html::image('images/logo/KWD-FOREX-LOGO-black.png', '') }}
        </div>
        <h1>Guest List</h1>
        <h2>{{ $event->name }} <br><small>Hosted by: {{ $event->host }}</small></h2>
        <p>
            <strong>Date:</strong> {{ \Carbon\Carbon::parse($event->start_date)->toFormattedDateString() }} <br>
            <strong>Time:</strong> {{ $event->start_time }} to {{ $event->end_time }}
        </p>
    </header>

    <div id="main">
        <table class="striped condensed">
            <thead>
                <tr>
                    <th>Reference/th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Contact No.</th>
                    <th>Date</th>
                    <th>Signature</th>
                </tr>
            </thead>
            <tbody>
                @foreach($event->bookings as $booking)
                    <tr>
                        <td>{{ $booking->reference }}</td>
                        <td>{{ $booking->user->fullname }}</td>
                        <td>{{ $booking->user->email }}</td>
                        <td>{{ $booking->user->contactnumber }}</td>
                        <td>{{ $booking->created_at->toFormattedDateString() }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('styles')

    <style>
        header{
            margin-bottom: 40px
        }
        h2 {
            text-align: center;
            color: #444;
            font-size: 1.6em;
            font-weight: 100;
            letter-spacing: -1px;
        }

        h2 small {
            font-size: 0.8em;
            color: #777;
        }

        p {
            text-align: center;
            color: #444
        }

table {
  border-collapse: collapse;
  border-spacing: 0;
}
table th{
    color: #D2AC67;
}
table, th, td {
  border: none;
}

table {
  width: 100%;
  display: table;
}

table.bordered > thead > tr,
table.bordered > tbody > tr {
  border-bottom: 1px solid #d0d0d0;
}

table.striped > tbody > tr:nth-child(odd) {
  background-color: #f2f2f2;
}
thead {
    border-bottom: 1px solid #D2AC67;
}

td, th {
  padding: 15px 5px;
  display: table-cell;
  text-align: left;
  vertical-align: middle;
  border-radius: 2px;
}
    </style>
@stop