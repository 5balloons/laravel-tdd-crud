@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                        <div class="card-header"><strong>Update task</strong></div>

                        <div class="card-body">
                            <form method="POST" action="/tasks/{{$task->id}}">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter a title for your task" value="{{$task->title}}">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="description" placeholder="Provide a description for your task" rows="8">{{$task->description}}
                                    </textarea>
                                </div>
                                <button class="btn btn-primary" type="Submit" >Edit Task</button>
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
