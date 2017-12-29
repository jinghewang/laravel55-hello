@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create invoice
    </h1>
    <a href="{!!url('invoice')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Invoice Index</a>
    <br>
    <form method = 'POST' action = '{!!url("invoice")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="no">no</label>
            <input id="no" name = "no" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection