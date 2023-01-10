@extends('layouts.main')

@section('content')
    <h1 class="text-center my-5 display-1">Trains</h1>
    <table class="table table-dark table-striped my-5">
    <thead>
    <tr class="text-center align-middle ">
        <th scope="col">#</th>
        <th scope="col">Company</th>
        <th scope="col">Departure_station</th>
        <th scope="col">Arrival_station</th>
        <th scope="col">Departure_time</th>
        <th scope="col">Arrival_time</th>
        <th scope="col">Code_train</th>
        <th scope="col">Number_carriages</th>
        <th scope="col">is_inTime</th>
        <th scope="col">is_Delete</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($trains as $train)
    <tr class="text-center align-middle">
        <th scope="row">{{$train->id}}</th>
            <td>{{$train->company}}</td>
            <td>{{$train->Departure_station}}</td>
            <td>{{$train->Arrival_station}}</td>
            <td>{{$train->Departure_time}}</td>
            <td>{{$train->Arrival_time}}</td>
            <td>{{$train->Code_train}}</td>
            <td>{{$train->Number_carriages}}</td>
            <td>{{$train->is_inTime}}</td>
            <td>{{$train->is_Delete}}</td>
            
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection