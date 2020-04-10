@extends('MasterLayout.NavLayout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 6 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('instructor.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($instructor as $instruct)
        <tr>
            <td>{{$instruct->id }}</td>
            <td>{{$instruct->name }}</td>
            <td>
                <form action="{{ route('instructor.destroy',$instruct->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('instructor.show',$instruct->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('instructor.edit',$instruct->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $instructor->links() !!}

@endsection
