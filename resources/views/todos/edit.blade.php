@extends('layouts.app')


@section('content')

<h1 class="text-center my-5">Create Todos</h1>

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-header">Create new todo</div>
      <div class="card-body">

        @if ($errors->any())
          <div class="alert alert-danger">
            <div class="list-group">
              @foreach($errors->all() as $error)
                <div class="list-group-item">
                  {{ $error }}
                </div>
              @endforeach
            </div>
          </div>

        @endif

        <form action="/todos/{{ $todo->id }}/update-todos" method="POST">
        @csrf

        <!--Hidden Todo ID-->
            <!--input type="hidden" name="todo_id" value="{{ $todo->id }}"-->
         <!--END Hidden Todo ID-->

        <div class="form-group">
          <input  name="name" type="text" class="form-control" placeholder="Enter name" value = "{{ $todo->name }}">
        </div>
        <div class="form-group">
          <textarea name="description" cols=5 rows="5" placeholder="Enter description" class="form-control">{{ $todo->description }}</textarea>
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn btn-success">Update</button>
        </div>
        </form>

    </div>
    </div>
  </div>
</div>
@endsection