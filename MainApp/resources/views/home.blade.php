@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    test.blade.php<br>
@if ($list->count()>0)
<table class='table table-striped table-bordered'>
    <thead>
    <tr><td>id</td>
    <td>arrival date</td>
    <td>departure date</td>
    <td>adult count</td>
    <td>childs count</td>
    <td>contact number</td>
    <td> created at</td>
    <td> checked</td>
</tr>
</thead>
@foreach ($list as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->arrival_date}}</td>
    <td>{{$item->departure_date}}</td>
    <td>{{$item->adult_count}}</td>
    <td>{{$item->childs_count}}</td>
    <td>{{$item->contact_number}}</td>            
    <td>{{$item->created_at}}</td>  
    <td>{{$item->checked}}</td>            
</tr>
@endforeach
@else
Returned query is empty
@endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
