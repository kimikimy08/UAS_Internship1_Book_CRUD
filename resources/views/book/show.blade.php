@extends('book.layout')

@section('content')

<br><br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb  d-flex justify-content-between">
            <div class="pull-left">
                <h2>Show Book</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('book.index')}}">Back</a>
            </div>
        </div>
    </div>

    <div class="row p-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Name: </strong>
                {{$data->name}}
            </div>
        </div>
    </div>

    <div class="row p-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Description: </strong>
                {{$data->description}}
            </div>
        </div>
    </div>

@endsection