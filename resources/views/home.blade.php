<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ url('')}}/css/bootstrap.css">

        <title>FlyAllOver</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>

            .form-inline {  
                display: flex;
                flex-flow: row wrap;
                align-items: center;
            }

                .form-inline label {
                margin: 5px 10px 5px 0;
            }

                .form-inline input {
                vertical-align: middle;
                margin: 5px 10px 5px 0;
                padding: 10px;
                background-color: #fff;
                border: 1px solid #ddd;
            }

                .form-inline button {
                padding: 10px 20px;
                background-color: dodgerblue;
                border: 1px solid #ddd;
                color: white;
                cursor: pointer;
            }

                .form-inline button:hover {
                background-color: royalblue;
            }

                @media (max-width: 800px) {
                    .form-inline input {
                        margin: 10px 0;
                }
                    
                    .form-inline {
                        flex-direction: column;
                        align-items: stretch;
                }
            }
        </style>
    </head>
    <body>
<div class="container">
<form class="form-inline" action="{{route('show.results.api')}}" method="POST">

    @csrf
            <div class="form-group row">
                <label for="trip_type">One Way</label>
                <input type="radio" name="trip_type">
                <label for="name">{{ __('From') }}</label>
                    <input id="origin" name="from" type="text" class="form-control value="" required autocomplete="name" placeholder="Country Or Airport" autofocus>
                <label for="name">{{ __('To') }}</label>
                    <input id="to" name="destination" type="text" class="form-control value="CAI" required autocomplete="name" placeholder="Country Or Airport" autofocus>
                <label for="name">{{ __('Depart') }}</label>
                    <input id="name" name="departure_date" type="date" class="form-control value="JFK" required autocomplete="name" placeholder="Depart">
                <label for="name">{{ __('Travellers') }}</label>
                    <input id="name" type="number" min="1"  name="traveller" type="text" class="form-control value="Cai" required autocomplete="name">
                <label for="name">{{ __('Class') }}</label>
                    <label for="cars">Choose a Class:</label>
                    <select id="cars" name="class">
                    <option class="form-control required value="Economy">Economy</option>
                    </select>
                </div>
                <input type="submit" value="Submit">

        </form>
    </div>  

    <script>


        document.getElementById("origin").value = "CAI";
        document.getElementById("to").value  = "JFK"

        

    </script>
        
    </body>
</html>
