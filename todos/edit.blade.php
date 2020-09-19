@extends('layouts.app')

@section('content')

<h1 class="text-center my-5">Edit todos</h1>

<div class="row-justify-content-center">
<div class="col-md-8">

<div class="card card-default">
<div class="card-header">New todos
<div class="card-body">

@if($errors->any())
<div class="alert alert-danger">

<ul class="list-group">
@foreach($errors->all() as $error)


<li class="list group item">

{{$error}}

</li>
@endforeach
</ul>
</div>

@endif
<form action="/todos/{{$todo->id}}/update " method="POST">
@csrf
<div class="form-group">

<input type="text" class="form-control" name="name" placeholder="name" value="{{$todo->name}}">

</div>
<div class="form-group">

<textarea name="description" cols="5" rows="5" class="form-control" placeholder="description" >{{$todo->description}}</textarea>
</div>
<div class="form-group text-center">
<button type="submit "class="bun btn-success ">Create todo</button>
</div>
</form>
</div>

</div>

</div>
</div>
</div>


@endsection