@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                        <div class="card-header"><strong>Add a new task</strong></div>

                        <div class="card-body">
                            <form method="POST" action="/tasks/create">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter a title for your task">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="description" placeholder="Provide a description for your task" rows="8">
                                    </textarea>
                                </div>
                                <button class="btn btn-primary" type="Submit" >Add Task</button>
                            </form>
                        </div>
                </div>

                @if(count($errors))
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
