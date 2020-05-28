<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('')}}/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h2 class="display-3">Flights Avilable</h2>
    
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>Num</th>
                <th>DepartureDateTime</th>
                <th>ArrivalDateTime</th>
                <th>FlightNumber</th>
                <th>ElapsedTime</th>
                <th>OperatingAirlineName</th>
                <th>DepartureAirportName</th>
                <th>ArrivalAirportName</th>
                <th>FlightLayoverTime</th>
              </tr>

              @for($i = 0; $i < count($avilableFlightsFlyAllOver); $i++){{-- Get the numbers of all the incoming arrays  --}}

              {{-- Loop to Access the first array--}}
              @foreach ($avilableFlightsFlyAllOver[$i]['flights'] as $items) 
              <td><br>
              {{--loop to get every invidual array   --}}
              @foreach ($items as $key => $item) 

              <tr>
                {{-- Catcing the array's key --}}
                @if($key == 0) 
                <th>{{$i}}</th>
                @elseif($key == 1)
                <th></th>
                @endif
                <td>{{\Carbon\Carbon::parse($item["DepartureDateTime"])->isoFormat('MMMM Do YYYY, h:mm a')}}</>
                <td>{{\Carbon\Carbon::parse($item["ArrivalDateTime"])->isoFormat('MMMM Do YYYY, h:mm a')}}</td>
                <td>{{$item["FlightNumber"]}}</td>
                <td>{{floor($item["ElapsedTime"]/60) . " Hours " . $item['ElapsedTime']%60 . " Mins"}}</td>
                <td>{{$item["OperatingAirlineName"]}}</td>
                <td>{{$item["DepartureAirportName"]}}</td>
                <td>{{$item["ArrivalAirportName"]}}</td>
                {{-- <td>{{$item["FlightLayoverTime"]}}</td> --}}
                
                @if($key == 0)
                @for($x = 1; $x < count($items); $x++)
                <td>{{floor($items[$x]["FlightLayoverTime"]/60) . " Hours " . $items[$x]['FlightLayoverTime']%60 . " Mins"}}</td>
                @endfor
                @endif

              </tr>
              
              @endforeach
              @endforeach
              @endfor
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    </div>