@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit person
    </h1>
    <a href="{!!url('person')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Person Index</a>
    <br>
    <form method = 'POST' action = '{!! url("person")!!}/{!!$person->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="id">id</label>
            <input id="id" name = "id" type="text" class="form-control" value="{!!$person->
            id!!}"> 
        </div>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$person->
            name!!}"> 
        </div>
        <div class="form-group">
            <label for="age">age</label>
            <input id="age" name = "age" type="text" class="form-control" value="{!!$person->
            age!!}"> 
        </div>
        <div class="form-group">
            <label for="country">country</label>
            <input id="country" name = "country" type="text" class="form-control" value="{!!$person->
            country!!}"> 
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection