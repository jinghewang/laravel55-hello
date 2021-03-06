@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show invoice
    </h1>
    <br>
    <a href='{!!url("invoice")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Invoice Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$invoice->name!!}</td>
            </tr>
            <tr>
                <td> <b>no</b> </td>
                <td>{!!$invoice->no!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection