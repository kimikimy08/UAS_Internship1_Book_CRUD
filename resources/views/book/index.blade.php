@extends('book.layout')

@section('content')
    <br><br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb  d-flex justify-content-between">
            <div class="pull-left">
                <h2>Books List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('create.book')}}">Create New Books</a>
            </div>
        </div>
    </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif
       
        <table class="table table-bordered">
            <tr>
                <th width="150px">ID</th>
                <th width="150px">Name</th>
                <th width="200px">Description</th>
                <th width="280px">Action</th>
            </tr>
            @foreach($book as $bk)
            <tr>
                
                <td>{{$bk -> id}}</td>
                <td>{{$bk -> name}}</td>
                <td>
                    {{str_limit($bk -> description, $limit = 100)}}
                </td>
                <td>
                    <a href="{{ URL::to('show/book/'.$bk->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ URL::to('edit/book/'.$bk->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ URL::to('delete/book/'.$bk->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</a>
                </td>
                
            </tr>
            @endforeach
        </table>

        {!! $book->links() !!}



    

@endsection