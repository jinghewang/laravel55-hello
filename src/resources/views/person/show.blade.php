@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show person
    </h1>
    <br>
    <a href='{!!url("person")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Person Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>id</b> </td>
                <td>{!!$person->id!!}</td>
            </tr>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$person->name!!}</td>
            </tr>
            <tr>
                <td> <b>age</b> </td>
                <td>{!!$person->age!!}</td>
            </tr>
            <tr>
                <td> <b>country</b> </td>
                <td>{!!$person->country!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection