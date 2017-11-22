@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Person Index
    </h1>
    <a href='{!!url("person")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>country</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($people as $person) 
            <tr>
                <td>{!!$person->id!!}</td>
                <td>{!!$person->name!!}</td>
                <td>{!!$person->age!!}</td>
                <td>{!!$person->country!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/person/{!!$person->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/person/{!!$person->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/person/{!!$person->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $people->render() !!}

</section>
@endsection